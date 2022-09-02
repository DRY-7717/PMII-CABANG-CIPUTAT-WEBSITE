@extends('template.main')


@section('section')
@include('partials.navsecond')

<section class="pt-36 pb-32 bg-slate-100">
    <div class="container mx-auto px-4">
        <h2 class="text-xl md:text-2xl uppercase lg:text-3xl lg:text-center text-slate-400 mb-6 font-semibold">
            Struktural</h2>
        <h1
            class="text-2xl md:text-3xl lg:text-4xl lg:text-center lg:mb-14 uppercase font-black text-first tracking-wide">
            <i class="fa-solid fa-network-wired mr-2"></i> PMII Cabang Ciputat
        </h1>

        {{-- Ketua Sekum bendum --}}
        <div class="ksb w-full mt-9">
            {{-- <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">KSB (Ketua Sekertaris Bendahara)</h3>
            --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/8.png"
                                class="w-full  h-full lg:h-[370px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Ahmad Mishbahul Munir</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/6.png"
                                class="w-full h-full lg:h-[280px] object-cover object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Annisa Alyssia Kamil</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Sekretaris</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/5.png"
                                class="w-full h-full lg:h-[280px] object-cover object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Muhammad Naufal </h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Bendahara</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/7.png"
                                class="w-full h-full lg:h-[320px] object-cover object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Muhammad Ikum</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Bendahara</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/9.png"
                                class="w-full h-full lg:h-[280px] object-cover object-top scale-110 hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Khairul Umam</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Ketua 1</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/1.png"
                                class="w-full h-full lg:h-[280px] object-cover object-center  hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Muchtar Effendi</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Sekertaris 1</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/2.png"
                                class="w-full h-full lg:h-[350px] object-cover object-center  hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Muhammad Ikhsan</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Ketua 2</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/3.png"
                                class="w-full h-full lg:h-[350px] object-cover object-center  hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Rendro Prastyan Winanta</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Sekertaris 2</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/4.png"
                                class="w-full h-full lg:h-[280px] object-cover object-center  hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Ahmad Tobroni</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Ketua 3</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-[400px] lg:h-64 overflow-hidden">
                            <img src="/img/cabang/10.png"
                                class="w-full h-full lg:h-[280px] object-cover object-center  hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Khadijah Kartini</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Wakil Sekertaris 3</p>

                                <div class="flex justify-center gap-2 mb-6">
                                    {{-- facebook --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </div>

                                    {{-- instagram --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>

                                    {{-- twitter --}}
                                    <div
                                        class="sosmed  h-8 w-8 flex justify-center items-center rounded-full border border-first group hover:bg-first">
                                        <a href="#" class="group-hover:text-white text-first"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        >

    </div>




</section>
@endsection