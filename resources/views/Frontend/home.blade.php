@extends('frontend.layout.app')

@section("slider")
@include("frontend.layout.slider")
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center p-5 mr-2 ml-2">
        <div class="col-12 ">
        	
    			<h2>{{$title}}</h2>
    			<div>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptate repellendus maiores esse aspernatur. Modi quaerat totam optio, provident illo fugit, doloribus quas, est pariatur nobis ad dolorem! Repellat, fugit.</p>
    			</div>
        </div>
    </div>
</div>


@endsection