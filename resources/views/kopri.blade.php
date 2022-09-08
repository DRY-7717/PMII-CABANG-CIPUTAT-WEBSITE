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
                        <div class="swiper-slide"><img src="/img/k1.JPG" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="/IMG/K2.JPG" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="/img/k3.JPG" alt=""
                                class="w-full h-full object-cover object-center">
                        </div>
                        <div class="swiper-slide"><img src="/img/k4.JPG" alt=""
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

<section class="">
    <h1 class="text-6xl text-first text-center font-semibold mb-8" data-aos="fade-down" data-aos-duration="500">Gender</h1>
    <div class="container px-4   lg:max-w-full  lg:px-16  mx-auto mb-28" >
        <div class="gender-box w-full    flex flex-wrap justify-evenly items-center ">

            <div class="card-gender lg:w-1/2 p-2 text-justify "  data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">
                <div class="content-gender p-6 rounded-xl shadow-lg ring-2 ring-slate-100">
                  Gender merupakan pandangan yang diyakini masyarakat tentang bagaimana seharusnya perempuan dan laki-laki bertingkah laku atay berfikir
                </div>
            </div>
            <div class="card-gender lg:w-1/2 p-2 text-justify " data-aos="fade-left" data-aos-duration="500" data-aos-delay="300">
                <div class="content-gender p-6 rounded-xl shadow-lg ring-2 ring-slate-100">
                   Gender adalah perbedaan peran, fungsi dan tanggung jawab antara laki-laki dan perempuan yang merupakan hasil kontruksi sosial dan dapat berubah sesuai perkembangan zaman
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
                <div class="row w-full">
                    <div class="column-1  lg:w-full " data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">
                        <p class="text-white text-justify md:text-md lg:text-xl">Korps Pergerakan Mahasiswa Islam Indonesia Putri (KOPRI) merupakan lembaga perempuan yang berada dalam tubuh PMII. Kopri menjadi bagian aset "pemberdayaan perempuan di PMII". Bersifat Independen dan mempunyai Garis koordinasi dengan Cabang yang fokus pada persoalan perempuan di PMII dan isu-isu perempuan secara umum</p>
                    </div>
                   
                </div>

                <div class="row image-about mt-7 lg:px-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <div
                        class="aboutImage w-full bg-white h-[500px] rounded-tr-[100px] rounded-bl-[100px] overflow-hidden flex justify-center items-center">
                        <img src="/img/model.png" class="object-cover object-center"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="column-2 w-full  sm:w-full md:w-full   px-4 lg:w-1/2 ">
                <div class="row w-full px-4 mb-3 mt-5 sm:mt-5 md:mt-5 lg:mt-0 ">
                    <h1 class="text-secondary font-bold text-2xl md:text-3xl lg:text-4xl"  data-aos="fade-right" data-aos-duration="500" data-aos-delay="900">VISI</h1>
                    <h3 class="text-white text-lg md:text-xl lg:text-3xl font-semibold mt-2 text-justify" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1100">
                      Terciptanya Kopri PMII Cabang Ciputat yang cerdas, aktif dan bermatabat dalam menghadapi gelombang transformasi digital.</h3>
                </div>

                <div class="row w-full px-4 mb-3  mt-11 ">
                    <h1 class="text-secondary font-bold text-2xl md:text-3xl lg:text-4xl" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500">MISI</h1>
                    <h3 class="text-white text-lg md:text-xl lg:text-2xl  mt-2 text-justify mb-7" data-aos="fade-right" data-aos-duration="500" data-aos-delay="900">Adapun beberapa misi
                        kami untuk mencapai visi kami adalah :</h3>

                    <div class="flex flex-wrap  w-full justify-center ">
                        <div class="visi px-2 w-full lg:w-full mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="/img/teamwork.png" alt="" class="rounded-md w-[50px] h-[50px]">
                                <h3 class="text-first font-semibold ml-2">Mengkonsolidasikan seluruh aktifits anggota kader dibidang intelektual dan teknologi informasi.</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-full mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="/img/unity.png" alt="" class="rounded-md w-[50px] h-[50px]">
                                <h3 class="text-first font-semibold ml-2">Mendukung kegiatan yang mendorong sikap humanis dan anti intoleran</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-full mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="/img/defence.png" alt="" class="rounded-md w-[50px] h-[50px]">
                                <h3 class="text-first font-semibold ml-2">Menstimulir proses ketahanan anggota dan kader dengan integritas komunal bukan individu</h3>
                            </div>
                        </div>
                        <div class="visi px-2 w-full lg:w-full mb-4 ">
                            <div class="inner-visi rounded-md  bg-blue-200 flex  items-center p-2">
                                <img src="/img/resources.png" alt="" class="rounded-md w-[50px] h-[50px]">
                                <h3 class="text-first font-semibold ml-2">Memperbaiki citra Kopri PMII Cabang Ciputat melalui pelaksanaan, peran dan peningkatan kualitas sumber daya anggota yang profesional </h3>
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

        <h1 class="text-first text-2xl md:text-3xl lg:text-5xl text-center font-bold mb-11 italic" data-aos="fade-down" data-aos-duration="500">"Perempuan yang pikirannya sudah dicerdaskan, pemandangannya sudah diperluas, tidak akan sanggup lagi hidup di dalam dunia nenek moyangnya"</h1>
        
      
    </div>
</section>
@endsection