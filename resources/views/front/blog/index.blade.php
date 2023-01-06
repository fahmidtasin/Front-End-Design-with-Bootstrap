@extends('front.master')


@section('title')
    Blog Page
@endsection


@section('body')
{{--Topbar--}}
    <section class="py-5">
        <div class="top-bar">

            <h1>Our Blog</h1><br>
            <p>News from WiztecBD and Around The World of Digital <br>Services Agency</p>

        </div>
    </section>

{{--Section1--}}
   <section class="py-1">
       <div class="container">
           <div class="row">
               <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 1001px; height: 350px;" alt="">
                        </div>
                        <div class="card-title" style="color: white">
                            <div class="container-fluid" id="card-rectangle">
                                <i style="margin: 20px 0px 0px 20px;" class="fa-regular fa-user"></i>
                                <p style="color: white" class="d-inline">My Dalky</p>

                                |<i style="margin: 20px 0px 0px 20px;" class="fa-solid fa-calendar-days"></i>
                                <p style="color: white" class="d-inline">16 Dec, 2022</p>

                                |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-tag"></i>
                                <p style="color: white" class="d-inline">Digital Marketing</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </div>
                            <div class="container-fluid mt-3">
                                <a href="{{route('details_page')}}" class="btn btn-color">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-md-5">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-8 mx-auto">
                               <form class="d-flex">
                                   <input class="form-control" type="search" placeholder="Search Here.." aria-label="Search">
                                   <button class="btn search-btn-color me-1 d-inline" type="submit"><i class="fa-solid fa-search"></i></button>
                               </form>
                           </div>
                       </div>
                       <div class="row mt-3">
                           <div class="col-md-8 mx-auto">
                               <div class="card">
                                   <div class="card-header default-color">
                                       <h4>Recent Post</h4>
                                   </div>
                                   <div class="card-body">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 174px; height: 116px;" alt="">
                                           </div>
                                           <div class="col-md-6 container-fluid">
                                               <h6>Is It Time to Switch to a New SEO Tool?</h6>
                                                  <i class="fa-solid fa-calendar-day"></i><p class="d-inline">16 Dec, 2022</p>
                                           </div>
                                       </div>
                                       <div class="row mt-2">
                                           <div class="col-md-6">
                                               <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 174px; height: 116px;" alt="">
                                           </div>
                                           <div class="col-md-6 container-fluid">
                                               <h6>Is It Time to Switch to a New SEO Tool?</h6>
                                               <i class="fa-solid fa-calendar-day"></i><p class="d-inline">16 Dec, 2022</p>
                                           </div>
                                       </div>
                                       <div class="row mt-2">
                                           <div class="col-md-6">
                                               <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 174px; height: 116px;" alt="">
                                           </div>
                                           <div class="col-md-6 container-fluid">
                                               <h6>Is It Time to Switch to a New SEO Tool?</h6>
                                               <i class="fa-solid fa-calendar-day"></i><p class="d-inline">16 Dec, 2022</p>
                                           </div>
                                       </div>
                                       <div class="row mt-2">
                                           <div class="col-md-6">
                                               <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 174px; height: 116px;" alt="">
                                           </div>
                                           <div class="col-md-6 container-fluid">
                                               <h6>Is It Time to Switch to a New SEO Tool?</h6>
                                               <i class="fa-solid fa-calendar-day"></i><p class="d-inline">16 Dec, 2022</p>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
{{--Section2--}}
       <section class="py-2">
       <div class="container">
           <div class="row">
               <div class="col-md-7">
                   <div class="card">
                       <div class="card-header">
                           <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 1001px; height: 350px;" alt="">
                       </div>
                       <div class="card-title" style="color: white">
                           <div class="container-fluid" id="card-rectangle">
                               <i style="margin: 20px 0px 0px 20px;" class="fa-regular fa-user"></i>
                               <p style="color: white" class="d-inline">My Dalky</p>

                               |<i style="margin: 20px 0px 0px 20px;" class="fa-solid fa-calendar-days"></i>
                               <p style="color: white" class="d-inline">16 Dec, 2022</p>

                               |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-tag"></i>
                               <p style="color: white" class="d-inline">Digital Marketing</p>
                           </div>
                       </div>
                       <div class="card-body">
                           <div class="container-fluid">
                               It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                           </div>
                           <div class="container-fluid mt-3">
                               <a href="{{route('details_page')}}" class="btn btn-color">Read More <i class="fa-solid fa-arrow-right"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-8 mx-auto">
                               <div class="card">
                                   <div class="card-header default-color">
                                       <h4>Categories</h4>
                                   </div>
                                   <div class="card-body">
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">Careers</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-3"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">Design</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-3"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">Digital Marketing</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-2"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">UX/UI Desgin</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-2"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">SEO Tools</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-2"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">Link Binding</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-2"></i>
                                           </div>
                                           <hr>
                                       </div>
                                       <div class="row text-center">
                                           <div class="col-md-6">
                                               <h6 class="fa-bold">Web Design & Development</h6>
                                           </div>
                                           <div class="col-md-6 container-fluid px-5">
                                               <i class="fa-solid fa-2"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row mt-2">
                           <div class="col-md-8 mx-auto">
                               <div class="card">
                                   <div class="card-header default-color">
                                       <h4>Popular Tags</h4>
                                   </div>
                                   <div class="card-body">
                                       <form class="d-flex">
                                       <h5><span class="badge bg-secondary">Agency</span></h5>
                                       <h5><span class="badge bg-secondary">Business</span></h5>
                                       <h5><span class="badge bg-secondary">Digital</span></h5>
                                       </form>
                                       <form class="d-flex">
                                       <h5><span class="badge bg-secondary">Engagement</span></h5>
                                       <h5><span class="badge bg-secondary">Marketing</span></h5>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>

