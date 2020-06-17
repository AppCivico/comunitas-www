<x-layout>
  <main class="section-intern">
    <div class="container">
      <address class="section-intern__author">
        @isset($author)
          {{ $author->name }} |
        @endisset
        <time pubdate datetime="{{ $content->created_at }}">
          Publicado: {{ $content->created_at->diffForHumans() }}
        </time>
      </address>
      <h1>{{ $content->title }}</h1>

      <div class="section-intern__tags">
        @foreach($content->categories as $category)
          <a href="categories/{{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
      </div>
      <div class="section-intern__content">
        {!! $content->body !!}
      </div>
      @isset($author)
      <footer class="section-intern__content">
        <address>
          <img
            src="{{ Voyager::image($author_image) }}"
            alt="{{ $author->author->name }}"
          >
          @isset($author->bio)
            {!! $author->bio !!}
          @endisset
          @foreach($author->social_links as $social_link)
            <a href="categories/{{ $social_link->slug }}" class="{{ $social_link->name }}">
              {{ $social_link->name }}
            </a>
          @endforeach
        </address>
        <div class="section-intern__share">
          <h4>Compartilhe nas redes sociais</h4>
          <ul class="social-icons--blue">
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
          </ul>
        </div>
      </footer>
      @endisset
      @isset($related_contents)
        @foreach($related_contents as $related)
          <div class="section-intern__related">
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
              </div>
              <h2 class="sections__list-title">{{ $content->title }}</h2>
            </article>
          </div>
        @endforeach
      @endisset
    </div>
  </main>
</x-layout>
