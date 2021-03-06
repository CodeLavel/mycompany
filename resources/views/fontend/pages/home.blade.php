<!--การเรียกใช้งาน Tempate-->
@extends('fontend.layouts.master_template')
@section('title')
    HOME
@endsection
@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/slide1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/slide2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/slide3.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>  

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>HOME</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis ipsam, quibusdam perspiciatis reprehenderit quos iure officiis impedit rem, ad cum sequi, omnis illo laboriosam eaque odit unde! Dolorum, natus amet!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-warning"></i>
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate hic tempora laudantium dolores unde. Impedit odit maxime provident? Eos repellat at quo! Doloremque minima, consequatur sed neque debitis blanditiis nulla?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-danger"></i>
            <h1>Service</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem animi quibusdam velit aperiam? Velit libero natus ab debitis harum odio ipsa, minima nobis facere illum doloremque quibusdam adipisci. Voluptatum, ipsum.</p>
        </div>
    </div>
</div>


@endsection
