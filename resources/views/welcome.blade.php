<x-layout>
  <main class="sections">

    <header class="home-banner">
      <div class="home-banner__container">
        <h1 class="home-banner__title">
          VAMOS JUNTOS CONSTRUIR A MAIOR PLATAFORMA DE CONHECIMENTO EM GESTÃO PÚBLICA
        </h1>
        <div class="home-banner__image">
          <img src="https://www.placecage.com/480/488" alt="Título">
        </div>
      </div>
    </header>

    <div class="container">
      <div class="sections__list sections__list--home">
        <h2 class="sections__list-main-title">Novidades</h2>

        @isset($trails)
          @foreach($trails as $content)
            <article class="section__item @if($content->external_link) section__item--small @endif">
              <div class="sections__image">
                  <a href="{{ URL::current() }}/{{ $content->slug }}">
                  <img
                    src="https://via.placeholder.com/800x600.jpg?text=sem+imagem"
                    src="{{ Voyager::image($content->image) }}"
                    srcset="{{ Voyager::image($content->thumbnail('small')) }},
                    {{ Voyager::image($content->thumbnail('medium')) }} 1.5x,
                    {{ Voyager::image( $content->image ) }} 2x"
                    sizes="(max-width: 400px) 480px, 800px"
                    alt="{{ $content->image_alt }}"
                  >
                </a>
                <div class="section__tags">
                  @foreach($content->categories as $category)
                    <!--
                    <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
                    -->
                    <a>{{ $category->name }}</a>
                  @endforeach
                </div>
              </div>
              <a href="{{ URL::current() }}/{{ $content->slug }}">
                @if(isset($has_obs))
                  <span class="section__download-info">
                    Clique para fazer o download
                  </span>
                @endif

                <h2 class="sections__list-title">
                  @isset($content->title)
                    {{ $content->title }}
                  @elseif($content->name)
                    {{ $content->name }}
                  @endisset
                </h2>
              </a>
            </article>
          @endforeach
        @endisset
      </div>

      <div class="sections__list sections__list--home sections__list--small">
        @isset($contents)
          @foreach($contents as $content)
            <article class="section__item @if($content->external_link) section__item--small @endif">
              <div class="sections__image">
                  <a href="{{ URL::current() }}/{{ $content->slug }}">
                  <img
                    src="{{ Voyager::image($content->image) }}"
                    srcset="{{ Voyager::image($content->thumbnail('small')) }},
                    {{ Voyager::image($content->thumbnail('medium')) }} 1.5x,
                    {{ Voyager::image( $content->image ) }} 2x"
                    sizes="(max-width: 400px) 480px, 800px"
                    alt="{{ $content->image_alt }}"
                  >
                </a>
                <div class="section__tags">
                  @foreach($content->categories as $category)
                    <!--
                    <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
                    -->
                    <a>{{ $category->name }}</a>
                  @endforeach
                </div>
              </div>
              <a href="{{ URL::current() }}/{{ $content->slug }}">
                @if(isset($has_obs))
                  <span class="section__download-info">
                    Clique para fazer o download
                  </span>
                @endif

                <h2 class="sections__list-title">
                  @isset($content->title)
                    {{ $content->title }}
                  @elseif($content->name)
                    {{ $content->name }}
                  @endisset
                </h2>
              </a>
            </article>
          @endforeach
        @endisset
      </div>

      <div class="home-main">
        <div class="home-main__text">
          <strong class="home-main__tiny-text">AS VANTAGENS DA PLATAFORMA REDE JUNTOS</strong>
          <h1 class="home-main__title">A plataforma é aberta e gratuita para acesso a todo o conteúdo disponível</h1>
          <div class="home-main__rows">
            <div class="home-main__row">
              <img src="{{ url('images/icons/speedometer--purple.svg') }}" alt="Progresso">
              <h2>Progresso</h2>
              <p>Área onde o usuário pode ver todos as trilhas e seu progresso</p>
            </div>
            <div class="home-main__row">
              <img src="{{ url('images/icons/book--purple.svg') }}" alt="Trilhas">
              <h2>Progresso</h2>
              <p>As melhores trilhas para melhorias dos serviços prestados à população</p>
            </div>
            <div class="home-main__row">
              <img src="{{ url('images/icons/dialog--purple.svg') }}" alt="Progresso">
              <h2>Progresso</h2>
              <p>Tirar dúvidas, conhecer pessoas e replicar seu conhecimento com pessoas engajadas</p>
            </div>
          </div>
        </div>
        <div class="home-main__image">
          <img src="https://www.placecage.com/485/630" alt="AS VANTAGENS DA PLATAFORMA REDE JUNTOS">
        </div>
      </div>

    </div> <!-- container -->
  </main>
</x-layout>
