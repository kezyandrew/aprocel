@extends('layouts.master')
@section('content')
 <header class="masthead" style="background-image: url('{{asset(Voyager::image($post->image))}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading" >
            <h1 style="color:#fff;">{{$post->title}}</h1>
            
            <span class="meta">Posted by Admin
             
              {{$post->created_at}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <a href="Score.pdf"download>Download</a>
         
        </div>
      </div>
    </div>
  </article>

@endsection