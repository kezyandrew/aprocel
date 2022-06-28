@extends('layouts.master')
@section('content')

<div class="page-nav no-margin row mb-5">
  <div class="container">
    <div class="row">
      <h2>Our Publications</h2>
      <ul>
        <li>
          <a href="#"><i class="fas fa-home"></i> Home</a>
        </li>
        <li><i class="fas fa-angle-double-right"></i>Publications</li>
      </ul>
    </div>
  </div>
</div>
<section class="our-blog">
  <div class="container">
    <div class="blog-row row">
      <div class="col-md-4 col-sm-6">
      <a class="primary-btn" href="{{asset("Score.pdf")}}"><i class="fas fa fa-download"></i><h6>Score</h6></a>

      <a class="primary-btn" href="{{asset("ACHIEVEMENTS IN NUMBERS.pdf")}}"><i class="fas fa fa-download"></i><h6>Achievements in numbers</h6></a>
      <a class="primary-btn" href="{{asset(" Aprocel website amendments.docx
      ")}}"><i class="fas fa fa-download"></i><h6> Aprocel website amendments
      </h6></a>
      <a class="primary-btn" href="{{asset("End of DSW Project Report-APROCEL.pdf")}}"><i class="fas fa fa-download"></i><h6>End of DSW Project Report-APROCEL</h6></a>

      <a class="primary-btn" href="{{asset("APROCEL's supported SACCOS.pdf")}}"><i class="fas fa fa-download"></i><h6>APROCEL's supported SACCOS</h6></a>

      </div>
      
    </div>
  </div>
</section>


@endsection