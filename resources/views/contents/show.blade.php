<x-layout>
  <main class="section-intern">
    <div class="container">
      <address class="section-intern__author">
        @isset($content->author)
          {{ $content->author->name }} |
        @endisset
        @isset($content->created_at)
          <time pubdate datetime="{{ $content->created_at }}">
            Publicado: {{ $content->created_at->diffForHumans() }}
          </time>
        @endisset
      </address>

      <h1>{{ $content->title }}</h1>

      @isset($content->iframe)
        {!! $content->iframe !!}
      @endisset

      <div class="section-intern__tags">
        @foreach($content->categories as $category)
          <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
      </div>
      <div class="section-intern__content">
        {!! $content->body !!}
      </div>
      @isset($content->author)
        <footer>
          <address class="section-intern__address">
            <img
              src="{{ Voyager::image($content->author->image) }}"
              alt="{{ $content->author->name }}"
            >
            <div class="section-intern__text">
              <h1 class="section-intern__address-name">{{ $content->author->name }}</h1>

              <div class="section-intern__footer-bio">
                @isset($content->author->bio)
                  <span class="color-blue">Biografia:</span> {{ $content->author->bio }}
                @endisset
              </div>

              <ul class="social-icons social-icons--red">
                @isset($content->author->facebook)
                  <li>
                      <a href="{{ $content->author->facebook }}" class="social-icons__facebook">
                        Facebook
                      </a>
                  </li>
                @endisset
                @isset($content->author->linkedin)
                  <li>
                    <a href="{{ $content->author->linkedin }}" class="social-icons__linkedin">
                      linkedin
                    </a>
                  </li>
                @endisset
                @isset($content->author->twitter)
                  <li>
                    <a href="{{ $content->author->twitter }}" class="social-icons__twitter">
                      twitter
                    </a>
                  </li>
                @endisset
                @isset($content->author->youtube)
                  <li>
                    <a href="{{ $content->author->youtube }}" class="social-icons__youtube">
                      youtube
                    </a>
                  </li>
                @endisset
                @isset($content->author->instagram)
                  <li>
                    <a href="{{ $content->author->instagram }}" class="social-icons__instagram">
                      instagram
                    </a>
                  </li>
                @endisset
              </ul>
            </div>
          </address>
        </footer>
      @endisset
      <div class="section-intern__share">
        <h4>Compartilhe nas redes sociais</h4>
        <ul class="social-icons social-icons--blue">
          <li>
            <a
              class="social-icons__facebook"
              href="https://www.facebook.com/sharer/sharer.php?u={{ URL::full() }}"
              target="_blank"
            >
              Facebook
            </a>
          </li>
          <li>
            <a
              class="social-icons__twitter"
              href="https://twitter.com/intent/tweet?url={{ URL::full() }}"
              target="_blank"
            >
              Twitter
            </a>
          </li>
        </ul>
      </div>

      @isset($related_contents)
        <div class="sections__list sections__list--smaller-cards">
          <h2 class="sections__list-section-title color-blue">Conteúdos Relacionados</h2>

          @foreach($related_contents as $related)
            <article class="section__item">
              <div class="sections__image">
                <a href="{{ $related->slug }}">
                  <img
                    src="{{ Voyager::image($related->image) }}"
                    srcset="{{ Voyager::image($related->thumbnail('small')) }},
                    {{ Voyager::image($related->thumbnail('medium')) }} 1.5x,
                    {{ Voyager::image( $related->image ) }} 2x"
                    sizes="(max-width: 400px) 480px, 800px"
                    alt="{{ $related->image_alt }}"
                  >
                </a>
                <div class="section__tags">
                  @foreach($related->categories as $category)
                    <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
                  @endforeach
                </div>
              </div>
              <h2 class="sections__list-title">{{ $related->title }}</h2>
            </article>
          @endforeach
        </div>
      @endisset

      <div class="disqus">
        <div id="disqus_thread"></div>
      </div>
    </div>
  </main>
</x-layout>

<script>

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
      s.src = 'https://dev-comunitas.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
</script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
