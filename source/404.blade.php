@extends('_layouts.master')

@section('body')
    <div class="flex flex-col items-center text-gray-700 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            You seem to have landed on a page that does not exist!
        </p>
        <p>Return to <a href="/">home</a>, or <a href="/blog">blog</a>.</p>
    </div>
@endsection
