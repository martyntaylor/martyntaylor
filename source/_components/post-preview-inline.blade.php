<div class="w-full mb-8">
    <p class="text-gray-500 text-xs uppercase tracking-wider my-0">
        {{ $post->getDate()->format('jS F Y') }}
    </p>

    <h2 class="text-3xl mt-0 mb-1">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 font-semibold"
        >{{ $post->title }}</a>
    </h2>
    @if ($post->categories)
        @foreach ($post->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-brand-red leading-loose tracking-wide text-white hover:text-white uppercase text-xs rounded mr-4 px-2 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <p class="my-4">{!! $post->getExcerpt() !!}</p>

</div>
