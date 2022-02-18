{{--
  Template Name: Schilderijen Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
</div>
</div>
<div class="bg-light container-fluid px-6 d-flex pb-6">
  <div class="d-90">
    <h1 class="gallery-title font-weight-bold mt-6">SCHILD<br />ERIJEN.</h1>
  </div>
  <img src="<?= get_template_directory_uri() . '/assets/images/schilderijen.jpg' ?>" alt="schilderijen" class="gallery-main mt-6">
</div>
<div class="container-fluid px-6">
  <h1 class="mt-5 text-light gallery-title mb-5">Gallerij<span class="text-dark">.</span></h1>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection