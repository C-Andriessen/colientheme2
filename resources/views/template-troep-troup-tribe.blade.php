{{--
  Template Name: Troep Troup Tribe Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@php $pictures = get_posts(['category' => 9, 'order' => 'DESC', 'numberposts' => '-1']) @endphp
@php $tribePage = get_page_by_title('troep-troup-tribe-pagina', OBJECT, 'post') @endphp
</div>
</div>
<div class="section-sand container-fluid px-6 d-flex pb-6 tribe-main">
  <img src="{{ get_the_post_thumbnail_url($tribePage) }}" alt="troep-troup-tribe" class="gallery-main mt-6">
  <div class="mt-6 ml-5 tribe-main-text">
    <h1 class="gallery-title mt-6 font-weight-bold text-dark-blue">TROUP</h1>
    <h1 class="gallery-title mt-6 font-weight-bold">TROEP</h1>
    <h1 class="gallery-title mt-6 font-weight-bold text-dark-blue">TRIBE.</h1>
  </div>
</div>
<div class="container-fluid px-6 mb-6">
  <h1 class="mt-5 text-light gallery-title mb-5">Gallerij<span class="text-dark">.</span></h1>
  <div class="pictures px-5">
    @foreach($pictures as $picture)
    <a href="{{ get_permalink($picture->ID) }}" class="text-decoration-none">
      <figure>
        @php echo(get_the_post_thumbnail($picture)) @endphp
      </figure>
    </a>
    @endforeach
  </div>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection