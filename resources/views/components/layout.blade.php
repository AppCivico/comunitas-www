<!DOCTYPE html>
<html
  @if (App::environment('local'))
    class="grid"
  @endif
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ config('app.name') }}</title>

      <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" >

      <!-- favicon tons of tags -->
      <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png?v=00BWXRa5zw">
      <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png?v=00BWXRa5zw">
      <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png?v=00BWXRa5zw">
      <link rel="manifest" href="/images/favicon/site.webmanifest?v=00BWXRa5zw">
      <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg?v=00BWXRa5zw" color="#5bbad5">
      <link rel="shortcut icon" href="/images/favicon/favicon.ico?v=00BWXRa5zw">
      <meta name="msapplication-TileColor" content="#7654a3">
      <meta name="msapplication-config" content="/images/favicon/browserconfig.xml?v=00BWXRa5zw">
      <meta name="theme-color" content="#7654a3">

      <meta itemprop="name" content="{{ config('app.name') }}">
      @if(isset($pageInfo->meta_description))
        <meta itemprop="description" content="{{ $pageInfo->meta_description }}">
        <meta name="twitter:description" property="og:description" content="{{ $pageInfo->meta_description }}">
      @endif

      @if(isset($pageInfo->title))
        <meta name="twitter:title" property="og:title" content="{{ $pageInfo->title }}">
      @endif
      <meta name="twitter:url" property="og:url" content="{{ URL::full() }}">
      <meta name="twitter:card" content="summary_large_image">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body>
      <div class="main-nav__overlay js-overlay js-main-nav-toggle"></div>
      <header class="site-header" id="js-site-header">
        <div class="site-header__institutional">
          <div class="container">
            <ul>
              <li>@lang('header.institutional')</li>
              <li><a href="{{ route('about.index') }}">@lang('header.about')</a></li>
            </ul>
            <ul class="main-nav__localization main-nav__localization--institutional">
              <li><a class="main-nav__pt-flag" href="{{ route('language.pt') }}">@lang('header.portugues')</a></li>
              <li><a class="main-nav__es-flag" href="{{ route('language.es') }}">@lang('header.espanhol')</a></li>
              <li><a class="main-nav__gb-flag" href="{{ route('language.en') }}">@lang('header.ingles')</a></li>
            </ul>
            <a href="#site-header" class="site-header__search-button js-search-toggle">@lang('header.open-search')</a>
            <a href="" class="button button--secondary">@lang('header.login')</a>
          </div>
        </div>
        <div class="site-header__container">
          <a href="/" class="site-header__logo">{{ config('app.name') }}</a>
          <nav class="main-nav">
            <ul class="main-nav__links" id="js-menu">
              <ul class="main-nav__institutional-mobile">
                <li>@lang('header.institutional')</li>
                <li><a href="{{ route('about.index') }}">@lang('header.about')</a></li>
              </ul>
              <ul>
                <li>@lang('header.sections')</li>
                <li>
                  <a href="{{ route('trails.index') }}" class="main-nav__link-icon main-nav__paths">
                    @svg('paths') @lang('header.paths')
                  </a>
                </li>
                <li>
                  <a href="{{ route('podcasts.index') }}" class="main-nav__link-icon main-nav__podcasts">
                    @svg('podcasts') @lang('header.podcasts')
                  </a>
                </li>
                <li>
                  <a href="{{ route('webinars.index') }}" class="main-nav__link-icon main-nav__webinars">
                    @svg('webinars') @lang('header.webinars')
                  </a>
                </li>
                <li>
                  <a href="{{ route('guidelines.index') }}" class="main-nav__link-icon main-nav__good-practices">
                    @svg('good-practices') @lang('header.good-practices')
                  </a>
                </li>
                <li>
                  <a href="{{ route('interviews.index') }}" class="main-nav__link-icon main-nav__interviews">
                    @svg('interviews') @lang('header.interviews')
                  </a>
                </li>
                <li>
                  <a href="{{ route('articles.index') }}" class="main-nav__link-icon main-nav__library">
                    @svg('library') @lang('header.library')
                  </a>
                </li>
                <li>
                  <a href="{{ route('news.index') }}" class="main-nav__link-icon main-nav__news">
                    @svg('news') @lang('header.news')
                  </a>
                </li>
              </ul>
              <li class="main-nav__button">
                <a href="" class="button button--secondary button--big">@lang('header.login')</a>
              </li>
              <ul class="main-nav__localization">
                <li><a class="main-nav__pt-flag" href="{{ route('language.pt') }}">@lang('header.portugues')</a></li>
                <li><a class="main-nav__es-flag" href="{{ route('language.es') }}">@lang('header.espanhol')</a></li>
                <li><a class="main-nav__gb-flag" href="{{ route('language.en') }}">@lang('header.ingles')</a></li>
              </ul>
            </ul>
          </nav>
          <a href="#site-header" class="site-header__search-button js-search-toggle">@lang('header.open-search')</a>
          <button class="main-nav__hamburguer js-main-nav-toggle">@lang('header.menu')</button>
        </div>
      </header>

      <section class="search" id="js-search">
        <div class="container search__container">
          <h1>@lang('search.find')</h1>
          <form action="{{ route('search.index') }}" method="GET">
            <input type="text" name="q" class="js-search-input" placeholder="@lang('search.placeholder')" required>
            <select name="type">
              <option value="">@lang('search.all')</option>
              @foreach($types as $category)
                <option value="{{ $category }}">
                  @lang('types.' . $category)
                </option>
              @endforeach
            </select>
            <button type="submit" class="button button--big">@lang('search.search')</button>
          </form>
        </div>
      </section>

      {{ $slot }}

      <footer class="site-footer">
          <ul class="footer-nav">
            <li><a href="{{ route('about.index') }}">@lang('header.about')</a></li>
          </ul>
        <div class="container">
          <div class="footer__blocks">
            <div class="footer__last-block">
              <article class="footer__about">
                <h1>@lang('footer.about-title')</h1>
                <p>@lang('footer.about-description')</p>
              </article>
              <div class="footer__copyleft">
                <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode">
                  @lang('footer.about-description')
                </a>
                <p>
                  @lang('footer.license-description');
                </p>
              </div>
            </div>
            <div class="footer__first-block">
              <div class="footer__logo"></div>
              <div class="footer__social">
                <strong>@lang('footer.follow')</strong>
                <ul>
                  <li>
                    <a class="footer__facebook" href="https://web.facebook.com/ComunitasBR" target="_blank">
                      @lang('social.facebook')
                    </a>
                  </li>
                  <li>
                    <a class="footer__twitter" href="https://twitter.com/ComunitasBR" target="_blank">
                      @lang('social.twitter')
                    </a>
                  </li>
                  <li>
                    <a class="footer__instagram" href="https://www.instagram.com/comunitasbr" target="_blank">
                      @lang('social.instagram')
                    </a>
                  </li>
                  <li>
                    <a class="footer__youtube" href="https://www.youtube.com/channel/UC53N5fT0dLmFoy_El2EUHTA" target="_blank">
                      @lang('social.youtube')
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <span class="footer__by">
            @lang('footer.developed-by', ['link' => 'https://appcivico.com', 'name' => 'appcívico'])
          </span>
        </div>
      </footer>

      <script src="{{ mix('js/app.js') }}"></script>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104930398-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-104930398-1');
      </script>
    </body>
</html>
