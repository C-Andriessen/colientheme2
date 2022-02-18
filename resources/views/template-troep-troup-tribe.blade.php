{{--
  Template Name: Troep Troup Tribe Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
</div>
</div>
<div class="section-sand container-fluid px-6 d-flex pb-6">
  <img src="<?= get_template_directory_uri() . '/assets/images/troep-troup-tribe.jpg' ?>" alt="troep-troup-tribe" class="gallery-main mt-6">
  <div class="mt-6 ml-5">
    <h1 class="gallery-title mt-6 font-weight-bold text-dark-blue">TROUP</h1>
    <h1 class="gallery-title mt-6 font-weight-bold">TROEP</h1>
    <h1 class="gallery-title mt-6 font-weight-bold text-dark-blue">TRIBE.</h1>
  </div>
</div>
<div class="container-fluid px-6">
  <h1 class="mt-5 text-light gallery-title mb-5">Gallerij<span class="text-dark">.</span></h1>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection