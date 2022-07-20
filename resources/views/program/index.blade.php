@extends('template.main')


@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">
    <div class="container px-4 lg:max-w-full lg:px-16 mx-auto">

        <div class="w-full px-4 mb-4">
            <h1
                class="text-xl text-center mb-4 md:text-3xl lg:text-3xl lg:text-center lg:mb-7 uppercase font-black text-first tracking-wide">
                {{ $bigtitle }}</h1>
        </div>

        <div class="w-full px-4 mb-7 lg:mb-9 ">
            <form action="/programs" class="w-full">
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
                            @else
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endif
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
                            @else
                            <option value="{{ $user->username }}">{{ $user->name }}</option>
                            @endif
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



        @if ($programs->count())
        <div class="w-full px-4 mb-20 lg:mb-28">
            <div class="card w-full p-6 rounded-xl  shadow-lg shadow-slate-300 overflow-hidden">
                @if ($programs[0]->image)
                <img src="{{ asset('storage/'.$programs[0]->image)}}" alt=""
                    class="rounded-xl mb-3 lg:h-96 lg:w-full object-cover  object-center">
                @else
                <img src="https://source.unsplash.com/1200x600?{{ $programs[0]->categoryprogram->name }}" alt=""
                    class="rounded-xl mb-3 lg:h-80 lg:w-full object-cover  object-center">
                @endif
                <div class="card-body  py-4 lg:text-center">
                    <h1 class="text-lg md:text-2xl font-semibold text-first"><a
                            href="/program/{{ $programs[0]->slug }}">{{
                            $programs[0]->title }}</a></h1>
                    <p class="text-xs md:text-sm text-blue-500 mb-3 mt-1">
                        <a href="/programs?user={{ $programs[0]->user->username }}">{{ $programs[0]->user->name }}</a>
                        |
                        <a href="/programs?category={{ $programs[0]->categoryprogram->slug }}">{{
                            $programs[0]->categoryprogram->name }}</a>

                        <span class="ml-1 text-second">({{ $programs[0]->created_at->diffForHumans() }})</span>

                    </p>
                    <p class="text-justify text-base mb-6">{{ $programs[0]->excerpt }}</p>

                    <a href="/program/{{ $programs[0]->slug }}"
                        class="py-2 px-9 lg:px-12 lg:py-2 bg-blue-500 text-white rounded-md text-base">Readmore</a>
                </div>
            </div>
        </div>

        <div class="w-full px-4 ">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($programs->skip(1) as $program)
                <div class="card p-6 rounded-lg shadow-xl shadow-slate-300  overflow-hidden relative">
                    @if ($program->image)
                    <img src="{{ asset('storage/'.$program->image)}}" alt=""
                        class="rounded-xl mb-3 lg:h-60 lg:w-full object-cover  object-center">
                    @else
                    <img src="https://source.unsplash.com/1200x600?{{ $program->categoryprogram->name }}" alt=""
                        class="rounded-xl mb-3 lg:h-60 lg:w-full object-cover  object-center">
                    @endif
                    <div class="card-body py-4 ">
                        <div class="card-body  py-4 ">
                            <h1 class="text-lg md:text-xl font-semibold text-first"><a
                                    href="/program/{{ $program->slug }}">{{
                                    $program->title }}</a></h1>
                            <p class="text-xs md:text-sm lg:text-xs text-blue-500 mb-3 mt-1">
                                <a href="/programs?user={{ $program->user->username }}">{{ $program->user->name }}</a>
                                |
                                <a href="/programs?category={{ $program->categoryprogram->slug }}">{{
                                    $program->categoryprogram->name }}</a>

                                <span class="ml-1 text-second">({{ $program->created_at->diffForHumans() }})</span>

                            </p>
                            <p class="text-justify text-base mb-6 ">{{ $program->excerpt }}</p>


                        </div>
                    </div>
                    <a href="/program/{{ $program->slug }}"
                        class="py-2 px-9   bg-blue-500 text-white rounded-md text-base absolute bottom-4 left-5">Readmore</a>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto">
                <img src="/img/notfound.svg" alt="not found" class="mb-12">

                <h1 class="text-center font-bold text-2xl lg:text-4xl ">Program Not Found</h1>
            </div>
        </div>
        @endif

        <div class="w-full px-4 mt-12">
            {{ $programs->links() }}
        </div>
    </div>
</section>
@endsection