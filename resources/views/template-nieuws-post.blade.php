{{--
  Template Name: Nieuws Posts Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@php $posts = get_posts(['category' => 7, 'order' => 'DESC']) @endphp

<div class="d-flex mt-6 justify-content-center align-items-center flex-column">
  <h1 class="news-video-title text-light">Nieuws</h1>
  <h1 class="news-video-title text-light">&</h1>
  <h1 class="news-video-title text-light mb-5">Posts</h1>
  <p class="news-video-undertitle mb-6">Hier vind je alle posts en het nieuws<span class="text-light">.</span></p>
</div>
</div>
</div>
<div class="container-fluid">
  <div class="d-flex flex-wrap justify-content-around">
    @foreach($posts as $post)
    <a href="{{ get_permalink($post->ID) }}" class="text-decoration-none">
      <div class="d-flex flex-column post-section">
        @php echo(get_the_post_thumbnail($post)) @endphp
        <h1 class="mt-3 text-dark">{{ $post->post_title }}</h1>
        <p class="text-light mb-9">{{ $post->post_excerpt }}</p>
      </div>
    </a>
    @endforeach
  </div>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection