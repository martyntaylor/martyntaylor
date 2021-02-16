@extends('_layouts.master')

@section('body')

    

   <p class="text-center text-5xl leading-snug block mb-24 font-semibold">Hi! I'm Martyn.  I'm an experienced Web Developer & AgilePM, based in Preston, UK.</p>







    <h1>Latest Posts</h1>

    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-8">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                {{ $featuredPost->getDate()->format('jS F Y') }}
            </p>

            <h2 class="text-3xl mt-0 mb-1">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-semibold">
                    {{ $featuredPost->title }}
                </a>
            </h2>
            @if ($featuredPost->categories)
                @foreach ($featuredPost->categories as $i => $category)
                    <a
                        href="{{ '/blog/categories/' . $category }}"
                        title="View posts in {{ $category }}"
                        class="inline-block bg-brand-red leading-loose tracking-wide text-white hover:text-white uppercase text-xs rounded mr-4 px-2 pt-px"
                    >{{ $category }}</a>
                @endforeach
            @endif

            <p class="my-4">{!! $featuredPost->getExcerpt() !!}</p>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-8">
        @endif
    @endforeach

    <h1 class="mt-32">Experience</h1>

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            Software Engineer
        </h2>

        <p class="my-1">Car &amp Classic</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            May 2019 - Present
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            Head of Development
        </h2>

        <p class="my-1">Skiddle</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            July 2011 - May 2019
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            PHP Developer
        </h2>

        <p class="my-1">iWeb</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            March 2007 - July 2011
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            PHP Developer
        </h2>

        <p class="my-1">Voodoo Agency</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            Sept 2004 - March 2007
        </p>
    </div>


    <h1 class="mt-32">Certification &amp; Education</h1>

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            <a href="https://www.youracclaim.com/badges/65120bdc-caf8-489d-afda-acc640ad51a6/linked_in_profile" rel="nofollow" target="_blank">AgilePM® Practitioner</a>
        </h2>

        <p class="my-1">APMG International</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            July 2016
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            <a href="https://www.youracclaim.com/badges/3b991978-a11e-45ee-b207-d3b7e4b0b3ca/linked_in_profile" rel="nofollow" target="_blank">AgilePM® Foundation</a>
        </h2>

        <p class="my-1">APMG International</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            July 2016
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h2 class="text-3xl mt-0 mb-1 text-gray-900 font-semibold">
            BSc Information System Design
        </h2>

        <p class="my-1">University of Central Lancashire</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            2001 - 2004
        </p>
    </div>






@stop
