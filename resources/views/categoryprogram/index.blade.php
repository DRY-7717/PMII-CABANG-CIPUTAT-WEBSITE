@extends('template.main')


@section('section')
@include('partials.navsecond')


<section class="pt-36 pb-32">
    <div class="container mx-auto px-4 lg:px-16 lg:max-w-full">
        <div class="w-full px-4 mb-12">
            <h2 class="text-lg font-semibold text-slate-400 uppercase mb-6 lg:text-center lg:text-xl">{{ $littletittle
                }}</h2>
            <h1
                class="text-xl md:text-3xl lg:text-4xl lg:text-center lg:mb-14 uppercase font-black text-first tracking-wide">
                {{ $bigtitle }}</h1>
        </div>

        @if ($programs->count())
        <div class="w-full px-4 mb-20 lg:mb-28">
            <div class="card w-full p-6 rounded-xl  shadow-lg shadow-slate-300 overflow-hidden">
                <img src="https://source.unsplash.com/1200x600?people" alt=""
                    class="rounded-xl mb-3 lg:h-80 lg:w-full object-cover  object-center">
                <div class="card-body  py-4 lg:text-center">
                    <h1 class="text-lg md:text-2xl font-semibold text-first "><a
                            href="/program/{{ $programs[0]->slug }}">{{
                            $programs[0]->title }}</a></h1>
                    <p class="text-xs md:text-sm text-blue-500 mb-3 mt-1">
                        <a href="/users/{{ $programs[0]->user->username }}">{{ $programs[0]->user->name }}</a>
                        |
                        <a href="/categorieprograms/{{ $programs[0]->categoryprogram->slug }}">{{
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
                <div class="card p-6 rounded-lg shadow-xl shadow-slate-300  overflow-hidden">
                    @if ($program->image)
                    <img src="{{ asset('storage/'.$program->image) }}" alt="" class="w-full rounded-xl md:h-48">
                    @else
                    <img src="https://source.unsplash.com/1200x600" alt="" class="w-full rounded-xl md:h-48">
                    @endif
                    <div class="card-body py-4 ">
                        <div class="card-body  py-4 ">
                            <h1 class="text-lg md:text-xl font-semibold text-first"><a
                                    href="/program/{{ $program->slug }}">{{
                                    $program->title }}</a></h1>
                            <p class="text-xs md:text-sm lg:text-xs text-blue-500 mb-3 mt-1">
                                <a href="/users/{{ $program->user->username }}">{{ $program->user->name }}</a>
                                |
                                <a href="/categorieprograms/{{ $program->categoryprogram->slug }}">{{
                                    $program->categoryprogram->name }}</a>

                                <span class="ml-1 text-second">({{ $program->created_at->diffForHumans() }})</span>

                            </p>
                            <p class="text-justify text-base mb-6 ">{{ $program->excerpt }}</p>

                            <a href="/program/{{ $program->slug }}"
                                class="py-2 px-9   bg-blue-500 text-white rounded-md text-base">Readmore</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        @endif

    </div>
</section>
@endsection