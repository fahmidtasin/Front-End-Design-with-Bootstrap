@extends('front.master')


@section('title')
    Details Page
@endsection


@section('body')
    {{--Topbar--}}
    <section class="py-5">
        <div class="top-bar">

            <h1>Digital Marketing</h1><br>
            <p>Blog Details</p>

        </div>
    </section>

    {{--Section1--}}
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <img class="img-fluid" src="{{asset('/')}}front/img/2.jpg" style="width: 1001px; height: 350px;" alt="">
                        </div>
                        <div class="card-title" style="color: black">
                            <div class="container-fluid" id="details-card">
                                <i style="margin: 20px 0px 0px 20px;" class="fa-regular fa-user"></i>
                                <p style="color: black" class="d-inline">My Dalky</p>

                                |<i style="margin: 20px 0px 0px 20px;" class="fa-solid fa-calendar-days"></i>
                                <p style="color: black" class="d-inline">16 Dec, 2022</p>

                                |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-tag"></i>
                                <p style="color: black" class="d-inline">Digital Marketing</p>

                                |<i style="margin: 20px 0px 0px 20px;"  class="fa-solid fa-eye"></i>
                                <p style="color: black" class="d-inline">5300</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. There are many variations of passages of Lorem Ipsum available.</p>
                                <h4>Delivering the best digital marketing</h4>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('/')}}front/img/3.jpg" style="width: 250px; height: 200px; margin-left: 50px" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('/')}}front/img/1.jpg" style="width: 250px; height: 200px; margin-left: 50px" alt="">
                                        </div>
                                    </div>
                                    <br>
                                    <h4>A Kentucky men who was mullied by the seniors</h4>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                    <div id="rectangle-active"></div>
                                    <div class="container-fluid py-4" id="rectangle-msg">
                                        <p>“What sort of men would think it is acceptable to girl to this for level of brutality and violence? an attack like thiop.”</p>
                                        <h5><i>Neil Borton</i></h5>
                                    </div>

                                    <p class="mt-2">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                    <div class="row mx-auto">
                                        <div class="col-md-6">
                                            <div class="d-flex">
                                                <p><b>Tags:</b></p>
                                                <a href="#"><h5><span class="badge bg-secondary">Careers</span></h5></a>
                                                <a href="#"><h5><span class="badge bg-secondary">Marketing</span></h5></a>
                                                <a href="#"><h5><span class="badge bg-secondary">Online</span></h5></a>
                                            </div>
                                        </div>
                                        <div  style="padding-left: 150px" class="col-md-6">
                                            <div class="d-flex">
                                                <p><b>Share:</b></p>
                                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>

                                            </div>
                                        </div>
                                    </div>

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

        {{--Pagination--}}
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-vody">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="nav-link" href=""><img src="{{asset('/')}}front/img/3.jpg" style="width: 100px; height: 100px;" alt=""><i class="fa-solid fa-less-than"></i> Previous Post</a>
                                        <p><b>Digital Marketing</b></p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a class="nav-link" href="">Next Post <i class="fa-solid fa-greater-than"></i><img src="{{asset('/')}}front/img/1.jpg" style="width: 100px; height: 100px;" alt=""></a>
                                        <p><b>Web Development</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--Comments--}}
        <section class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><i class="fa-solid fa-comment default-color"></i> Comments(01)</h3>
                                        <div class="container darker">
                                            <img src="{{asset("/")}}front/img/user.png" alt="Avatar" class="right" style="width:auto; height: 100px">
                                            <p>Hey! I'm fine. Thanks for asking!</p>
                                            <span class="time-left">11:01</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="d-flex">
                            <h5><i class="fas fa-share default-color"></i> Leave A Comment</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter your name" aria-label="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Enter your email" aria-label="Last name">
                            </div>
                            <div class="col-md-12 mt-3 mb-3">
                                <textarea style="width: 600px" class="form-control" name="" id="" cols="30" rows="10" placeholder="Leave your comment"></textarea>
                            </div>
                            <div class="col-md-4 mx-3 mb-3">
                                <input class="btn btn-color btn-sm default-color" type="button" value="POST A COMMENT">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

