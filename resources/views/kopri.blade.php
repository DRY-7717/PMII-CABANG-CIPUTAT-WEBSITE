@extends('template.main')


@section('section')
@include('partials.navsecond')
<section class="pt-48   bg-first ">
    <div class="container px-4 lg:max-w-full lg:px-16 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:mx-auto  px-4 text-white  mb-14 self-center lg:mb-0 lg:w-1/2 " data-aos="zoom-in"
                data-aos-duration="2500">
                <h2 class="text-xl mb-2 font-semibold text-secondary md:text-3xl lg:text-3xl sm:text-2xl">Hello 👋,
                    <span class="text-white">welcome to
                        :</span>
                </h2>
                <h1 class=" sm:text-4xl md:text-6xl text-4xl lg:text-5xl font-black mb-3  ">KOPRI CABANG <span
                        class="text-secondary">CIPUTAT</span></h1>
                <p class="font-semibold text-lg sm:text-xl md:text-2xl lg:text-3xl mb-2">Don't forget to : <span
                        class="text-secondary" id="slogan"></span></p>
                <p class="text-base font-light  mb-7 sm:text-xl md:text-2xl lg:text-2xl lg:tracking-wide italic ">We are
                    the female Indonesian Islamic Student Movement corps
                </p>

                <a href="#about"
                    class="px-10 py-2  rounded-full transition bg-secondary text-white hover:bg-yellow-500 active:ring active:ring-yellow-200 mt-2 md:px-11 md:py-2 md:text-lg lg:px-11 lg:py-3 lg:text-lg">Let's
                    Go</a>
            </div>

            <div class="w-full lg:mx-auto  px-4 text-white  mb-14 self-center lg:mb-0 lg:w-1/2 " data-aos="zoom-in"
                data-aos-duration="2500">
                <div class="swiper rounded-xl ">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper -z-50">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="https://source.unsplash.com/1200x700?animal" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="https://source.unsplash.com/1200x700?car" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="https://source.unsplash.com/1200x700?people" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="https://source.unsplash.com/1200x700?art" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="https://source.unsplash.com/1200x700?design" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,32L120,53.3C240,75,480,117,720,117.3C960,117,1200,75,1320,53.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>
</section>

<section class="pt-10 ">
    <div class="container px-4   lg:max-w-full  lg:px-16  mx-auto">
        <div
            class="slogan-box w-full lg:bg-slate-200 lg:rounded-full   flex flex-wrap justify-evenly items-center rounded-md " data-aos="zoom-in" data-aos-duration="1000">

            <div class="slogan w-full max-w-4xl p-3  lg:w-1/3 md:w-1/3">
                <div class="flex  items-center lg:justify-center bg-slate-200 lg:bg-inherit p-2  rounded-md">
                    <img src="https://source.unsplash.com/80x80" alt="" class="rounded-md">
                    <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                </div>
            </div>

            <div class="slogan w-full max-w-4xl p-3  lg:w-1/3 md:w-1/3">
                <div class="flex items-center lg:justify-center bg-slate-200 lg:bg-inherit p-2  rounded-md">
                    <img src="https://source.unsplash.com/80x80" alt="" class="rounded-md">
                    <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                </div>
            </div>
            <div class="slogan w-full max-w-4xl p-3  lg:w-1/3 md:w-1/3">
                <div class="flex items-center lg:justify-center bg-slate-200 lg:bg-inherit p-2  rounded-md">
                    <img src="https://source.unsplash.com/80x80" alt="" class="rounded-md">
                    <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1e40af" fill-opacity="1"
            d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,122.7C672,117,768,171,864,197.3C960,224,1056,224,1152,213.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>

<section class="pt-36  bg-first bg-[url('/img/circle.svg')] bg-cover bg-no-repeat">
    <div class="container w-full px-4 lg:max-w-full lg:px-16 mx-auto ">
        <div class="row w-full px-4 mb-3" data-aos="fade-down" data-aos-duration="500">
            <h1 class="text-secondary font-bold text-2xl md:text-3xl lg:text-5xl">About Us</h1>
        </div>

        <div class="flex flex-wrap">
            <div class="column-1 w-full  sm:w-full md:w-full  px-4 lg:w-1/2">
                <div class="row w-full flex flex-wrap">
                    <div class="column-1 lg:px-3 lg:w-1/2 " data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">
                        <p class="text-white text-justify md:text-md lg:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Dolorum voluptatem consequatur nihil consequuntur nemo omnis saepe unde.
                            Veritatis, et tempora!</p>
                    </div>
                    <div class="column-2 lg:w-1/2 lg:px-3" data-aos="fade-right" data-aos-duration="500" data-aos-delay="700">
                        <p class="text-white text-justify md:text-md lg:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Dolorum voluptatem consequatur nihil consequuntur nemo omnis saepe unde.
                            Veritatis, et tempora!</p>
                    </div>
                </div>

                <div class="row image-about mt-7 lg:px-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <div
                        class="aboutImage w-full bg-white h-[500px] rounded-tr-[100px] rounded-bl-[100px] overflow-hidden">
                        <img src="https://source.unsplash.com/1200x1500?people" class="object-cover object-center"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="column-2 w-full  sm:w-full md:w-full   px-4 lg:w-1/2 ">
                <div class="row w-full px-4 mb-3 mt-5 sm:mt-5 md:mt-5 lg:mt-0 ">
                    <h1 class="text-secondary font-bold text-2xl md:text-3xl lg:text-4xl"  data-aos="fade-right" data-aos-duration="500" data-aos-delay="900">MISI</h1>
                    <h3 class="text-white text-lg md:text-xl lg:text-2xl font-semibold mt-2 text-justify" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1100">Lorem ipsum
                        dolor sit, amet
                        consectetur adipisicing elit. Atque consectetur quasi aspernatur possimus deleniti porro non
                        quas at iste vitae ratione libero, aliquid exercitationem sapiente ut molestiae culpa quisquam?
                        Ea.</h3>
                </div>

                <div class="row w-full px-4 mb-3  mt-11 ">
                    <h1 class="text-secondary font-bold text-2xl md:text-3xl lg:text-4xl" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500">VISI</h1>
                    <h3 class="text-white text-lg md:text-xl lg:text-2xl  mt-2 text-justify mb-7" data-aos="fade-right" data-aos-duration="500" data-aos-delay="900">Adapun beberapa visi
                        kami untuk mencapai misi kami adalah :</h3>

                    <div class="flex flex-wrap  w-full justify-center ">
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-1/2 mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-md">
                                <h3 class="text-first font-semibold ml-2">Bima Arya Wicaksana</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,224L48,240C96,256,192,288,288,266.7C384,245,480,171,576,160C672,149,768,203,864,213.3C960,224,1056,192,1152,197.3C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>

<section class="pt-36 pb-32 ">
    <div class="container w-full  mx-auto lg:max-w-full   lg:px-16">

        <h1 class="text-first text-2xl md:text-3xl lg:text-5xl text-center font-bold mb-11" data-aos="fade-down" data-aos-duration="500">Address</h1>

        <div class="flex flex-wrap ">
            <div class="w-full px-4 lg:w-1/2" data-aos="fade-up" data-aos-duration="500">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.648513854335!2d106.75358771744385!3d-6.3098225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efdafd223f91%3A0x6dd7b9d70a16b6ec!2sPMII%20Cabang%20Ciputat!5e0!3m2!1sen!2sid!4v1658175624684!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-72"></iframe>
            </div>
            <div class="w-full px-4 lg:w-1/2" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                <h2 class="text-xl font-medium mt-4 sm:mt-4 md:mt-4 lg:mt-0">Silahkan yang ingin berkung silaturahim
                    langsung ke alamat ini :</h2>
                <p class="italic mt-2 text-lg text-first  ">"Jl. Ibnu Sina I, Pisangan, Kec. Ciputat Tim., Kota
                    Tangerang Selatan, Banten 15419"</p>
                <p class="text-base">Atau bisa langsung klik gmaps di samping atau di atas.</p>
            </div>
        </div>
    </div>
</section>
@endsection