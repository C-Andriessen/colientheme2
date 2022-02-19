{{--
  Template Name: Videos Template
--}}

@extends('layouts.app')

@section('content')
@php $videos = get_posts(['category' => 6, 'order' => 'DESC']) @endphp
@while(have_posts()) @php the_post() @endphp
<div class="d-flex mt-9 justify-content-center align-items-center flex-column">
  <h1 class="news-video-title text-light">Video's</h1>
  <p class="news-video-undertitle mb-9">Mijn video's waarin ik laat zien<br />
    hoe ik te werk ga<span class="text-light">.</span></p>
</div>
@foreach($videos as $video)
<div class="videos">
  @php echo($video->post_content) @endphp
</div>
@endforeach
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection