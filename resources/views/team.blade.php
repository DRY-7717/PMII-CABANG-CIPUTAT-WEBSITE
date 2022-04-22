@extends('template.main')


@section('section')
@include('partials.navsecond')

<section class="pt-36 pb-32 bg-slate-100">
    <div class="container mx-auto px-4">
        <h2 class="text-xl md:text-2xl uppercase lg:text-3xl lg:text-center text-slate-400 mb-6 font-semibold">Struktural</h2>
        <h1
            class="text-2xl md:text-3xl lg:text-4xl lg:text-center lg:mb-14 uppercase font-black text-first tracking-wide">
            <i class="fa-solid fa-network-wired mr-2"></i> PMII Cabang Ciputat</h1>

        {{-- Ketua Sekum bendum --}}
        <div class="ksb w-full mt-9">
            <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">KSB (Ketua Sekertaris Bendahara)</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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

        {{-- Bidang I --}}

        <div class="bidang-satu w-full mt-12">
            <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">Bidang I</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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

         {{-- Bidang II --}}

         <div class="bidang-satu w-full mt-12">
            <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">Bidang II</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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

         {{-- Bidang III --}}

         <div class="bidang-satu w-full mt-12">
            <h3 class="mb-3 mt-3 text-lg text-first font-semibold uppercase ">Bidang III</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                <div class="card-animate">
                    <div
                        class=" card rounded-lg w-full   overflow-hidden bg-white transition duration-300 ease-out shadow-lg hover:scale-90">
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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
                        <div class="card-header h-72 lg:h-56 overflow-hidden">
                            <img src="https://source.unsplash.com/500x500?people"
                                class="w-full h-full object-cover object-top hover:scale-125  duration-500 ease-in"
                                alt="">
                        </div>
                        <div class="card-body">
                            <div class="name-box w-full px-7 py-3 bg-first opacity-75 text-center">
                                <h3 class="text-white">Bima Arya Wicaksana</h3>
                            </div>

                            <div class="title w-full ">
                                <p class="mt-5 text-center text-first text-base italic mb-5">Ketua Umum</p>

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