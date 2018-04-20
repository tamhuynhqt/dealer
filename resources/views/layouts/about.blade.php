@extends('layouts.app') 
@section('content')
<div><img src={!! url( 'public/images/test.webp') !!} class="img-fluid" alt="About Us"></div>
<h2> About us</h2>
<div class="row container-fluid">
    <div class="col-lg-6 col-md-6 ml-auto">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio molestias cumque nemo blanditiis reprehenderit culpa
            officiis, nostrum rerum dolor et veniam laboriosam ratione, tempore ipsa eaque tempora nesciunt voluptas fugit!</p>
    </div>
    <div class="col-lg-6 col-md-6 ml-auto">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, voluptatibus eius! Reiciendis alias consectetur magni
            itaque quo numquam ut eligendi, fugit, aut fuga adipisci voluptas quod atque, ratione eum? Quae. Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Rerum provident ipsum non iste quod nostrum numquam voluptatum
            iure illum ea repudiandae quasi perspiciatis beatae tenetur nemo voluptatibus, nam hic odio.</p>
    </div>
</div>
@endsection