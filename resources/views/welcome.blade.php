<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <a href="/" class="site-header__logo">Rede Juntos</a>
        <button class="site-header__search-button">Abrir busca</button>
        <section class="search">
          <h1>Encontre o que te interessa</h1>
          <form action="">
            <input type="text" placeholder>
            <select>
              <option value="area">Área</option>
              <option value="area">Área</option>
              <option value="area">Área</option>
            </select>
            <button type="submit">Pesquisar</button>
          </form>
        </section>
        <ul class="menu-site">
          <ul>
            <li>Institucional</li>
            <li><a href="">Hub</a></li>
            <li><a href="">Quem Somos</a></li>
            <li><a href="">Sobre a plataforma</a></li>
            <li><a href="">Contato</a></li>
          </ul>
          <ul>
            <li>Seções</li>
            <li><a href="" class="menu-site__paths">Trilhas</a></li>
            <li><a href="" class="menu-site__podcasts">Podcasts</a></li>
            <li><a href="" class="menu-site__webnars">Webnários</a></li>
            <li><a href="" class="menu-site__good-practices">Boas Práticas</a></li>
            <li><a href="" class="menu-site__interviews">Entrevistas</a></li>
            <li><a href="" class="menu-site__articles">Artigos</a></li>
            <li><a href="" class="menu-site__library">Biblioteca</a></li>
            <li><a href="" class="menu-site__news">Notícias</a></li>
          </ul>
          <li><a href="">Entrar</a></li>
          <ul class="menu-site__localization">
            <li><a href="">Português</a></li>
            <li><a href="">Espanhol</a></li>
            <li><a href="">Inglês</a></li>
          </ul>
        </ul>
      </div>
    </header>
    <main class="sections">
        <header class="sections__header">
          <div class="container">
            <h1>Webnários</h1>
          </div>
        </header>
        <div class="container">
          <form action="" class="sections__select">
            <strong>Categorias</strong>
            <select id="" name="">
              <option value="">Todas</option>
            </select>
          </form>
          <div class="sections__list">
            @for ($i = 0; $i < 10; $i++)
              <article>
                <div class="sections__image">
                  <img src="https://www.placecage.com/400/300" alt="placecage">
                  <div class="section__tags">
                    <a href="">Gestão de pessoas</a>
                  </div>
                </div>
                <h2 class="sections__title">Inovação na Gestão de Pessoas | Renata Vilhena</h2>
              </article>
            @endfor
            <button class="sections__load-more">Carregar mais</button>
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
    <footer>
      <div class="container">
        <ul class="menu-footer">
          <li><a href="">Sobre a Plataforma</a></li>
          <li><a href="">Contato</a></li>
        </ul>
        <article class="about">
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
    </footer>
  </body>
</html>
