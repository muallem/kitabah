<?php

namespace App\Http\Livewire\AdminThesis;

use App\Models\Thesis;
use App\Traits\WithDatatable;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Datatable extends Component
{
    use WithDatatable;

    protected $listeners = [
        'addFilter',
        'getColumns',
        'refreshDatatable' => '$refresh',
    ];

    public function onMount()
    {
        $this->sortDirection = 'desc';
    }

    public function addFilter($filter)
    {
        foreach ($filter as $key => $value) {
            $this->$key = $value;
        }
    }

    public function destroy($id)
    {
        Thesis::find($id)->delete();
        $this->emit('SwalSuccess', "Berhasil", 'Berhasil menghapus data');
    }

    public function getColumns(): array
    {
        return [
            [
                'name' => 'Action',
                'sortable' => false,
                'searchable' => false,
                'render' => function ($item) {

                    $editHtml = "";
                        $editHtml = "<button class='btn btn-sm ml-2 text-nowrap dropdown-item' data-bs-toggle='modal'
                        data-bs-target='#detailModal' wire:click=\"\$emit('editDetailThesis','$item->id')\"><i class='fa fa-edit mr-2'></i>Edit</button>
                        <div class=\"dropdown-divider\"></div>\n";
                    

                    $destroyHtml = "";
                        $destroyHtml = "<form wire:submit.prevent=\"destroy('$item->id')\">"
                            . method_field('DELETE') . csrf_field() .
                            "<button type='submit' class='btn btn-sm ml-2 text-nowrap dropdown-item'
                                onclick=\"return confirm('Delete Data?')\">
                                <i class='fa fa-trash mr-2'></i>Hapus
                            </button>
                            </form>";
                         $action = "

                         <button type=\"button\" class=\"btn btn-primary btn-sm dropdown dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Aksi <i class=\"mdi mdi-chevron-down\"></i></button>\n
                         <div class=\"dropdown-menu\">\n     
                             $editHtml
                             $destroyHtml
                         </div>
                    ";
                    return $action;

                },
            ],
            [
                'key' => 'title',
                'name' => 'Judul',
                'render' => function ($item) {

                    $html = "<div class='text-nowrap'>$item->title</div>";

                    return $html;
                },
            ],
            [
                'key' => 'group',
                'name' => 'Jenis Skripsi',
                'render' => function ($item) {

                    $html = "<div class='text-nowrap'>$item->group</div>";

                    return $html;
                },
            ],
            [
                'key' => 'wpjs_users',
                'name' => 'Nama Siswa',
                'render' => function ($item) {
                    $name = $item->wpjs_users->user_login;
                    $html = "<div class='text-nowrap'>$name</div>";
            
                    return $html;
                },
                'query' => function ($query, $keyword) {
                    $query->whereHas('wpjs_users', function ($query) use ($keyword) {
                        $query->where('user_login', 'LIKE', "%$keyword%");
                    });
                },
            ],
            
        ];
    }
    public function getQuery(): Builder
    {
        return Thesis::select('id', 'title', 'group', 'student_id')->leftJoin('wpjs_users', 'theses.student_id', '=', 'wpjs_users.id');
    }


    public function getView(): String
    {
        return 'livewire.admin-thesis.datatable';
    }
}
