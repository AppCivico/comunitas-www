<x-layout>
  <main class="sections">
    <header
      class="sections__header sections__header--categories"
      @isset($page_info->image)
        style="background-image: url('{{ Voyager::image($page_info->image) }}')"
      @endisset
    >
      <h1 class="sections__title">
        <span>
          {{ $page_name }}:
          <small>{{ request()->q }}</small>
        </span>
      </h1>
    </header>
    <div class="container">
      <div class="sections__list">
        @isset($contents)
          @foreach($contents as $content)
            <article class="section__item section__item--small">
              <div class="sections__image">
                  <a
                    @if($content->type === 'article')
                      href="{{ Storage::url($content->external_link) }}" target="blank"
                    @elseif($content->external_link)
                      href="{{ $content->getTranslatedAttribute('external_link', app()->getLocale()) }}" target="blank"
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
                      alt="{{ $content->getTranslatedAttribute('image_alt', app()->getLocale()) }}"
                    >
                  @else
                    @svg('no-picture')
                  @endif
                </a>

                @if(!empty($content->categories[0]))
                  <div class="section__tags">
                    @foreach($content->categories as $category)
                      <!-- <a href="categories/{{ $category->slug }}">{{ $category->name }}</a> -->
                      <a>{{ $category->getTranslatedAttribute('name', app()->getLocale()) }}</a>
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
                    @lang('content.click-to-download')
                  </span>
                @endif

                <h2 class="sections__list-title">
                  @isset($content->title)
                    {{ $content->getTranslatedAttribute('title', app()->getLocale()) }}
                  @elseif($content->name)
                    {{ $content->getTranslatedAttribute('name', app()->getLocale()) }}
                  @endisset
                </h2>

                @if($type ?? '' ?? '' === 'trails')
                  <p class="section__excerpt">
                    {{ Str::words($content->getTranslatedAttribute('excerpt', app()->getLocale()), 30) }}
                  </p>
                @endif

                @if(isset($content->duration) || isset($content->person) || isset($content->modules))
                  <footer class="section__footer">
                    @isset($content->duration)
                      <div class="section__footer--item">


                        <span>@lang('content.duration')</span>
                        <strong>{{ $content->duration }}</strong>
                      </div>
                    @endisset

                    @isset($content->person)
                      <div class="section__footer--item">
                        <span>@lang('content.mentorship')</span>
                        <strong>
                          @foreach($content->person as $author)
                              {{ $author->name }}@if(!$loop->last),@endif
                          @endforeach
                        </strong>
                      </div>
                    @endisset

                    @isset($content->modules)
                      <div class="section__footer--item">
                        <span>@lang('content.modules')</span>
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
            @lang('content.no-entries')
          </h1>
        @endisset
      </div>

      @if($contents->links())
        {{ $contents->links() }}
      @endif
      <!-- <button class="button button&#45;&#45;big sections__load&#45;more">Carregar mais</button> -->

      @isset($page_info)
        <article class="sections__text">
          <h1>{{ $page_info->getTranslatedAttribute('title', app()->getLocale()) }}</h1>
          <div class="sections__text-description">
            {!! $page_info->getTranslatedAttribute('body', app()->getLocale()) !!}
          </div>
        </article>
      @endisset

    </div>
  </main>
</x-layout>
