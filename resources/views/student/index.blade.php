@extends('layouts.app')

@section('content')
    <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Student</a></li>
                        <li class="breadcrumb-item active">Judul</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-3 clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card mb-3 single_post">
                    <img class="card-img-top" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/blog-page-1.jpg')}}" alt="First slide">
                    <div class="card-body">
                        <h4><a href="blog-details.html">All photographs are accurate</a></h4>
                        <p class="my-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Comments 3</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="row clearfix mb-3">
                                <div class="col-sm-2 col-4">
                                    <img class="img-fluid img-thumbnail" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/sm/avatar2.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="col-sm-10 col-8">
                                    <h6>Gigi Hadid</h6>
                                    <p class="mb-0">Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Mar 09 2021</a></li>
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="row clearfix mb-3">
                                <div class="col-sm-2 col-4">
                                    <img class="img-fluid img-thumbnail" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/sm/avatar3.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="col-sm-10 col-8">
                                    <h6>Christian Louboutin</h6>
                                    <p class="mb-0">Great tutorial but few issues with it? If i try open post i get following errors. Please can you help me?</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Mar 12 2021</a></li>
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="row clearfix">
                                <div class="col-sm-2 col-4">
                                    <img class="img-fluid img-thumbnail" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/sm/avatar4.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="col-sm-10 col-8">
                                    <h6>Kendall Jenner</h6>
                                    <p class="mb-0">Very nice and informative article. In all the years I've done small and side-projects as a freelancer, I've ran into a few problems here and there.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Mar 20 2021</a></li>
                                        <li class="list-inline-item pe-2"><a href="javascript:void(0);">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Leave a reply</h6>
                        <small>Your email address will not be published. Required fields are marked*</small>
                    </div>
                    <div class="card-body">
                        <form class="row g-2">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-12">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Categories Clouds</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-inline">
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">eCommerce</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Microsoft Technologies</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Creative UX</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Wordpress</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Angular JS</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Enterprise Mobility</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Website Design</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">HTML5</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Infographics</a>
                            </li>
                            <li class="list-inline-item border border-primary rounded link-primary p-2 m-1">
                                <a href="javascript:void(0);">Wordpress Development</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Popular Posts</h6>
                    </div>
                    <div class="card-body">
                        <div class="single_post mb-3">
                            <img class="img-fluid rounded" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/blog-page-1.jpg')}}" alt="Awesome Image">
                            <p class="lead mb-0 mt-1">Apple Introduces Search Ads Basic</p>
                            <span class="text-muted">jun 22, 2021</span>
                        </div>
                        <div class="single_post">
                            <img class="img-fluid rounded" src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/blog-page-2.jpg')}}" alt="Awesome Image">
                            <p class="lead mb-0 mt-1">new rules, more cars, more races</p>
                            <span class="text-muted">jun 22, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="card-title">Instagram Post</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/05-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/06-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/08-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/06-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/05-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/06-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/07-img.jpg')}}" alt="image description"></a></li>
                            <li class="p-1"><a href="javascript:void(0);"><img src="{{asset('storage/app/public/bootstrap5/dist/assets/images/blog/08-img.jpg')}}" alt="image description"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="card-title">Email Newsletter</h6>
                        <small>Get our products/news earlier than others, let’s get in touch.</small>
                    </div>
                    <div class="card-body widget newsletter">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection