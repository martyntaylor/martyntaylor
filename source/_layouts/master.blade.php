<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <script async defer data-domain="adjustedstudio.com" src="https://stats.martyntaylor.com/js/index.js"></script>
        @endif

        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&family=Mulish:wght@400;500;600;700;800;900" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen text-gray-800 leading-normal font-sans border-t-8 border-brand-red">
        

        <header class="flex items-center h-24 py-4 container  w-full container max-w-6xl mx-auto " role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-12 mr-3" src="/assets/images/logo.svg" alt="{{ $page->siteName }} logo" />
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')


        @yield('body')


        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://www.martyntaylor.com">Martyn Taylor</a> {{ date('Y') }}.
                </li>

            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
