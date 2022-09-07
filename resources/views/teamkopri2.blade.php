@extends('template.main')


@section('section')
@include('partials.navsecond')

<section class="pt-36 pb-32 bg-slate-100">
    <div class="container mx-auto px-4">
        <h2 class="text-xl md:text-2xl uppercase lg:text-3xl lg:text-center text-slate-400 mb-6 font-semibold">
            Struktural</h2>
        <h1
            class="text-2xl md:text-3xl lg:text-4xl lg:text-center lg:mb-14 uppercase font-black text-first tracking-wide">
            <i class="fa-solid fa-network-wired mr-2"></i> KOPRI PC PMII Ciputat
        </h1>

        {{-- Ketua Sekum bendum --}}
        <div class="ksb w-full mt-9">
            {{-- <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">KSB (Ketua Sekertaris Bendahara)</h3>
            --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/4.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Dewi Fajri</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/5.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Elda Aini</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Sekertaris</p>

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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/3.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Ardha Putri Septiana</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/9.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Nurmaliah</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/1.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Adissa Vintha</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/6.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Ella Nurlaili</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/2.JPG"
                                class="w-full  h-full lg:h-[400px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Alfiana Lufanza</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/7.JPG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Dyah Damayanti</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/10.JPEG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Wichdia Auni Alfafa</h3>
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
                        <div class="card-header h-96 lg:h-64 overflow-hidden">
                            <img src="/img/kopri/11.JPEG"
                                class="w-full  h-full lg:h-[380px] object-cover object-top md:object-top lg:object-center hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Yuni Ngindana Zulfa</h3>
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

        

    </div>




</section>
@endsection