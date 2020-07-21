<x-layout>
  <main class="sections">
    <header class="sections__header sections__header--search">
      <h1 class="sections__title">
        <span>{{ $page_name }}</span>
      </h1>
    </header>
    <div class="container">
      <div class="sections__list">
        @isset($contents)
          @foreach($contents as $contentGroup)
            @if($contentGroup->data->count() > 0)
              <h1>
                {{ $contentGroup->name }}
                <br>
                <small>{{ request()->q }}</small>
              </h1>
              @foreach($contentGroup->data as $content)
                <article class="section__item section__item--small">
                  <div class="sections__image">
                      <a
                        @if($content->type === 'article')
                          href="{{ Storage::url($content->external_link) }}" target="blank"
                        @elseif($content->external_link)
                          href="{{ $content->external_link }}" target="blank"
                        @elseif($content->type === 'trail')
                          href="{{ route('trail.show', ['trail' => $content->course_code]) }}"
                        @elseif($content->slug)
                          href="{{ route($content->type, [$content->type => $content->slug]) }}"
                        @endif
                      >

                      @if($content->picture)
                        <div class="sections__image-picture">
                          <img src="{{ $content->picture }}" alt="{{ $content->name }}">
                        </div>
                      @elseif($content->image)
                        <img
                          src="{{ Voyager::image($content->image) }}"
                          srcset="{{ Voyager::image($content->thumbnail('small')) }},
                          {{ Voyager::image($content->thumbnail('medium')) }} 1.5x,
                          {{ Voyager::image( $content->image ) }} 2x"
                          sizes="(max-width: 400px) 480px, 800px"
                          alt="{{ $content->image_alt }}"
                        >
                      @else
                        @svg('no-picture')
                      @endif
                    </a>

                    @if(!empty($content->categories[0]))
                      <div class="section__tags">
                        @foreach($content->categories as $category)
                          <!-- <a href="categories/{{ $category->slug }}">{{ $category->name }}</a> -->
                          <a>{{ $category->name }}</a>
                        @endforeach
                      </div>
                    @endif
                  </div>

                  <a
                    @if($content->type === 'article')
                      href="{{ Storage::url($content->external_link) }}" target="blank"
                    @elseif($content->external_link)
                      href="{{ $content->external_link }}" target="blank"
                    @elseif($content->type === 'trail')
                      href="{{ route('trail.show', ['trail' => $content->course_code]) }}"
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

                    @if($type ?? '' ?? '' === 'trails')
                      <p class="section__excerpt">
                        {{ Str::words($content->excerpt, 30) }}
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

              @if($contentGroup->data->links())
                {{ $contentGroup->data->appends(['q' => request()->q])->links() }}
              @endif

            @endif
          @endforeach
        @else
          <h1>
            Nenhum conteúdo cadastrado.
          </h1>
        @endisset
      </div>

      <!-- <button class="button button&#45;&#45;big sections__load&#45;more">Carregar mais</button> -->

    </div>
  </main>
</x-layout>
