{{--
  Template Name: Biografie Template
--}}

@extends('layouts.app')

@section('content')
@php $biografie = get_post(['post_title' => 'biografie']) @endphp
@php $cvItems = get_posts(['category' => 5, 'order' => 'ASC']) @endphp
@while(have_posts()) @php the_post() @endphp
<div class="d-flex justify-content-around mb-9 mt-6 align-items-center">
  <h1 class="news-video-title"><span class="text-light">BIOGR</span><br />AFIE.</h1>
  <img class="bio-image" src="<?= get_template_directory_uri() . '/assets/images/biografie-foto.jpg' ?>">
</div>
<div class="main-text d-flex flex-column align-items-center justify-content-center px-6 mb-6">
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