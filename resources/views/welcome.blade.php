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
              <li><a href="" class="main-nav__link-icon main-nav__podcasts">@svg('podcasts') Podcasts</a></li>
              <li><a href="" class="main-nav__link-icon main-nav__webinars">@svg('webinars') Webnários</a></li>
              <li><a href="" class="main-nav__link-icon main-nav__good-practices">@svg('good-practices') Boas Práticas</a></li>
              <li><a href="" class="main-nav__link-icon main-nav__interviews">@svg('interviews') Entrevistas</a></li>
              <li><a href="" class="main-nav__link-icon main-nav__articles">@svg('articles') Artigos</a></li>
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
    <main class="sections">
        <header class="sections__header" style="background-image: url('https://www.placecage.com/600/300')">
          <h1 class="sections__title">
            <span>Webnários</span>
          </h1>
        </header>
        <div class="container">
          <form action="" class="sections__select">
            <strong>Categorias</strong>
            <select id="" name="">
              <option value="">Todas</option>
            </select>
          </form>
          <div class="sections__list">
            @for ($i = 0; $i < 6; $i++)
              <article class="section__item">
                <div class="sections__image">
                  <img
                    srcset="https://www.placecage.com/300/200.jpg,
                      https://www.placecage.com/450/300.jpg 1.5x,
                      https://www.placecage.com/600/400.jpg 2x"
                    src="https://www.placecage.com/450/350"
                    sizes="(max-width: 400px) 480px,
                    800px"
                    alt="placecage"
                  >
                  <div class="section__tags">
                    @for ($a = 0; $a < 3; $a++)
                      <a href="">Gestão de pessoas</a>
                    @endfor
                  </div>
                </div>
                <h2 class="sections__list-title">Inovação na Gestão de Pessoas | Renata Vilhena</h2>
              </article>
            @endfor
            <button class="button button--big sections__load-more">Carregar mais</button>
            <article class="sections__text">
              <h1>O conhecimento que criamos é gerado com base em experiências.</h1>
              <p>
                "Ter uma política de conhecimento aberto significa ter uma série de normas, processos e protocolos definidos, envolvendo todas as áreas da organização, não somente a produção de conhecimento”
              </p>
              <p>
                · Com a licença Creative Commons da Rede Juntos, a Comunitas é a primeira organização social brasileira a implementar uma política de educação aberta;
              </p>
              <p>
                · A rede juntos em 2018 recebeu quase 70 mil acessos e mais de 20 mil servidores buscaram conteúdo na plataforma;
              </p>
              <p>
                · Além de vídeos e podcasts (baixados mais de 700 vezes), a Rede Juntos conta, ainda, com a realização de webinários e mini-cursos com especialistas na área.
              </p>
            </article>
          </div>
        </div>
    </main>
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
