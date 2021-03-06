<x-layout>
  <main class="section-intern">
    <div class="container">
      @isset($content->featured)
        <img
          class="section-intern__featured"
          src="{{ voyager::image($content->featured) }}"
          srcset="{{ voyager::image($content->thumbnail('small', 'featured')) }} 0.25x,
          {{ voyager::image($content->thumbnail('medium', 'featured')) }} 0.5x,
          {{ voyager::image($content->featured) }} 1x"
          alt="{{ $content->title }}"
        >
      @endisset

      <address class="section-intern__author">
        @isset($content->author)
          {{ $content->author->name }} |
        @endisset
        @isset($content->created_at)
          <time pubdate datetime="{{ $content->created_at }}">
            @lang('content.published') {{ $content->formatDate($content->created_at) }}
          </time>
        @endisset
      </address>

      <h1>
        @isset($content->title)
          {{ $content->getTranslatedAttribute('title', app()->getLocale()) }}
        @elseif($content->name)
          {{ $content->getTranslatedAttribute('name', app()->getLocale()) }}
        @endisset
      </h1>

      @isset($content->iframe)
        {!! $content->getTranslatedAttribute('iframe', app()->getLocale()) !!}
      @endisset

      <div class="section-intern__tags">
        @foreach($content->categories as $category)
          <a href="{{ route('category.index', ['category' => $category->slug]) }}">
            {{ $category->getTranslatedAttribute('name', app()->getLocale()) }}
          </a>
        @endforeach
      </div>

      @isset($content->public_description)
        <div class="section-intern__content">
          {!! $content->public_description !!}
        </div>
      @endisset

      @isset($content->modules)
        <h2 class="section-intern__modules-title">O que você vai aprender</h2>
        <ul class="section-intern__modules">
          @foreach($content->modules as $module)
            <li>{{ $module->name }}</li>
          @endforeach
        </ul>
      @endisset

      <div class="section-intern__content">
        {!! $content->getTranslatedAttribute('body', app()->getLocale()) !!}
      </div>

      @isset($content->url)
        <div class="section-intern__big-button">
          <a href="{{ $content->url }}" class="button button--big" target="_blank">
            @lang('content.start')
          </a>
        </div>
      @endisset

      @isset($content->author)
        <footer>
          <address class="section-intern__address">
            @if($content->author->image)
              <img
                src="{{ voyager::image($content->author->image) }}"
                alt="{{ $content->author->name }}"
              >
            @else
              @svg('no-profile-picture')
            @endif
            <div class="section-intern__text">
              <h1 class="section-intern__address-name">{{ $content->author->name }}</h1>

              <div class="section-intern__footer-bio">
                @isset($content->author->bio)
                  <span class="color-blue">biografia:</span>
                  {{ $content->author->getTranslatedAttribute('bio', app()->getLocale()) }}
                @endisset
              </div>

              <ul class="social-icons social-icons">
                @isset($content->author->facebook)
                  <li>
                      <a href="{{ $content->author->facebook }}" class="social-icons__facebook">
                        @lang('social.facebook')
                      </a>
                  </li>
                @endisset
                @isset($content->author->linkedin)
                  <li>
                    <a href="{{ $content->author->linkedin }}" class="social-icons__linkedin">
                      @lang('social.linkedin')
                    </a>
                  </li>
                @endisset
                @isset($content->author->twitter)
                  <li>
                    <a href="{{ $content->author->twitter }}" class="social-icons__twitter">
                      @lang('social.twitter')
                    </a>
                  </li>
                @endisset
                @isset($content->author->youtube)
                  <li>
                    <a href="{{ $content->author->youtube }}" class="social-icons__youtube">
                      @lang('social.youtube')
                    </a>
                  </li>
                @endisset
                @isset($content->author->instagram)
                  <li>
                    <a href="{{ $content->author->instagram }}" class="social-icons__instagram">
                      @lang('social.instagram')
                    </a>
                  </li>
                @endisset
              </ul>
            </div>
          </address>
        </footer>
      @endisset

      @isset($content->person)
        <div class="section-intern__person">
          <footer>
            @foreach($content->person as $author)
              <address class="section-intern__address">
                @if($author->avatar_image_url)
                  <img
                    src="{{ $author->avatar_image_url }}"
                    alt="{{ $author->name }}"
                  >
                @else
                  @svg('no-profile-picture')
                @endif
                <div class="section-intern__text">
                  <h1 class="section-intern__address-name">{{ $author->name }}</h1>

                  <div class="section-intern__footer-bio">
                    @if($author->bio)
                      <span class="color-blue">@lang('bio'):</span> {{ $author->bio }}
                    @endif
                  </div>

                  <ul class="social-icons social-icons">
                    @if($author->facebook)
                      <li>
                          <a href="{{ $author->facebook }}" class="social-icons__facebook">
                            @lang('social.facebook')
                          </a>
                      </li>
                    @endif
                    @if($author->linkedin)
                      <li>
                        <a href="{{ $author->linkedin }}" class="social-icons__linkedin">
                          @lang('social.linkedin')
                        </a>
                      </li>
                    @endif
                    @if($author->twitter)
                      <li>
                        <a href="{{ $author->twitter }}" class="social-icons__twitter">
                          @lang('social.twitter')
                        </a>
                      </li>
                    @endif
                    @if($author->youtube)
                      <li>
                        <a href="{{ $author->youtube }}" class="social-icons__youtube">
                          @lang('social.youtube')
                        </a>
                      </li>
                    @endif
                    @if($author->instagram)
                      <li>
                        <a href="{{ $author->instagram }}" class="social-icons__instagram">
                          @lang('social.instagram')
                        </a>
                      </li>
                    @endif
                  </ul>
                </div>
              </address>
            @endforeach
          </footer>
        </div>
      @endisset

      <div class="section-intern__share">
        <h4>@lang('content.share')</h4>
        <ul class="social-icons social-icons--blue">
          <li>
            <a
              class="social-icons__facebook"
              href="https://www.facebook.com/sharer/sharer.php?u={{ URL::full() }}"
              target="_blank"
            >
              @lang('social.facebook')
            </a>
          </li>
          <li>
            <a
              class="social-icons__twitter"
              href="https://twitter.com/intent/tweet?url={{ URL::full() }}"
              target="_blank"
            >
              @lang('social.twitter')
            </a>
          </li>
        </ul>
      </div>

      @if(count($related_contents))
        <div class="sections__list sections__list--smaller-cards">
          <h2 class="sections__list-section-title color-blue">@lang('content.related-content')</h2>

          @foreach($related_contents as $related)
            <article class="section__item">
              <div class="sections__image">
                <a href="{{ $related->slug }}">
                  <img
                    src="{{ Voyager::image($related->image) }}"
                    srcset="{{ Voyager::image($related->thumbnail('medium')) }},
                    {{ Voyager::image($related->image) }} 2x"
                    sizes="(max-width: 400px) 480px, 800px"
                    alt="{{ $related->image_alt }}"
                  >
                </a>
                <div class="section__tags">
                  @foreach($related->categories as $category)
                    <a href="categories/{{ $category->slug }}">
                      {{ $category->getTranslatedAttribute('name', app()->getLocale()) }}
                    </a>
                  @endforeach
                </div>
              </div>
              <h2 class="sections__list-title">
                {{ $related->getTranslatedAttribute('title', app()->getLocale()) }}
              </h2>
            </article>
          @endforeach
        </div>
      @endif

      <div class="disqus">
        <div id="disqus_thread"></div>
      </div>
    </div>
  </main>
</x-layout>

<script>
  // var disqus_config = function () {
  //   this.language = "ru";
  // };

  /**
  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
   *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
     */
    (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://rede-juntos.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
</script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
