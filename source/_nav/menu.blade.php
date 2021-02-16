<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }}" href="/"
        class="ml-6 text-gray-600 hover:text-brand-red">
        Home
    </a>


    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-600 hover:text-brand-red {{ $page->isActive('/blog') ? 'active text-brand-red' : '' }}">
        Blog
    </a>


    <a title="{{ $page->siteName }} Contact" href="mailto:martyn@martyntaylor.com"
        class="ml-6 text-gray-600 hover:text-brand-red {{ $page->isActive('/contact') ? 'active text-brand-red' : '' }}">
        Contact
    </a>
</nav>
