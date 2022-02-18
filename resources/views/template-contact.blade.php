{{--
  Template Name: Contact template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
</div>
</div>
<div class="section-sand container-fluid px-6 pb-6 pt-5">
  <div class="d-flex mt-9 justify-content-center align-items-center flex-column">
    <h1 class="news-video-title text-dark-blue">Contact</h1>
    <p class="news-video-undertitle mb-9 text-orange">
      Vul hier beneden uw gegevens in en <br />
      ik neem zo snel mogelijk <br />
      contact met u op</p>
  </div>
  <form action="mailto:example@example.com" method="POST" class="contact-form mt-6 mb-6">
    <label for="naam">Naam</label>
    <input type="text" placeholder="Vul hier uw naam in" class="mb-5" name="Naam">
    <label for="email">Email</label>
    <input type="email" placeholder="Vul hier uw email in" class="mb-5" name="Email">
    <label for="telnr">Telefoon nummer</label>
    <input type="text" placeholder="Vul hier uw telefoon nummer in" class="mb-5" name="Telefoonnummer">
    <label for="bericht">Bericht</label>
    <textarea name="bericht" id="bericht" cols="100" rows="10" class="mb-5"></textarea>
    <button type="submit" class="btn btn-dark-blue-contactpage">Verzend bericht</button>
  </form>
</div>
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection