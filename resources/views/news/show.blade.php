@extends('template.main')



@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">
    <div class="container mx-auto px-4 lg:px-16 lg:max-w-full">


        <div class="w-full px-4">
            <div class="card detail w-full ">
                <h1 class="text-2xl mb-1 text-first font-semibold md:text-3xl lg:text-4xl">{{ $news->title }}</h1>
                <p class="mb-6 text-sm text-blue-500"><a href="/news/searchpage?user={{ $news->user->username }}">{{
                        $news->user->name }}</a> | <a
                        href="/news/searchpage/?category={{ $news->categoryprogram->slug }}">{{
                        $news->categoryprogram->name }}</a></p>
                <div class="card-header mb-7 overflow-hidden rounded-lg h-96 md:h-56 lg:h-80">
                    @if ($news->image)
                    <img src="{{ asset('storage/'.$news->image) }}" alt=""
                        class="w-full h-full object-cover object-center">
                    @else
                    <img src="https://source.unsplash.com/1024x600?{{ $news->categoryprogram->name }}" alt=""
                        class="w-full h-full object-cover object-center">
                    @endif
                </div>
                <div class="card-body">
                    <article class="text-justify mb-5 text-base md:text-lg">
                        {!! $news->body !!}

                    </article>

                    <a href="/news"
                        class=" px-7 py-2   rounded-md bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-800 active:ring-4 active:ring-blue-400">Back
                        to all news</a>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection