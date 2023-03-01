<!DOCTYPE html>
<html lang="en">

@include('../site/layouts.includes.head2')
<body>

    @include('../site/layouts.includes.navbar2')
    @include('../site/layouts.includes.bottom_nav2')
    

    <!-- ----------------green----------- -->
    {{-- {{ dd($products[0]) }} --}}

    <div class="green">
        <div class="container">
            <div class="row">
                <div class="green-box col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">

                                <div class="green-box-1 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/price.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                                <div class="green-box-2 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/truck.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------carousel----------- -->

    <div class="carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">

                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/grocries.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider-1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------------card-slider------------>

    <div class="card-slider col-lg-10 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto d-flex" style="justify-content: space-between; align-items: center;">
                    <div class="slider-heading">
                        <h1>This week's extra prices</h1>
                    </div>

                    <div class="slider-btn">
                        <h3>Visa alla</h3>

                        <div class="custom-btn">

                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-slides owl-carousel owl-theme">


                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-7">
                                <img src="images/7.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-8">
                                <img src="images/8.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-9">
                                <img src="images/9.jpeg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-10">
                                <img src="images/10.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-11">
                                <img src="images/11.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card" >

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-8">
                                <img src="images/8.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-9">
                                <img src="images/9.jpeg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------------cards---------- -->

    <section class="livshem-cards col-lg-10 mx-auto">
        <div class="home-cards">
            <div class="container">
                <div class="row">
                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="card-image" data-name="p-1">
                                <img card-image src="images/1.PNG" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>  
                                    
                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-2">
                                <img src="images/2.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-3">
                                <img src="images/3.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-4">
                                <img src="images/4.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-5">
                                <img src="images/5.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-6">
                                <img src="images/6.PNG" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-7">
                                <img src="images/7.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-8">
                                <img src="images/8.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-9">
                                <img src="images/9.jpeg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-10">
                                <img src="images/10.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-10">
                                <img src="images/11.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards col-lg-2 col-md-4 col-sm-6">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-12">
                                <img src="images/12.webp" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <h4 class="tag mx-auto">750I </h4>

                                <div class="price">
                                    <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                                    <h4>72</h4>
                                </div>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <div class="first-btn">
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="load-more">
        <a href="#">Load more</a>
    </div>

    <!-- ---------------------card-pop-up----------------------- -->

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/1.PNG" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/2.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/3.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/4.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/5.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/6.PNG" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/7.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/8.jpg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/9.jpeg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/10.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/11.jpg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/12.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------cta-------------- -->

    <section class="cta-box">
        <div class="container">
            <div class="row">
                <div class="cta col-lg-10 col-md-12 mx-auto">
                    <h1>Good evening!</h1>
                    <span>
                        <h3>Ta en titt på vår</h3>
                        <a href="#">Recept</a>
                    </span>
                </div>
            </div>
        </div>
    </section>

    
    @include('../site/layouts.includes.footer2')
    @include('../site/layouts.includes.scripts2')
   
</body>

</html>