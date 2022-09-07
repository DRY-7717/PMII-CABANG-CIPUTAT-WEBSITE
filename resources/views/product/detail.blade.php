@extends('template.main')



@section('section')
@include('partials.navsecond')
<section class="pt-36 pb-32">
    <div class="container mx-auto px-4 lg:px-16 lg:max-w-full">


        <div class="w-full px-4">

            <div class="flex w-full  mb-6">
                <div class="kotak w-[80px] h-[80px] md:w-[200px] md:h-[200px] bg-purple-500 rounded-[50%] overflow-hidden">
                    @if ($talent->image_produsen)
                    <img src="{{ asset('storage/'.$talent->image_produsen)}}" class="object-cover object-center w-full h-full " alt="">
                    @else
                    <img src="/img/cabang/3.png" class="object-cover object-center w-full h-full " alt="">
                    @endif
                </div>
                <div class="status-produsen">
                    <h1 class="ml-4 md:ml-6 mt-1 md:mt-6 mb-1 md:mb-3 text-first font-semibold text-xl md:text-4xl">{{ $talent->produsen }}</h1>
                    <h1 class="ml-4 md:ml-6 mt-1 text-first font-semibold text-xs md:text-3xl">{{ $talent->categoryproduct->name }} | {{ $talent->produsen }}</h1>
                </div>
            </div>
           
            <div class="card detail w-full ">
               
                <div class="card-body">
                    <article class="text-justify mb-5 text-base md:text-lg">
                        {!! $talent->body !!}
                    </article>
                    
                    
                    <div class="w-full pb-6">
                        <div class="flex flex-wrap  lg:gap-0 sm:gap-3 gap-6 ">
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh1)
                               <img src="{{ asset('storage/'.$talent->contoh1)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh2)
                               <img src="{{ asset('storage/'.$talent->contoh2)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh3)
                               <img src="{{ asset('storage/'.$talent->contoh3)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh4)
                               <img src="{{ asset('storage/'.$talent->contoh4)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh5)
                               <img src="{{ asset('storage/'.$talent->contoh5)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                            <div class="w-full lg:w-1/3  lg:p-3 md:p-0 p-0">
                               @if ($talent->contoh6)
                               <img src="{{ asset('storage/'.$talent->contoh6)}}" class="object-cover object-center w-full h-full " alt="">
                               @endif
                            </div>
                           
                            
                        </div>
                    </div>
                    <a href="/talent"
                        class=" px-7 py-2    rounded-md bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-800 active:ring-4 active:ring-blue-400">Back
                        to talents</a>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection