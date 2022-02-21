{{--
  Template Name: Biografie Template
--}}

@extends('layouts.app')

@section('content')
@php $cvItems = get_posts(['category_name' => 'biografie-category', 'order' => 'ASC', 'numberposts' => '-1']) @endphp

@php $biografie = get_page_by_title('biografie', OBJECT, 'post') @endphp
@while(have_posts()) @php the_post() @endphp
<div class="d-flex justify-content-around mb-9 mt-6 align-items-center">
  <h1 class="news-video-title"><span class="text-light">BIOGR</span><br />AFIE.</h1>
  <img class="bio-image" src="{{ get_the_post_thumbnail_url($biografie) }}">
</div>
<div class="main-text d-flex flex-column align-items-center justify-content-center px-6 mb-6 bio-text">
  @php echo($biografie->post_content) @endphp
</div>
</div>
</div>
@foreach ($cvItems as $cvItem)
@php echo($cvItem->post_content) @endphp
@endforeach
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection