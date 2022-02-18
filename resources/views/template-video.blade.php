{{--
  Template Name: Videos Template
--}}

@extends('layouts.app')

@section('content')
<div class="d-flex mt-9 justify-content-center align-items-center flex-column">
  <h1 class="news-video-title text-light">Video's</h1>
  <p class="news-video-undertitle mb-9">Mijn video's waarin ik laat zien<br />
    hoe ik te werk ga<span class="text-light">.</span></p>
</div>
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection