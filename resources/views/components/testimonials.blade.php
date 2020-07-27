<div class="testimonials">
  <div class="container container--flex">
    <div class="testimonials__text">
      <span class="testimonials__tiny-text">
        Comentários das pessoas que fazem a Rede Juntos
      </span>

      @foreach($testimonials as $testimonial)
        @if($loop->first)
          <blockquote>
            <p>
              {{ $testimonial->getTranslatedAttribute('body', app()->getLocale()) }}
            </p>
            <footer>
              <cite>{{ $testimonial->author }}</cite>
              <span>@if($testimonial->institution) - {{ $testimonial->institution }} @endif</span>
            </footer>
          </blockquote>
        @endif
      @endforeach
    </div>
    <div class="testimonials__content">
      <div class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            @foreach($testimonials as $testimonial)
              @if(!$loop->first)
                <li class="splide__slide">
                  <blockquote>
                    <figure>
                      <img
                        src="{{ voyager::image($testimonial->image) }}"
                        srcset="{{ voyager::image($testimonial->image) }} 2x,
                        {{ voyager::image($testimonial->thumbnail('medium', 'image')) }} 1x"
                        alt="{{ $testimonial->author }}"
                        >
                    </figure>
                    <p>
                      {{ $testimonial->body }}
                    </p>
                    <footer>
                      <cite>{{ $testimonial->author }}</cite>
                      <span>@if($testimonial->institution) - {{ $testimonial->institution }} @endif</span>
                    </footer>
                  </blockquote>
                </li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
  new Splide('.splide', {
    @if($testimonials->count() > 3)
      type: 'loop',
    @endif
    perPage: 3,
    arrows: false,
    pagination: false,
    autoplay: true,
    gap: '2rem',
    interval: 4000,

    breakpoints: {
      2000: {
        perPage: 2,
        padding: {
          right: '10rem',
        },
      },
      1024: {
        perPage: 2,
        padding: {
          right: '0',
          left : '0',
        },
      },
      800: {
        perPage: 1,
      },
    }
  }).mount();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
