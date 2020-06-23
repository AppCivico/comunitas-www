<x-layout>
  <main class="sections">
    <header
      class="sections__header"
      @isset($page_info->image)
        style="background-image: url('{{ Voyager::image($page_info->image) }}')"
      @endisset
    >
      <h1 class="sections__title">
        <span>{{ $page_name }}</span>
      </h1>
    </header>
    <div class="container">
      <form action="" class="sections__select">
        <strong>Categorias</strong>
        <select id="" name="">
          <option value="">Todas</option>
          @foreach($categories as $category)
            <option value="">{{ $category->name }}</option>
          @endforeach
        </select>
      </form>
      <div class="sections__list">
        @isset($contents)
          @foreach($contents as $content)
            <article class="section__item">
              <div class="sections__image">
                  <a
                    @if($content->external_link)
                      href="{{ $content->external_link }}" target="blank"
                    @elseif($content->slug)
                      href="{{ URL::current() }}/{{ $content->slug }}"
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
                    <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
                  @endforeach
                </div>
              </div>
              <a
                @if($content->external_link)
                  href="{{ $content->external_link }}" target="blank"
                @elseif($content->slug)
                  href="{{ URL::current() }}/{{ $content->slug }}"
                @endif
              >
                @if($content->external_link)
                  <span class="section__download-info">
                    Clique para fazer o download
                  </span>
                @endif
                <h2 class="sections__list-title">{{ $content->title }}</h2>
              </a>
            </article>
          @endforeach
        @else
          <h1>
            Nenhum conteúdo cadastrado.
          </h1>
        @endisset

        <button class="button button--big sections__load-more">Carregar mais</button>

        @isset($page_info)
          <article class="sections__text">
            <h1>{{ $page_info->title }}</h1>
            <div class="sections__text-description">
              {!! $page_info->body !!}
            </div>
          </article>
        @endisset
      </div>
    </div>
  </main>
</x-layout>
