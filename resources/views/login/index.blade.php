@extends('template.login')


@include('partials.navsecond')
@section('section')
<section class="pt-36 pb-20">
    <div class="container mx-auto px-4 lg:px-16 lg:max-w-full">
        <div class="w-full px-4 mb-10">
            <div class="logo h-28 w-28 rounded-full bg-white shadow-lg shadow-slate-200  mx-auto p-2">
                <img src="/img/pmii.png" alt="" class="mb-3">

            </div>
            <h3 class="text-lg text-center mt-4 font-semibold">PMII CABANG CIPUTAT</h3>
        </div>
        <div class="w-full px-4">
            @if (session('message'))
            <div class="flash w-full p-5 rounded-lg mb-3 mx-auto lg:w-1/3 md:max-w-xl bg-red-300 text-red-600">
                {{ session('message') }}
            </div>
            @endif
            @if (session('success'))
            <div class="flash w-full p-5 rounded-lg mb-3 mx-auto lg:w-1/3 md:max-w-xl bg-green-300 text-green-600">
                {{ session('success') }}
            </div>
            @endif
            <div
                class="p-6 rounded-lg shadow-lg shadow-slate-300 border-2 border-t-4 border-t-first   mx-auto lg:w-1/3 md:max-w-xl">


                <form action="/login" method="post">
                    @csrf
                    <div class="w-full mb-7">
                        <h1 class="text-center font-semibold text-lg">Login</h1>
                    </div>
                    <div class="w-full  mb-7">
                        <label for="username" class="">Username</label>
                        <input type="text" id="username"
                            class="w-full px-4 py-2 rounded-lg shadow-md mt-2 focus:outline-none focus:ring focus:ring-cyan-500 bg-slate-100 invalid:text-red-400 @error('username') invalid:focus:ring-red-400 @enderror  peer"
                            autocomplete="off" name="username" value="{{ old('username') }}">

                        @error('username')
                        <p class="text-sm text-red-600 mt-2 ">{{ $message  }}</p>
                        @enderror

                    </div>
                    <div class="w-full  mb-9">
                        <label for="password" class="  ">Password</label>
                        <input type="password" id="password"
                            class="w-full px-4 py-2 rounded-lg shadow-md mt-2 focus:outline-none focus:ring focus:ring-cyan-500 bg-slate-100 @error('password') invalid:focus:ring-red-400 @enderror"
                            autocomplete="off" name="password">
                        @error('password')
                        <p class="text-sm text-red-600 mt-2 ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full  mt-7 mb-4">
                        <button type="submit" class="px-4 py-2 bg-first w-full rounded-lg text-white">Submit</button>
                    </div>
                        <a href="/" class="block text-center text-sm mb-1 text-blue-600">Back to Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection