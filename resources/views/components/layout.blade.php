<!DOCTYPE html>
<html
  @if (App::environment('local'))
    class="grid"
  @endif
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" >

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body>
      <div class="main-nav__overlay js-overlay js-main-nav-toggle"></div>
      <header class="site-header" id="js-site-header">
        <div class="site-header__institutional">
          <div class="container">
            <ul>
              <li>Institucional</li>
              <li><a href="">Hub</a></li>
              <li><a href="">Quem Somos</a></li>
              <li><a href="">Sobre a plataforma</a></li>
              <li><a href="">Contato</a></li>
            </ul>
            <a href="#site-header" class="site-header__search-button js-search-toggle">Abrir busca</a>
            <a href="" class="button button--secondary">Entrar</a>
          </div>
        </div>
        <div class="site-header__container">
          <a href="/" class="site-header__logo">Rede Juntos</a>
          <nav class="main-nav">
            <ul class="main-nav__links" id="js-menu">
              <ul class="main-nav__institutional-mobile">
                <li>Institucional</li>
                <li><a href="">Hub</a></li>
                <li><a href="">Quem Somos</a></li>
                <li><a href="">Sobre a plataforma</a></li>
                <li><a href="">Contato</a></li>
              </ul>
              <ul>
                <li>Seções</li>
                <li><a href="" class="main-nav__link-icon main-nav__paths">@svg('paths') Trilhas</a></li>
                <li>
                  <a href="{{ route('podcasts.index') }}" class="main-nav__link-icon main-nav__podcasts">
                    @svg('podcasts') Podcasts
                  </a>
                </li>
                <li>
                  <a href="{{ route('webinars.index') }}" class="main-nav__link-icon main-nav__webinars">
                    @svg('webinars') Webnários
                  </a>
                </li>
                <li><a href="" class="main-nav__link-icon main-nav__good-practices">@svg('good-practices') Boas Práticas</a></li>
                <li><a href="" class="main-nav__link-icon main-nav__interviews">@svg('interviews') Entrevistas</a></li>
                <li><a href="" class="main-nav__link-icon main-nav__library">@svg('library') Biblioteca</a></li>
                <li><a href="" class="main-nav__link-icon main-nav__news">@svg('news') Notícias</a></li>
              </ul>
              <li class="main-nav__button"><a href="" class="button button--secondary button--big">Entrar</a></li>
              <ul class="main-nav__localization">
                <li><a class="main-nav__pt-flag" href="">Português</a></li>
                <li><a class="main-nav__es-flag" href="">Espanhol</a></li>
                <li><a class="main-nav__gb-flag" href="">Inglês</a></li>
              </ul>
            </ul>
          </nav>
          <a href="#site-header" class="site-header__search-button js-search-toggle">Abrir busca</a>
          <button class="main-nav__hamburguer js-main-nav-toggle">Menu</button>
        </div>
      </header>

      <section class="search" id="js-search">
        <div class="container search__container">
          <h1>Encontre o que te interessa</h1>
          <form action="">
            <input type="text" placeholder="Tema, temática, termo">
            <select>
              <option value="area">Área</option>
              <option value="area">Área</option>
              <option value="area">Área</option>
            </select>
            <button type="submit" class="button button--big">Pesquisar</button>
          </form>
        </div>
      </section>

      {{ $slot }}

      <footer class="site-footer">
        <div class="container">
          <ul class="footer-nav">
            <li><a href="">Sobre a Plataforma</a></li>
            <li><a href="">Contato</a></li>
          </ul>
          <div class="footer__blocks">
            <div class="footer__last-block">
              <article class="footer__about">
                <h1>A comunitas</h1>
                <p>A Comunitas é uma organização da sociedade civil brasileira que tem como objetivo contribuir para o aprimoramento dos investimentos sociais corporativos e estimular a participação da iniciativa privada no desenvolvimento social e econômico do país. Saiba mais sobre a Comunitas em nosso site institucional. </p>
              </article>
              <div class="footer__copyleft">
                <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode">
                  Licença Creative Commons "Attribution-NonCommercial-ShareAlike 4.0 International"
                </a>
                <p>
                  Exceto onde indicado de outra forma, todos os conteúdos disponibilizados neste website estão licenciados com uma Licença Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional
                </p>
              </div>
            </div>
            <div class="footer__first-block">
              <div class="footer__logo"></div>
              <div class="footer__social">
                <strong>Siga-nos</strong>
                <ul>
                  <li><a class="footer__facebook" href="">Facebook</a></li>
                  <li><a class="footer__twitter" href="">Twitter</a></li>
                  <li><a class="footer__instagram" href="">Instagram</a></li>
                  <li><a class="footer__youtube" href="">YouTube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <span class="footer__by">
            desenvolvido por <a href="https://appcivico.com">APPCÍVICO</a>
          </span>
        </div>
      </footer>

      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
