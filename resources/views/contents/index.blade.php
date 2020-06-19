<x-layout>
  <main class="sections">
    <header class="sections__header" style="background-image: url('{{ Voyager::image($page_info->image) }}')">
      <h1 class="sections__title">
        <span>Webnários</span>
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
        @foreach($contents as $content)
          <article class="section__item">
            <div class="sections__image">
              <a href="{{ $content->slug }}">
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
            <h2 class="sections__list-title">{{ $content->title }}</h2>
          </article>
        @endforeach

        <button class="button button--big sections__load-more">Carregar mais</button>
        <article class="sections__text">
          <h1>{{ $page_info->title }}</h1>
          <div class="sections__text-description">
            {!! $page_info->body !!}
          </div>
        </article>
      </div>
    </div>
  </main>
</x-layout>
