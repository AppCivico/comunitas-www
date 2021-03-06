<x-layout :page_info="$page_info">
  <main class="sections">
    <header
      class="
        sections__header
        sections__header--categories
        @if(!isset($page_info->image)) sections-header--no-image @endif
      "
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
          <strong>@lang('content.categories')</strong>
          <select id="js-category-select">
            <option value="{{ url('/') }}/{{ Request::segment(1) }}">@lang('content.all')</option>
            @foreach($categories as $select_category)
              <option
                @if(isset($category) && $select_category->slug === $category->slug ?? '')
                  selected
                @endif
                value="{{ url('/') }}/{{ Request::segment(1) }}/categoria/{{ $select_category->slug }}"
              >
                {{ $select_category->getTranslatedAttribute('name', app()->getLocale()) }}
              </option>
            @endforeach
          </select>
        </form>
      @endif
      <div class="sections__list">
        @if($contents->count() > 0)
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

                <time class="section__date" pubdate datetime="{{ $content->created_at }}">
                  {{ $content->formatDate($content->created_at) }}
                </time>
                @if(!empty($content->categories[0]))
                  <div class="section__tags">
                    @foreach($content->categories as $category)
                      <a href="{{ route('category.index', ['category' => $category->slug]) }}">
                        {{ $category->getTranslatedAttribute('name', app()->getLocale()) }}
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

                @if($type ?? '' === 'trails')
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
            <h1>@lang('content.no-entries')</h1>
          </div>
        @endisset
      </div>

      @if($contents->links())
        {{ $contents->links() }}
      @endif
      <!-- <button class="button button&#45;&#45;big sections__load&#45;more">Carregar mais</button> -->

      @if(isset($page_info->title) || isset($page_info->body))
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
