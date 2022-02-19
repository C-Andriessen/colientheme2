{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@php $paintings = get_posts(['category' => 8, 'order' => 'DESC']) @endphp
<div class="section-1-main d-flex justify-content-around mb-5">
  <img class="main-image" src="<?= get_template_directory_uri() . '/assets/images/biografie-foto.jpg' ?>">
  <div class="text-section-1 d-flex flex-column">
    <h1 class="main-title">Colien <span class="text-light">Langerwerf</span> Biografie</h1>
    <p class="text-light main-text">Sinds 1992 ben ik werkzaam als zelfstandig beeldend kunstenaar in verschillende disciplines. Mijn kunstenaarschap is de drijfveer voor de vele aspecten die ik in mijn werkzaam leven onderneem, zoals het voorzitterschap en project co&ouml;rdinatorschap bij stichting WEP (een stichting van 13 kunstenaars in een monumentaal pand met 11 ateliers en een projectruimte). Ook voor mijn docentschap en richting co&ouml;rdinatorschap op de MBO-4 opleiding Art&amp;Design en Ruimtelijk Vormgeven (KMM Noorderpoort, Groningen) en gastdocentschappen op verschillende opleidingen, is mijn autonoom beeldend kunstenaar zijn altijd de bron vanwaar uit ik werk.</p>
    <a href="/biografie" class="btn btn-dark read-btn mt-4">Lees meer</a>
  </div>
</div>
</div>
</div>
<div class="section-sand mt-6 d-flex justify-content-center container-fluid px-6 flex-column align-items-center">
  <h1 class="text-dark-blue main-title mt-5 pt-5 mb-5">Troep Troup Tribe</h1>
  <img src="<?= get_template_directory_uri() . '/assets/images/troep-troup-tribe.jpg' ?>" alt="troep-troup-tribe" class="tribe-img mb-5">
  <p class="tribe-text text-dark-blue mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <a href="/troep-troup-tribe" class="btn btn-dark-blue mt-4 mb-6">Lees meer</a>
</div>
<div class="bg-light container-fluid px-6 pt-2 align-items-center">
  <h1 class="main-title">
    Schilderijen
  </h1>
  <div class="d-flex justify-content-center paintings-home flex-column align-items-center">
    <div class="d-flex justify-content-between">
      @for($i = 0; $i < 3; $i++) <a href="{{ get_permalink($paintings[$i]->ID) }}" class="text-decoration-none mx-5">
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
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection