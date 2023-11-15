@extends('layouts.app')

@section('sidebar')
    @livewire('component.sidebar')    
@endsection

@section('content')
    <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Student</a></li>
                        <li class="breadcrumb-item active">Kual</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-3 clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Example Tab 3</h6>
                        <small class="d-block"><code class="highlighter-rouge">.nav-tabs-new2</code></small>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-new2" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link show active" data-bs-toggle="tab" href="#Home-new2" aria-selected="true" role="tab">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Profile-new2" aria-selected="false" role="tab" tabindex="-1">Profile</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Contact-new2" aria-selected="false" role="tab" tabindex="-1">Contact</a></li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade active show" id="Home-new2" role="tabpanel">
                                <h6>Home</h6>
                                <p>
                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                                    retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                </p>
                            </div>
                            <div class="tab-pane" id="Profile-new2" role="tabpanel">
                                <h6>Profile</h6>
                                <p>
                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                                    skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel
                                </p>
                            </div>
                            <div class="tab-pane" id="Contact-new2" role="tabpanel">
                                <h6>Contact</h6>
                                <p>
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                    beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 single_post">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="my-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h1>Kual</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection