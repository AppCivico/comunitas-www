<x-layout>
  <main class="about">
    <div class="container">
      <h1>@lang('about.page-title')</h1>
      @if($content)
        <div class="about__main">
          <div class="about__text">
            {!! $content->getTranslatedAttribute('body', app()->getLocale()) !!}
          </div>
          <div class="about__image">
            <img src="{{  url('images/logo-purple.svg') }}" alt="@lang('about.logo-alt')">
          </div>
        </div>
      @endif
    </div>

    @if(count($collaborators))
      <div class="about__collaborators">
        <div class="container">
          <h2>@lang('about.collaborators')</h2>
          <div class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                @foreach($collaborators as $collaborator)
                  <li class="splide__slide">
                    <address class="about__collaborators-box">
                      <img
                        src="{{ voyager::image($collaborator->image) }}"
                        srcset="{{ voyager::image($collaborator->image) }} 2x,
                        {{ voyager::image($collaborator->thumbnail('medium', 'image')) }} 1x"
                        alt="{{ $collaborator->title }}"
                      >

                      <p>
                      <strong>{{ $collaborator->getTranslatedAttribute('name', app()->getLocale()) }}</strong>
                      {{ $collaborator->getTranslatedAttribute('bio', app()->getLocale()) }}
                      </p>
                    </address>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    @endif

    @if(count($initiatives))
      <div class="about__initiative">
        <div class="container">
          <h2>@lang('about.initiative')</h2>
          <div class="about__initiative-images">
            @foreach($initiatives as $initiative)
              <img
                src="{{ voyager::image($initiative->image) }}"
                srcset="{{ voyager::image($initiative->image) }} 2x,
                {{ voyager::image($initiative->thumbnail('medium', 'image')) }} 1x"
                alt="{{ $initiative->title }}"
              >
            @endforeach
          </div>
        </div>
      </div>
    @endif

    @if(count($supports))
      <div class="about__support">
        <div class="container">
          <h2>@lang('about.support')</h2>
          <div class="about__support-images">
            @foreach($supports as $support)
              <img
                src="{{ voyager::image($support->image) }}"
                srcset="{{ voyager::image($support->image) }} 2x,
                {{ voyager::image($support->thumbnail('medium', 'image')) }} 1x"
                alt="{{ $support->title }}"
              >
            @endforeach
          </div>
        </div>
      </div>
    @endif

    <div class="about__address">
      <div class="container">
        <h2>@lang('about.wanna-help')</h2>
        <h2></h2>
        <p class="text--small">
          @lang('about.wanna-help-text')
        </p>

        <!--
        <div class="about__address-form">
          <form action="">
            <label for="name">@lang('about.name')</label>
            <input type="text" id="name" name="name">

            <label for="email">@lang('about.email')</label>
            <input type="email" id="email" name="email">

            <label for="phone">@lang('about.phone')</label>
            <input type="tel" id="phone" name="phone">

            <label for="area">@lang('about.area')</label>
            <select id="area" name="area">
              <option value="@lang('about.contact')">@lang('about.contact')</option>
              <option value="@lang('about.press')">@lang('about.press')</option>
              <option value="@lang('about.support')">@lang('about.support')</option>
            </select>

            <label for="message">@lang('about.message')</label>
            <textarea name="message" id="message" placeholder=""></textarea>

            <button type="submit">@lang('about.send')</button>
          </form>
          <address>
            <p>
              <strong>@lang('about.address-title')</strong>
              @lang('about.address')
            </p>

            <p>
              <strong>@lang('about.press')</strong>
              @lang('about.please-email-at')
              <a href="mailto:imprensa@redejuntos.com">imprensa@redejuntos.com</a>
            </p>
          </address>

        </div>
        -->
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script>
    new Splide('.splide', {
      type: 'loop',
      perPage: 4,
      arrows: false,
      pagination: false,
      autoplay: true,
      trimSpace: true,
      // focus: 'center',
      gap: '2rem',
      interval: 4000,

      breakpoints: {
        920: {
          perPage: 3,
        },
        700: {
          perPage: 2,
        },
        480: {
          perPage: 1,
        },
      }
    }).mount();
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</x-layout>
