@extends('_layouts.master')

@section('body')

<div role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
   <p class="text-center text-5xl leading-snug block mb-24 font-semibold">Hi! I'm Martyn.  I'm an experienced Web Developer & AgilePM, based in Preston, UK.</p>

    <h2 class="text-3xl leading-9 font-semibold text-gray-900 sm:text-4xl sm:leading-10">
        Latest Posts
    </h2>

    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-8">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                {{ $featuredPost->getDate()->format('jS F Y') }}
            </p>

            <h3 class="my-0 text-xl leading-7 font-semibold text-gray-900  mt-0 mb-1">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-semibold">
                    {{ $featuredPost->title }}
                </a>
            </h3>
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

</div>
<div class=" w-full bg-gray-100 py-16">
    <div class="flex-auto w-full container max-w-4xl mx-auto px-6">
        <div>
          <h2 class="text-3xl leading-9 font-semibold text-gray-900 sm:text-4xl sm:leading-10">
            Experience
          </h2>
          <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
            16 years experiance working in both agencies and internal development teams. Led teams and managed departments as well as attaining an AgilePM certficiation.
          </p>
          <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
            Worked with a variety of different technologies on various sized projects, from small local business, to international ecommerce sites with £60+ million yearly sales & 100+ million pageviews.
          </p>
        </div>


        <div class="mt-12 grid gap-16 lg:grid-cols-2 lg:gap-x-12 lg:gap-y-10">
          <div>        
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-20 w-20 rounded-full" src="/assets/images/experience/car-and-classic-logo.jpg" alt="Car & Classic logo">
              </div>
              <div class="ml-6">
                <h3 class="my-0 text-xl leading-7 font-semibold text-gray-900">
                    Software Engineer
                </h3>
                <p class="my-0">Car & Classic</p>
                <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                    May 2019 - Present
                </p>
              </div>
            </div>
            <div class="block">
              <p class="mt-3 text-sm leading-6 text-gray-500">
                Back to my first love of coding.  Working on the old bespoke system, and along with the team modernising it into Laravel as well as intriducing new features - user account, auctions, taxonomy.
              </p>
            </div>
          </div>

          <div>        
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-20 w-20 rounded-full" src="/assets/images/experience/skiddle-logo.jpg" alt="Skiddle logo">
              </div>
              <div class="ml-6">
                <h3 class="my-0 text-xl leading-7 font-semibold text-gray-900">
                    Head of Development
                </h3>
                <p class="my-0">Skiddle</p>
                <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                    July 2011 - May 2019
                </p>
              </div>
            </div>
            <div class="block">
              <p class="mt-3 text-sm leading-6 text-gray-500">
                Started as lead developer working up to running the dept of 9. Oversaw the development of both websites and mobile apps.
              </p>
              <p class="mt-3 text-sm leading-6 text-gray-500">
                Gained my AgilePM certification whilst employed here, so introduced a more standard agile approach.
              </p>
            </div>
          </div>

          <div>        
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-20 w-20 rounded-full bg-white p-1" src="/assets/images/experience/iweb-logo.svg" alt="iWeb logo">
              </div>
              <div class="ml-6">
                <h3 class="my-0 text-xl leading-7 font-semibold text-gray-900">
                    PHP Developer
                </h3>
                <p class="my-0">iWeb</p>
                <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                    March 2007 - July 2011
                </p>
              </div>
            </div>
            <div class="block">
              <p class="mt-3 text-sm leading-6 text-gray-500">
                Worked on many bespoke eccomerce sites - mainly mp3 music stores.  Introduced Magento into the business. 
              </p>
            </div>
          </div>

          <div>        
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-20 w-20 rounded-full" src="/assets/images/experience/voodoo-logo.jpg" alt="Voodoo Agency logo">
              </div>
              <div class="ml-6">
                <h3 class="my-0 text-xl leading-7 font-semibold text-gray-900">
                    PHP Developer
                </h3>
                <p class="my-0">Voodoo Agency</p>
                <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
                    Sept 2004 - March 2007
                </p>
              </div>
            </div>
            <div class="block">
              <p class="mt-3 text-sm leading-6 text-gray-500">
                First job in web development.  Worked on many custom brouchure & eccomerce websites, which eventually led me to building custom online business apps. 
              </p>
            </div>
          </div>
        
        </div>
    </div>
</div>
<div role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6 mt-32">
    <h2 class="text-3xl leading-9 font-semibold text-gray-900 sm:text-4xl sm:leading-10">
        Certification &amp; Education
    </h2>

    <div class="w-full mb-8">
        <h3 class="text-xl leading-7 font-semibold text-gray-900  mt-0 mb-1">
            <a href="https://www.youracclaim.com/badges/65120bdc-caf8-489d-afda-acc640ad51a6/linked_in_profile" rel="nofollow" target="_blank">AgilePM® Practitioner</a>
        </h3>

        <p class="my-1">APMG International</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            July 2016
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h3 class="text-xl leading-7 font-semibold text-gray-900  mt-0 mb-1">
            <a href="https://www.youracclaim.com/badges/3b991978-a11e-45ee-b207-d3b7e4b0b3ca/linked_in_profile" rel="nofollow" target="_blank">AgilePM® Foundation</a>
        </h3>

        <p class="my-1">APMG International</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            July 2016
        </p>
    </div>

    <hr class="border-b my-8">

    <div class="w-full mb-8">
        <h3 class="text-xl leading-7 font-semibold text-gray-900  mt-0 mb-1">
            BSc Information System Design
        </h3>

        <p class="my-1">University of Central Lancashire</p>

        <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
            2001 - 2004
        </p>
    </div>
</div>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Martyn Taylor",
      "url": "https://www.martyntaylor.com/",
    }
    </script>

@stop
