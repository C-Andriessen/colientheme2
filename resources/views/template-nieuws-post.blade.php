{{--
  Template Name: Nieuws Posts Template
--}}

@extends('layouts.app')

@section('content')
<div class="d-flex mt-6 justify-content-center align-items-center flex-column">
  <h1 class="news-video-title text-light">Nieuws</h1>
  <h1 class="news-video-title text-light">&</h1>
  <h1 class="news-video-title text-light mb-5">Posts</h1>
  <p class="news-video-undertitle mb-6">Hier vind je alle posts en het nieuws<span class="text-light">.</span></p>
</div>
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection