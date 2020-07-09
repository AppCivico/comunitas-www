<x-layout>
  <main class="sections">
    <header
      class="sections__header sections__header--categories"
      @isset($page_info->image)
        style="background-image: url('{{ Voyager::image($page_info->image) }}')"
      @endisset
    >
      <h1 class="sections__title">
        <span>{{ $page_name }}</span>
      </h1>
    </header>
    <div class="container">
      @if(isset($categories))
        <form action="" class="sections__select">
          <strong>Categorias</strong>
          <select id="js-category-select">
            <option value="{{ url('/') }}/{{ Request::segment(1) }}">Todas</option>
            @foreach($categories as $select_category)
              <option
                @if(isset($category) && $select_category->slug === $category->slug ?? '')
                  selected
                @endif
                value="{{ url('/') }}/{{ Request::segment(1) }}/categoria/{{ $select_category->slug }}"
              >
                {{ $select_category->name }}
              </option>
            @endforeach
          </select>
        </form>
      @endif
      <div class="sections__list">
        @isset($contents)
          @foreach($contents as $content)
            <article class="section__item @if($content->external_link) section__item--small @endif">
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
                    <!-- <a href="categories/{{ $category->slug }}">{{ $category->name }}</a> -->
                    <a>{{ $category->name }}</a>
                  @endforeach
                </div>
              </div>
              <a
                @if($content->external_link)
                  href="{{ $content->external_link }}" target="blank"
                @elseif($content->slug)
                  href="{{ route($content->type, [$content->type => $content->slug]) }}"
                @endif
              >
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

                @if($type ?? '' === 'trails')
                  <p class="section__excerpt">
                    {{ $content->excerpt }}
                  </p>
                @endif

                @if(isset($content->duration) || isset($content->person) || isset($content->modules))
                  <footer class="section__footer">
                    @isset($content->duration)
                      <div class="section__footer--item">
                        <span>Duração</span>
                        <strong>{{ $content->duration }}</strong>
                      </div>
                    @endisset

                    @isset($content->person)
                      <div class="section__footer--item">
                        <span>Mentoria</span>
                        <strong>
                          @foreach($content->person as $author)
                              {{ $author->name }}@if(!$loop->last),@endif
                          @endforeach
                        </strong>
                      </div>
                    @endisset

                    @isset($content->modules)
                      <div class="section__footer--item">
                        <span>Módulos</span>
                        <strong>
                          {{ $content->modules->count() }}
                        </strong>
                      </div>
                    @endisset
                  </footer>
                @endisset

              </a>
            </article>
          @endforeach
        @else
          <h1>
            Nenhum conteúdo cadastrado.
          </h1>
        @endisset
      </div>

      @if($contents->links())
        {{ $contents->links() }}
      @endif
      <!-- <button class="button button&#45;&#45;big sections__load&#45;more">Carregar mais</button> -->

      @isset($page_info)
        <article class="sections__text">
          <h1>{{ $page_info->title }}</h1>
          <div class="sections__text-description">
            {!! $page_info->body !!}
          </div>
        </article>
      @endisset

    </div>
  </main>
</x-layout>
