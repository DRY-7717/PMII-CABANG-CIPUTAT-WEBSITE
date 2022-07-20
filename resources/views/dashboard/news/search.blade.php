@extends('template.main')


@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">
    <div class="container px-4 lg:max-w-full lg:px-16 mx-auto">

        <div class="w-full px-4 mb-4">
            <h1
                class="text-center mb-4 text-xl md:text-3xl lg:text-3xl lg:text-center lg:mb-7 uppercase font-black text-first tracking-wide">
                {{ $bigtitle }}</h1>
        </div>

        <div class="w-full px-4 mb-7 lg:mb-9 ">
            <form action="/news/searchpage" class="w-full">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
                @endif

                <div class="flex flex-wrap items-center justify-center w-full">


                    <div class="opsi  order-2  lg:order-1">
                        <select name="category" id=""
                            class=" shadow-md outline-none mx-2  border-2 py-3 px-3 rounded-lg mt-3 lg:mt-0">
                            <option value="">Pilih Category</option>
                            @foreach ($categories as $category)
                            @if (request('category') == $category->slug)
                            <option value="{{ $category->slug }}" selected>{{ $category->name }}</option>
                            @endif
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="opsi  order-2  lg:order-1">
                        <select name="user" id=""
                            class=" shadow-md outline-none mx-2  border-2 py-3 px-3 rounded-lg mt-3 lg:mt-0">
                            <option value="">Pilih User</option>
                            @foreach ($users as $user)
                            @if (request('user') == $user->username)
                            <option value="{{ $user->username }}" selected>{{ $user->name }}</option>
                            @endif
                            <option value="{{ $user->username }}">{{ $user->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="grup flex w-full  lg:w-1/3  mx-2 shadow-md rounded-lg order-1  lg:order-2">
                        <input type="text"
                            class="px-5 py-2 w-4/5 rounded-lg rounded-r-none outline-none border-2 focus:ring focus:ring-blue-500 focus:border-0"
                            placeholder="Search Program..." name="search" autocomplete="off"
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="text-white py-2 px-3 bg-first rounded-lg rounded-l-none w-2/5">Search</button>
                    </div>
                </div>

            </form>
        </div>



        @if ($news->count())
        <div class="w-full px-4 mb-20 lg:mb-28">
            <div class="card w-full p-6 rounded-xl  shadow-lg shadow-slate-300 overflow-hidden">
                @if ($news[0]->image)
                <img src="{{ asset('storage/'.$news[0]->image)}}" alt=""
                    class="rounded-xl mb-3 lg:h-96 lg:w-full object-cover  object-center">
                @else
                <img src="https://source.unsplash.com/1200x600?{{ $news[0]->categoryprogram->name }}" alt=""
                    class="rounded-xl mb-3 lg:h-80 lg:w-full object-cover  object-center">
                @endif
                <div class="card-body  py-4 lg:text-center">
                    <h1 class="text-lg md:text-2xl font-semibold text-first"><a href="/program/{{ $news[0]->slug }}">{{
                            $news[0]->title }}</a></h1>
                    <p class="text-xs md:text-sm text-blue-500 mb-3 mt-1">
                        <a href="/news/searchpage?user={{ $news[0]->user->username }}">{{ $news[0]->user->name }}</a>
                        |
                        <a href="/news/searchpage?category={{ $news[0]->categoryprogram->slug }}">{{
                            $news[0]->categoryprogram->name }}</a>

                        <span class="ml-1 text-second">({{ $news[0]->created_at->diffForHumans() }})</span>

                    </p>
                    <p class="text-justify text-base mb-6">{{ $news[0]->excerpt }}</p>

                    <a href="/news/{{ $news[0]->slug }}"
                        class="py-2 px-9 lg:px-12 lg:py-2 bg-blue-500 text-white rounded-md text-base">Readmore</a>
                </div>
            </div>
        </div>

        <div class="w-full px-4 ">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($news->skip(1) as $new)
                <div class="card p-6 rounded-lg shadow-xl shadow-slate-300  overflow-hidden">
                    <img src="https://source.unsplash.com/1200x600" alt="" class="w-full rounded-xl md:h-48">
                    <div class="card-body py-4 ">
                        <div class="card-body  py-4 ">
                            <h1 class="text-lg md:text-xl font-semibold text-first"><a href="/news/{{ $new->slug }}">{{
                                    $new->title }}</a></h1>
                            <p class="text-xs md:text-sm lg:text-xs text-blue-500 mb-3 mt-1">
                                <a href="/news?user={{ $new->user->username }}">{{ $new->user->name }}</a>
                                |
                                <a href="/news?category={{ $new->categoryprogram->slug }}">{{
                                    $new->categoryprogram->name }}</a>

                                <span class="ml-1 text-second">({{ $new->created_at->diffForHumans() }})</span>

                            </p>
                            <p class="text-justify text-base mb-6 ">{{ $new->excerpt }}</p>

                            <a href="/news/{{ $new->slug }}"
                                class="py-2 px-9   bg-blue-500 text-white rounded-md text-base">Readmore</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto">
                <img src="/img/notfound.svg" alt="not found" class="mb-12">

                <h1 class="text-center font-bold text-2xl lg:text-4xl ">News Not Found</h1>
            </div>
        </div>
        @endif

        <div class="w-full px-4 mt-12">
            {{ $news->links() }}
        </div>
    </div>
</section>
@endsection