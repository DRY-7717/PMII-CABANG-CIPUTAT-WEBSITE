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
            <form action="/mails" class="w-full">
                @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
                @endif

                <div class="flex flex-wrap items-center justify-center w-full">


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
                            placeholder="Search Awards..." name="search" autocomplete="off"
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="text-white py-2 px-3 bg-first rounded-lg rounded-l-none w-2/5">Search</button>
                    </div>
                </div>

            </form>
        </div>



        @if ($mails->count())


        <div class="w-full px-4 ">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($mails as $mail)
                <div
                    class="card   shadow-xl shadow-slate-300  overflow-hidden relative rounded-lg border-t-4 border-first">

                    <div class="card-body py-4 ">
                        <div class="card-body  py-2 px-6 ">
                            <h1 class="text-lg md:text-xl font-semibold text-first"><a
                                    href="/mails/{{ $mail->slug }}"><i class="fas fa-envelope mr-2"></i>{{
                                    $mail->title }}</a></h1>
                            <p class="text-xs md:text-sm lg:text-xs text-blue-500 mb-3 mt-1">
                                <a href="/mails?user={{ $mail->user->username }}">{{ $mail->user->name }}</a>

                                <span class="ml-1 text-second">({{ $mail->created_at->diffForHumans() }})</span>

                            </p>
                            <p class="text-justify text-base mb-2 ">{{ $mail->excerpt }}</p>
                            <p class="text-justify text-base mb-12 font-bold">Description : {{ $mail->description }}</p>



                        </div>
                    </div>
                    <a href="/mails/{{ $mail->slug }}"
                        class="py-1 px-9   bg-blue-500 text-white rounded-md text-base absolute bottom-4 left-5">Readmore</a>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto">
                <img src="/img/notfound.svg" alt="not found" class="mb-12">

                <h1 class="text-center font-bold text-2xl lg:text-4xl ">Mails Not Found</h1>
            </div>
        </div>
        @endif

        <div class="w-full px-4 mt-12">
            {{ $mails->links() }}
        </div>
    </div>
</section>
@endsection