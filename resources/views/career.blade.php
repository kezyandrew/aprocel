@extends('layouts.master')
@section('content')

<div class="page-nav no-margin row mb-5">
  <div class="container">
    <div class="row">
      <h2>Job Listings</h2>
      <ul>
        <li>
          <a href="/"><i class="fas fa-home"></i> Home</a>
        </li>
        <li><i class="fas fa-angle-double-right"></i>Jobs</li>
      </ul>
    </div>
  </div>
</div>
<section class="our-blog">
  <div class="container">
    <div class="blog-row row">
      <div class="col-md-10 col-sm-6">
        
        {{-- listing listings --}}

        <div class="container   justify-center text-center">
          <h1 class="">
              Job Listings
          </h1>
  
          <div class="  mx-auto">
              @foreach(\App\Models\Post::all() as $post)
                  <div class="border-b mb-3 pb-3 border-gray-200">
                      <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                      <p>{{ Str::limit($post->body, 100) }}</p>
                  </div>
              @endforeach
          </div>
      </div>
     
      </div>
      
    </div>
  </div>
</section>


@endsection