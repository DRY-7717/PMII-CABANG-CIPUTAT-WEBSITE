@extends('template.main')


@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">


    <div class="container px-4 mx-auto lg:px-16 lg:max-w-full">
        <h1
            class="text-xl text-center md:text-3xl lg:text-3xl lg:text-center lg:mb-7 uppercase font-black text-first tracking-wide mb-4">
            All News</h1>

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
                            placeholder="Search News..." name="search" autocomplete="off"
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="text-white py-2 px-3 bg-first rounded-lg rounded-l-none w-2/5">Search</button>
                    </div>
                </div>

            </form>
        </div>

        @if ($news->count())
        <div class="w-full p-4 rounded-xl  shadow-xl shadow-slate-300 border mt-5 mb-14 lg:mb-28 ">
            <div class="grid w-full gap-4 lg:grid-cols-2">
                <div class="hero1 rounded-xl overflow-auto bg-slate-500 relative h-96 md:h-fit lg:h-full">
                    @if ($news[3]->image)
                    <img src="{{ asset('storage/' . $news[3]->image) }}" alt="{{ $news[3]->categoryprogram->name }}"
                        class="w-full h-full object-cover object-center mix-blend-multiply">
                    @else
                    <img src="https://source.unsplash.com/1200x800" alt="{{ $news[3]->categoryprogram->name }}"
                        class="w-full h-full object-cover object-center mix-blend-multiply">
                    @endif
                    <div class="desc absolute bottom-4 p-5 text-white">
                        <h1 class="mb-3 text-2xl font-semibold">{{ $news[3]->title }}</h1>
                        <p class="text-lg">{{ $news[3]->excerpt }}</p>
                        <a href="/news/{{ $news[3]->slug }}" class="hover:text-blue-500">Readmore</a>
                    </div>
                </div>

                <div class="hero1 rounded-xl">

                    <div class="card md:flex lg:flex mb-6">
                        @if ($news[4]->image)
                        <img src="{{ asset('storage/'.$news[4]->image) }}" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                        @else
                        <img src="https://source.unsplash.com/500x500" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">

                        @endif
                        <div class="card-body mt-3 lg:mt-0">
                            <h1 class="text-second text-lg font-semibold   mb-1 hover:text-blue-500"><a
                                    href="/news/{{ $news[4]->slug }}">{{ $news[4]->title }}</a></h1>
                            <p>{{ $news[4]->excerpt }}</p>
                        </div>
                    </div>
                    <div class="card md:flex lg:flex mb-6">
                        @if ($news[5]->image)
                        <img src="{{ asset('storage/'.$news[5]->image) }}" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                        @else
                        <img src="https://source.unsplash.com/500x500" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">

                        @endif
                        <div class="card-body mt-3 lg:mt-0">
                            <h1 class="text-second text-lg font-semibold   mb-1 hover:text-blue-500"><a
                                    href="/news/{{ $news[5]->slug }}">{{ $news[5]->title }}</a></h1>
                            <p>{{ $news[5]->excerpt }}</p>
                        </div>
                    </div>
                    <div class="card md:flex lg:flex">
                        @if ($news[6]->image)
                        <img src="{{ asset('storage/'.$news[6]->image) }}" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                        @else
                        <img src="https://source.unsplash.com/500x500" alt=""
                            class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                        @endif
                        <div class="card-body mt-3 lg:mt-0">
                            <h1 class="text-second text-lg font-semibold mb-1 hover:text-blue-500"><a
                                    href="/news/{{ $news[6]->slug }}">{{ $news[6]->title }}</a></h1>
                            <p>{{ $news[6]->excerpt }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-wrap justify-between">
            <div
                class="w-full p-5 lg:p-7 rounded-xl shadow-xl shadow-slate-300 border mt-5 lg:w-[62%] order-2 lg:order-1">
                <h3 class="text-xl font-semibold mb-4 text-first">All Posts</h3>

                <div class="grid lg:grid-cols-2 gap-5">
                    @foreach ($news->skip(7) as $new)
                    <div class="card p-6 rounded-lg shadow-xl shadow-slate-300  overflow-hidden relative">
                        @if ($new->image)
                        <img src="{{ asset('storage/'.$news->image) }}" alt=""
                            class="w-full rounded-xl md:h-64 lg:h-44 object-cover object-center">
                        @else
                        <img src="https://source.unsplash.com/1200x600" alt=""
                            class="w-full rounded-xl md:h-64 lg:h-44 object-cover object-center">
                        @endif
                        <div class="card-body py-4 ">
                            <div class="card-body  py-4 ">
                                <h1 class="text-lg md:text-xl font-semibold text-first"><a
                                        href="/news/{{ $new->slug }}">{{
                                        $new->title }}</a></h1>
                                <p class="text-xs md:text-sm lg:text-xs text-blue-500 mb-3 mt-1">
                                    <a href="/news/searchpage?user={{ $new->user->username }}">{{ $new->user->name
                                        }}</a>
                                    |
                                    <a href="/news/searchpage?category={{ $new->categoryprogram->slug }}">{{
                                        $new->categoryprogram->name }}</a>

                                    <span class="ml-1 text-second">({{ $new->created_at->diffForHumans() }})</span>

                                </p>
                                <p class="text-justify text-base mb-6 ">{{ $new->excerpt }}</p>

                               
                            </div>
                        </div>
                        <a href="/news/{{ $new->slug }}"
                            class="py-2 px-9   bg-blue-500 text-white rounded-md text-base absolute bottom-4 left-5">Readmore</a>
                    </div>
                    @endforeach

                </div>

                <div class="w-full px-4 mt-12">
                    {{ $news->links() }}
                </div>
            </div>

            <div
                class="lg:sticky lg:top-28  lg:h-fit w-full p-5 lg:p-7 rounded-xl shadow-xl shadow-slate-300 border mt-5 lg:w-1/3 order-1 lg:order-2 mb-16 lg:mb-0">
                <h3 class="text-lg font-semibold mb-4 text-first">News Update</h3>

                <div class="card md:flex lg:flex mb-6">
                    @if ($news[0]->image)
                    <img src="{{ asset('storage/'.$news[0]->image) }}" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                    @else
                    <img src="https://source.unsplash.com/500x500" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">

                    @endif
                    <div class="card-body mt-3 lg:mt-0">
                        <h1 class="text-second text-lg mb-1 font-semibold hover:text-blue-500"><a
                                href="/news/{{ $news[0]->slug }}">{{ $news[0]->title }}</a></h1>
                        <p class="text-sm lg:hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,
                            reiciendis.</p>
                    </div>
                </div>
                <div class="card md:flex lg:flex mb-6">
                    @if ($news[1]->image)
                    <img src="{{ asset('storage/'.$news[1]->image) }}" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                    @else
                    <img src="https://source.unsplash.com/500x500" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">

                    @endif
                    <div class="card-body mt-3 lg:mt-0">
                        <h1 class="text-second text-lg mb-1 font-semibold hover:text-blue-500"><a
                                href="/news/{{ $news[1]->slug }}">{{ $news[1]->title }}</a></h1>
                        <p class="text-sm lg:hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,
                            reiciendis.</p>
                    </div>
                </div>
                <div class="card md:flex lg:flex mb-3">
                    @if ($news[2]->image)
                    <img src="{{ asset('storage/'.$news[2]->image) }}" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">
                    @else
                    <img src="https://source.unsplash.com/500x500" alt=""
                        class="w-full md:w-32 md:h-full lg:w-32 h-28 lg:h-full rounded-xl mr-3 object-cover object-center">

                    @endif
                    <div class="card-body mt-3 lg:mt-0">
                        <h1 class="text-second text-lg mb-1 font-semibold hover:text-blue-500"><a
                                href="/news/{{ $news[2]->slug }}">{{ $news[2]->title }}</a></h1>
                        <p class="text-sm lg:hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,
                            reiciendis.</p>
                    </div>
                </div>

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

    </div>


</section>
@endsection