<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'file_name',
        'kode_materi',
        'student_id',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];
    protected static function onBoot()
    {
        self::created(function ($model) {
            $materi_feedback = new MateriFeedback();
            $materi_feedback->student_id = $model->student_id;
            $materi_feedback->kode_materi = $model->kode_materi;
            $materi_feedback->materi_id = $model->id;
            $materi_feedback->save();
        });
    }

    protected $guarded = ['id'];
}