{{--Section3--}}
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 1001px; height: 350px;" alt="">
                    </div>
                    <div class="card-title" style="color: white">
                        <div class="container-fluid" id="card-rectangle">
                            <i style="margin: 20px 0px 0px 20px;" class="fa-regular fa-user"></i>
                            <p style="color: white" class="d-inline">My Dalky</p>

                            |<i style="margin: 20px 0px 0px 20px;" class="fa-solid fa-calendar-days"></i>
                            <p style="color: white" class="d-inline">16 Dec, 2022</p>

                            |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-tag"></i>
                            <p style="color: white" class="d-inline">Digital Marketing</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </div>
                        <div class="container-fluid mt-3">
                            <a href="{{route('details_page')}}" class="btn btn-color">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--Section4--}}
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    <img class="img-fluid" src="{{asset('/')}}front/img/1.jpg" style="width: 1001px; height: 350px;" alt="">
                                </div>
                                <div class="card-title" style="color: white">
                                    <div class="container-fluid" id="card-rectangle">
                                        <i style="margin: 20px 0px 0px 20px;" class="fa-regular fa-user"></i>
                                        <p style="color: white" class="d-inline">My Dalky</p>

                                        |<i style="margin: 20px 0px 0px 20px;" class="fa-solid fa-calendar-days"></i>
                                        <p style="color: white" class="d-inline">16 Dec, 2022</p>

                                        |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-tag"></i>
                                        <p style="color: white" class="d-inline">Digital Marketing</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                    </div>
                                    <div class="container-fluid mt-3">
                                        <a href="{{route('details_page')}}" class="btn btn-color">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

{{--Pagination--}}
       <section class="py-5">
           <div class="container">
               <div class="row">
                   <nav aria-label="...">
                       <ul class="pagination">
                           <li class="page-item disabled">
                               <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&lt;</a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item active" aria-current="page">
                               <a class="page-link default-color" href="#">2</a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#">4</a></li>
                           <li class="page-item">
                               <a class="page-link" href="#">&gt;</a>
                           </li>
                       </ul>
                   </nav>
               </div>
           </div>
       </section>
@endsection

