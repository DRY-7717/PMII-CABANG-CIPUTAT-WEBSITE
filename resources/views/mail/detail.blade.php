@extends('template.main')



@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">
    <div class="container mx-auto px-4 lg:px-16 lg:max-w-full">


        <div class="w-full px-4">
            <div class="card detail w-full ">
                <h1 class="text-2xl mb-1 text-first font-semibold md:text-3xl lg:text-4xl text-center">{{ $mail->title }}</h1>
                <p class="mb-6 text-sm text-blue-500 text-center"><span class="text-second">By </span><a href="/mails?user={{ $mail->user->username }}">{{
                        $mail->user->name }}</a></p>
                <div class="card-body">
                    <article class="text-justify mb-5 text-base md:text-lg">
                        {!! $mail->body !!}

                        <p>Surat perizinan : <a href="/mail/secretary/download/{{ $mail->slug }}">Bukti Surat</a></p>
                        <p>Description : {{ $mail->description }}</p>
                    </article>

                    <a href="/mails"
                        class=" px-7 py-2   rounded-md bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-800 active:ring-4 active:ring-blue-400">Back
                        to Mails</a>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection