@extends('frontend.layout.app')


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <div class="col-9">

          <div class="card">
            <div class="card-header">
              <h2>{{$title}}</h2>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$title}}</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptate repellendus maiores esse aspernatur. Modi quaerat totam optio, provident illo fugit, doloribus quas, est pariatur nobis ad dolorem! Repellat, fugit
              </p>
              <br/>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
        
        <div class="col-3">
            @include("frontend.layout.panel-lateral")
        </div>
       
      </div>
</div>


@endsection