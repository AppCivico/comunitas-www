<x-layout>
  <main class="sections">
    <div class="container">
      <header>
        <h2>{{ $page_name }}: <small>{{ request()->q }}</small></h2>
      </header>
      <div class="sections__list">
        @if(count($contents) > 0)
          @foreach($contents as $content)
            <article class="section__item section__item--small">
              <div class="sections__image">
                  <a
                    @if($content->type === 'article')
                      href="{{ Storage::url($content->external_link) }}" target="blank"
                    @elseif($content->external_link)
                      href="{{ $content->getTranslatedAttribute('external_link', app()->getLocale()) }}" target="blank"
                    @elseif($content->type === 'trail')
                      href="{{ route('trail.show', ['trail' => $content->slug]) }}"
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
                      <a href="{{ route('category.index', ['category' => $category->slug]) }}">
                        {{ $category->name }}
                      </a>
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
                  href="{{ route('trail.show', ['trail' => $content->slug]) }}"
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
          <div class="container">
            <h3>
              @lang('search.no-results')
            </h3>
          </div>
        @endif
      </div>

      @if($contents->links())
        {{ $contents->appends(['q' => request()->q, 'type' => request()->type])->links() }}
      @endif

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
