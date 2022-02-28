{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@php $paintings = get_posts(['category' => 8, 'order' => 'DESC', 'numberposts' => '-1']) @endphp
@php $posts = get_posts(['category' => 7, 'order' => 'DESC', 'numberposts' => '-1']) @endphp
@php $videos = get_posts(['category' => 6, 'order' => 'DESC', 'numberposts' => '-1']) @endphp
@php $tribe = get_page_by_title('main-page-troep-troup-tribe', OBJECT, 'post') @endphp
@php $biografie = get_page_by_title('main-page-biografie', OBJECT, 'post') @endphp
<div class="section-1-main d-flex justify-content-around mb-5">
  <img class="main-image" src="{{ get_the_post_thumbnail_url($biografie) }}">
  <div class="text-section-1 d-flex flex-column ml-3">
    @php echo($biografie->post_content) @endphp
    <p class="text-light main-text">{{ $biografie->post_excerpt }}</p>
    <a href="/biografie" class="btn btn-dark read-btn mt-4">Lees meer</a>
  </div>
</div>
</div>
</div>
<div class="section-sand mt-6 d-flex justify-content-center container-fluid px-6 flex-column align-items-center">
  @php echo($tribe->post_content) @endphp
  <img src="{{ get_the_post_thumbnail_url($tribe) }}" alt="troep-troup-tribe" class="tribe-img mb-5">
  <p class="tribe-text text-dark-blue mb-3">{{ $tribe->post_excerpt }}</p>
  <a href="/troep-troup-tribe" class="btn btn-dark-blue mt-4 mb-6">Lees meer</a>
</div>
<div class="bg-light container-fluid px-6 pt-2 align-items-center">
  <h1 class="main-title">
    Schilderijen
  </h1>
  <div class="d-flex justify-content-center paintings-home flex-column align-items-center">
    <div class="d-flex justify-content-between paintings-inner">
      @for($i = 0; $i < 3; $i++) <a href="{{ get_permalink($paintings[$i]->ID) }}" class="text-decoration-none mx-3">
        <figure>
          @php echo(get_the_post_thumbnail($paintings[$i])) @endphp
        </figure>
        <p class="text-dark main-text">{{ $paintings[$i]->post_excerpt }}</p>
        </a>
        @endfor
    </div>
    <a href="/schilderijen" class="btn btn-dark read-btn w-100 mb-6 mt-5">Bekijk alle schilderijen</a>
  </div>
</div>
<div class="container-fluid px-6 d-flex flex-column justify-content-center align-items-center">
  <h1 class="main-title mt-5 text-light mb-5">Nieuws & Posts</h1>
  <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      @for($j = 0; $j < 5; $j++) @if($j==0) <div class="carousel-item active">
        @else
        <div class="carousel-item">
          @endif
          <a href="{{ get_permalink($posts[$j]->ID) }}">
            <img src="{{ get_the_post_thumbnail_url($posts[$j]) }}" class="d-block w-100 carousel-img-custom" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>{{ $posts[$j]->post_title }}</h3>
            </div>
          </a>
        </div>
        @endfor
    </div>
  </div>
  <a href="/nieuws-posts" class="btn btn-dark read-btn w-100 mb-6 mt-5">Bekijk de nieuws & posts pagina</a>
</div>
</div>
<div class="bg-light container-fluid px-6 pt-2 align-items-center d-flex justify-content-center flex-column">
  <h1 class="main-title mt-5 mb-6">Nieuwste video</h1>
  @for($k = 0; $k < 1; $k++) <div class="videos videos-2 text-center">
    @php echo($videos[$k]->post_content) @endphp
</div>
@endfor
<a href="/videos" class="btn btn-dark read-btn w-100 mb-5 mt-5">Bekijk alle video's</a>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection