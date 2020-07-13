<x-layout>
  <main class="sections">

    <header class="home-banner">
      <div class="home-banner__container">
        <h1 class="home-banner__title">
          VAMOS JUNTOS CONSTRUIR A <span class="text-destak">MAIOR PLATAFORMA</span> DE CONHECIMENTO EM
          <span class="text-destak">GESTÃO PÚBLICA</span>
        </h1>
        <div class="home-banner__image">
          <img src="{{ url('images/temp/home-banner.jpg') }}" alt="Título">
        </div>
      </div>
    </header>

    <div class="container sections__container">
      <h2 class="sections__list-main-title">Novidades</h2>

      @if(!empty($trails[0]))
        <div class="sections__list sections__list--home sections__list--home-big">
          @foreach($trails as $content)
            <article class="section__item">
              <div class="sections__image">
                <a href="{{ route('trail.show', ['trail' => $content->course_code]) }}">
                  @if($content->image)
                  <img
                    src="{{ Voyager::image($content->image) }}"
                    srcset="{{ Voyager::image($content->thumbnail('small')) }},
                    {{ Voyager::image($content->thumbnail('medium')) }} 1.5x,
                    {{ Voyager::image($content->image) }} 2x"
                    sizes="(max-width: 400px) 480px, 800px"
                    alt="{{ $content->image_alt }}"
                  >
                  @else
                    @svg('no-picture')
                  @endif
                </a>
              </div>
              <div class="section__tags">
                @foreach($content->categories as $category)
                  <!-- <a href="categories/{{ $category->slug }}">{{ $category->name }}</a> -->
                  <a>{{ $category->name }}</a>
                @endforeach
              </div>
              <a href="{{ route('trail.show', ['trail' => $content->course_code]) }}">
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
        </div>
      @endisset

      <div class="sections__list sections__list--home sections__list--small">
        @if(isset($contents) && $contents[0])
          @foreach($contents as $content)
            <article class="section__item">
              <div class="sections__image">
                  <a
                    @if($content->external_link)
                      href="{{ $content->external_link }}" target="blank"
                    @elseif($content->slug)
                      href="{{ route($content->type, [$content->type => $content->slug]) }}"
                    @endif
                  >
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
                    <a>{{ $category->name }}</a>
                  @endforeach

                  <a
                    @if($content->external_link)
                      href="{{ $content->external_link }}" target="blank"
                    @elseif($content->slug)
                      href="{{ route($content->type, [$content->type => $content->slug]) }}"
                    @endif
                    class="section__small-section-title"
                  >

                    @if(isset($has_obs))
                      <span class="section__download-info">
                        Clique para fazer o download
                      </span>
                    @endif

                    <h2>
                      @isset($content->title)
                        {{ $content->title }}
                      @elseif($content->name)
                        {{ $content->name }}
                      @endisset
                    </h2>
                  </a>
                </div>

              </div>
            </article>
          @endforeach
        @endif
      </div>
    </div> <!-- container -->

    <div class="container">
      <div class="home-main">
          <div class="home-main__text">
            <strong class="home-main__tiny-text">AS VANTAGENS DA PLATAFORMA REDE JUNTOS</strong>
            <h1 class="home-main__title">A plataforma é <span>aberta</span> e <span>gratuita</span> para acesso a todo o conteúdo disponível</h1>
            <div class="home-main__rows">
              <div class="home-main__row">
                <img src="{{ url('images/icons/speedometer--purple.svg') }}" alt="Progresso">
                <div class="home-main__intern-text">
                  <h2>Progresso</h2>
                  <p>Área onde o usuário pode ver todos as trilhas e seu progresso</p>
                </div>
              </div>
              <div class="home-main__row">
                <img src="{{ url('images/icons/book--purple.svg') }}" alt="Trilhas">
                <div class="home-main__intern-text">
                  <h2>Trilhas</h2>
                  <p>As melhores trilhas para melhorias dos serviços prestados à população</p>
                </div>
              </div>
              <div class="home-main__row">
                <img src="{{ url('images/icons/dialog--purple.svg') }}" alt="Progresso">
                <div class="home-main__intern-text">
                  <h2>Forúm</h2>
                  <p>Tirar dúvidas, conhecer pessoas e replicar seu conhecimento com pessoas engajadas</p>
                </div>
              </div>
            </div>
          </div>
          <div class="home-main__image">
            <img src="{{ url('images/temp/home-main.jpg') }}" alt="AS VANTAGENS DA PLATAFORMA REDE JUNTOS">
          </div>
        </div>
    </div>
  </main>
</x-layout>
