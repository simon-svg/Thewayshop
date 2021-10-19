@foreach ($available_locales as $locale_name => $available_locale)
    <a class="header__change_lang" href="language/{{ $available_locale }}">{{ $available_locale }}</a>
@endforeach
