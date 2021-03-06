  @php $header = get_page_by_title('header-img', OBJECT, 'post') @endphp
  <div class="menu-items">
    <div class="container mt-5">
      <div class="margin-top">
        <div class="d-flex mt-3">
          <img src="{{ get_the_post_thumbnail_url($header) }}" alt="" class="img-fluid me-5 header-img">
          <div class="flex-column">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav', 'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="fixed-top mt-3">
    <nav class="nav-header">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <p class="menu">Menu //</p>
    </nav>
  </header>