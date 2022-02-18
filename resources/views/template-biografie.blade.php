{{--
  Template Name: Biografie Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="d-flex justify-content-around mb-9 mt-6 align-items-center">
  <h1 class="news-video-title"><span class="text-light">BIOGR</span><br />AFIE.</h1>
  <img class="bio-image" src="<?= get_template_directory_uri() . '/assets/images/biografie-foto.jpg' ?>">
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection