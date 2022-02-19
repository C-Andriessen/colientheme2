<article @php post_class() @endphp>
  <header class="single d-flex align-items-center justify-content-center flex-column">
    <h1 class="entry-title main-title text-light mb-6">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content d-flex flex-column mb-6">
    @php the_content() @endphp
    <a href="/nieuws-posts" class="btn btn-dark mt-5 w-50">Ga naar alle posts</a>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>