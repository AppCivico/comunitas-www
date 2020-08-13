<x-layout :page_info="$home">

  <main class="sections">
    @if($banner)
      <header class="home-banner">
        <div class="home-banner__container">
          <div class="home-banner__title">
            {!! $banner->body !!}
          </div>
          <div class="home-banner__image">
            <img
              src="{{ voyager::image($banner->image) }}"
              srcset="{{ voyager::image($banner->image) }} 2x,
              {{ voyager::image($banner->thumbnail('medium', 'image')) }} 1x"
              alt="{{ $banner->body }}"
            >
          </div>
        </div>
      </header>
    @endif

    <div class="container sections__container">
      <h2 class="sections__list-main-title">Novidades</h2>

      @if(!empty($trails[0]))
        <div class="sections__list sections__list--home sections__list--home-big">
          @foreach($trails as $content)
            <article class="section__item">
              <div class="sections__image">
                <a href="{{ route('trail.show', ['trail' => $content->slug]) }}">
                  @if($content->picture)
                    <div class="sections__image-picture" style="background-image: url('{{ $content->picture }}')">
                    </div>
                  @else
                    @svg('no-picture')
                  @endif
                </a>
              </div>
              <div class="section__tags">
                @foreach($content->categories as $category)
                  <a href="{{ route('category.index', ['slug' => $category->slug]) }}">
                    {{ $category->name }}
                  </a>
                @endforeach
              </div>
              <a href="{{ route('trail.show', ['trail' => $content->slug]) }}">
                <h2 class="sections__list-title">
                  @isset($content->title)
                    {{ Str::limit($content->title, 55) }}
                  @elseif($content->name)
                    {{ Str::limit($content->name, 55) }}
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
            @if($content)
              <article class="section__item">
                <div class="sections__image">
                  <a
                    @if($content->external_link)
                      href="{{ $content->external_link }}" target="blank"
                    @elseif($content->slug)
                      href="{{ route($content->type, [$content->type => $content->slug]) }}"
                    @endif
                  >
                    @if($content->image)
                      <img
                        src="{{ Voyager::image($content->image) }}"
                        srcset="{{ Voyager::image($content->thumbnail('medium')) }},
                        {{ Voyager::image($content->image) }} 2x"
                        sizes="(max-width: 400px) 480px, 800px"
                        alt="{{ $content->image_alt }}"
                      >
                    @else
                      @svg('no-picture')
                    @endif
                  </a>
                  <div class="section__image-text-over">
                    <div class="section__tags">
                      @foreach($content->categories as $category)
                        <a href="{{ route('category.index', ['category' => $category->slug]) }}">
                          {{ $category->name }}
                        </a>
                      @endforeach
                    </div>
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
                          {{ Str::limit($content->title, 55) }}
                        @elseif($content->name)
                          {{ Str::limit($content->name, 55) }}
                        @endisset
                      </h2>
                    </a>
                  </div>
                </div>
              </article>
            @endif
          @endforeach
        @endif
      </div>
    </div> <!-- container -->

    <div class="container">
      <div class="home-main">
          <div class="home-main__text">
            <strong class="home-main__tiny-text">AS VANTAGENS DA PLATAFORMA REDE JUNTOS</strong>
            <h1 class="home-main__title">{{ $home->title }}</h1>
            <div class="home-main__rows">
              @if($home->first_title)
                <div class="home-main__row">
                  <img
                    src="{{ voyager::image($home->first_image) }}"
                    alt="{{ $home->first_title }}"
                  >
                  <div class="home-main__intern-text">
                    <h2>{{ $home->first_title }}</h2>
                    <p>{{ $home->first_body }}</p>
                  </div>
                </div>
              @endif

              @if($home->second_title)
                <div class="home-main__row">
                  <img
                    src="{{ voyager::image($home->second_image) }}"
                    alt="{{ $home->second_title }}"
                  >
                  <div class="home-main__intern-text">
                    <h2>{{ $home->second_title }}</h2>
                    <p>{{ $home->second_body }}</p>
                  </div>
                </div>
              @endif

              @if($home->third_title)
                <div class="home-main__row">
                  <img
                    src="{{ voyager::image($home->third_image) }}"
                    alt="{{ $home->third_title }}"
                  >
                  <div class="home-main__intern-text">
                    <h2>{{ $home->third_title }}</h2>
                    <p>{{ $home->third_body }}</p>
                  </div>
                </div>
              @endif

            </div>
          </div>
          <div class="home-main__image">
            <img
              src="{{ voyager::image($home->image) }}"
              srcset="{{ voyager::image($home->image) }} 2x,
              {{ voyager::image($home->thumbnail('medium', 'image')) }} 1x"
              alt="{{ $home->title }}"
            >
          </div>
        </div>
    </div>

    @if(isset($testimonials))
      <x-testimonials
        :testimonials="$testimonials"
        :image="$home->image_testimonial" />
    @endif

  </main>
</x-layout>
