@extends('template.main')

{{-- bg-[#14279B] --}}

@include('partials.nav')
@section('section')

<section class="  bg-gradient-to-t from-[#14279B] to-cyan-500 relative">


    <div class="swiper mix-blend-multiply h-full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper -z-50">
            <!-- Slides -->
            <div class="swiper-slide"><img src="/img/h1.JPG" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="swiper-slide"><img src="/img/h2.JPG" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="swiper-slide"><img src="/img/h3.JPG" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="swiper-slide"><img src="/img/h4.JPG" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="swiper-slide"><img src="/img/h5.JPG" alt="" class="w-full h-full object-cover object-center">
            </div>
        </div>
    </div>


    <div class="container px-4   lg:max-w-full lg:px-16">
        <div class="flex flex-wrap absolute top-72 z-50">
            <div class="w-full lg:mx-auto  px-4 text-white  mb-14 self-center lg:mb-0 " data-aos="zoom-in"
                data-aos-duration="2500">
                <h2 class="text-xl mb-2 font-semibold text-secondary md:text-3xl lg:text-3xl sm:text-2xl">Hello 👋,
                    <span class="text-white">welcome to
                        :</span>
                </h2>
                <h1 class=" sm:text-4xl md:text-6xl text-4xl lg:text-5xl font-black mb-3  ">PMII CABANG <span
                        class="text-secondary">CIPUTAT</span></h1>
                <p class="font-semibold text-lg sm:text-xl md:text-2xl lg:text-3xl mb-2">Don't forget to : <span
                        class="text-secondary" id="slogan"></span></p>
                <p class="text-base font-light  mb-7 sm:text-xl md:text-2xl lg:text-2xl lg:tracking-wide italic ">We are
                    Indonesian
                    Moslem Student Movement
                </p>

                <a href="#about"
                    class="px-10 py-2  rounded-full bg-primary text-white hover:bg-yellow-500 active:ring active:ring-yellow-200 mt-2 md:px-11 md:py-2 md:text-lg lg:px-11 lg:py-3 lg:text-lg">Let's
                    Go</a>
            </div>

        </div>
    </div>
</section>




{{-- Section Introduce Start --}}
<section class="pt-36 pb-32 " id="about">
    <div class="container  mx-auto px-4   lg:max-w-full lg:px-16">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mx-auto max-w-4xl md:max-w-full lg:w-1/2 mb-9 overflow-hidden" data-aos="zoom-in"
                data-aos-duration="1500" data-aos-offset="300">
                <img src="/img/intro.gif" alt="intro" class="w-full h-full">

            </div>
            <div class="w-full px-4 mx-auto max-w-4xl md:max-w-full lg:w-1/2">
                <div class="intro-pmii mb-4 w-full" data-aos="fade-right" data-aos-duration="700" data-aos-delay="500"
                    data-aos-offset="300">
                    <h2 class="font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl mb-4 md:mb-5 lg:mb-4 text-first">
                        Pergerakan Mahasiswa Islam Indonesia</h2>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify">
                        PMII merupakan organisasi gerakan dan kaderisasi yang berlandaskan islam ahlussunah waljamaah.
                        Berdiri sejak tanggal 17 April 1960 di Surabaya dan hingga lebih dari setengah abad kini PMII
                        terus
                        eksis untuk memberikan kontribusi bagi kemajuan bangsa dan negara. </p>
                </div>

                <div class="sejarah" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600"
                    data-aos-offset="200">
                    <h2 class="font-bold text-2xl sm:text-2xl md:text-3xl lg:text-3xl mb-4 md:mb-5 lg:mb-3 text-first">
                        Tujuan PMII</h2>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify">
                        Terbentuknya pribadi muslim Indonesia yang bertakwa kepada Allah Swt, Berbudi luhur, berilmu,
                        cakap dan bertanggungjawab dalam mengamalkan ilmunya serta komitmen memperjuangkan cita-cita
                        kemerdekaan Indonesia. </p>
                </div>
            </div>


        </div>
    </div>
</section>
{{-- Section Introduce End --}}

{{-- Section History Start --}}
<section class="pt-36 pb-32 bg-slate-100" id="sejarah">
    <div class="container  mx-auto px-4   lg:max-w-full lg:px-16">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:px-7 mx-auto max-w-4xl md:max-w-full lg:w-1/2 order-2 sm:order-2 md:order-2 lg:order-1 "
                data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="300">

                <h2 class="font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl mb-4 md:mb-5 lg:mb-4 text-first">
                    Sejarah PMII Cabang Ciputat</h2>
                <div
                    class="isi-sejarah overflow-y-scroll h-96 scrollbar scrollbar-thumb-blue-400 scrollbar-track-blue-100 scrollbar-thin pr-4 ">

                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify mb-4">
                        Setelah PMII didirikan, beberapa mahasiswa yang berlatar
                        belakang IPNU dan NU berkumpul dan sepakat untuk
                        merencanakan pendirian PMII Ciputat. Kemudian, mereka
                        menyebarkan formulir anggota PMII secara door to door ke
                        mahasiswa yang tinggal di perumahan komplek. Sebelumnya,
                        formulir anggota HMI sudah lebih dulu beredar di kalangan
                        mahasiswa.Para pendiri PMII termasuk yang mendapat formulir
                        HMI, namun mereka menolak dan justru menyebar kembali formulir
                        yang berbeda, yaitu anggota PMII. Dari sejumlah formulir yang
                        disebar,sebanyak 57 formulir kembali. Mereka yang mengisi formulir
                        menyatakan bersedia menjadi anggota PMII. Sebagian mereka adalah
                        mahasiswa baru dan adapula mahasiswa senior yang sudah
                        berkeluarga.
                    </p>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify mb-4">
                        Mereka yang menyerahkan formulir kemudian diundang
                        dalam pertemuan Deklarasi PMII. Deklarasi dilakukan oleh
                        Pengurus Pusat PMII yaitu Mahbub Junaidi, KholidMawardi, dan
                        Fahrurrozi(ketua Cabang Jakarta danpengurus pusat), dan dihadiri
                        oleh aparat kepolisian, anggota organisasi kemahasiswaan lain,dan
                        unsur IAIN. Pertemuan dan deklarasi itu dilaksanakan di dalam
                        kampus.
                    </p>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify mb-4">
                        Setelah dideklarasikan, tim kemudian membentuk
                        kepengurusan PMII Ciputat, yang terdiri dari ketua umum Imam
                        Yamin, wakil ketua Chotibul Umam, Ari Amnan bendahara, Lamingi
                        Lamtamzid sebagai sekretaris, Abdurrahman K (dari sulawesi)
                        sebagai sekretaris, dan beberapa nama lain seperti Zuhdi Anwar,
                        Mudzakir Jaelani, H. Rusli (imam tentara), Jamhari, Idris, sebagai
                        pengurus. Adapun Zamroni yang saat itu menjabat sebagai ketua
                        Dewan Mahasiswa IAIN Jakarta menduduki sebagai penasihat.
                        Sahabat Zamroni sendiri yang saat itu tercatat sebagai mahasiswa
                        Jurusan Bahasa Arab IAIN Jakarta adalah pendiri PMII Pusat pada
                        1960.

                    </p>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify mb-4">
                        Alasan utama pendirian PMII adalah mengumpulkan
                        mahasiswa-mahasiswa dari kaum nahdhiyin ke dalam satu wadah
                        organisasi. Cita-cita awal pendiri anorganisasi dibawah naungan NU
                        ini bersifat idealis, meskipun kemudian berkembang tujuan
                        pragmatis. Tujuan idealis berkenaan dengan penyebaran dan
                        penguatan paham ahlus sunnah wal jamaah di perguruan tinggi,
                        terutama IAIN Jakarta. Adapun tujuan pragmatis berkisar pada
                        keterlibatan orang-orang dalam pengelolaan IAIN Jakarta. Melalui
                        organisasi ini, orang-orang PMII diperjuangkan untuk bisa menjadi
                        dosen, pejabat, dan pegawai di IAIN.
                    </p>
                    <p class="text-second text-base sm:text-lg lg:text-lg text-justify mb-4">
                        Pada periode pertama, sahabat Chotibul Umam diangkat
                        sebagai ketua umum PMII Cabang Ciputat periode 1961–1962.
                        Untuk periode 1962–1964, sahabat Choliluddin AS diangkat sebagai
                        ketua umum dengan sekretaris umum Ibrahim AR dan bendahara
                        Dedy Anwar. Periode awal kepengurusan PMII Ciputat ini semasa
                        dengan kepengurusan sahabat Said Budairi dan Cholid Mawardi di
                        PMII Cabang Jakarta.
                    </p>
                </div>

            </div>
            <div
                class="w-full px-4 mx-auto max-w-4xl md:max-w-full lg:w-1/2 mb-9 order-1 sm:order-1 md:order-1 lg:order-2 sm:mb-7 md:mb-7">
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-3 ">
                    <div
                        class="bg-first shadow-md shadow-slate-500 aspect-[10/5] md:aspect-[10/6] lg:aspect-[10/4] rounded-2xl col-span-3 sm:col-span-2 lg:col-span-3 overflow-hidden grid-img group">
                        <img src="/img/s1.JPG" alt=""
                            class="w-full h-full object-cover object-top group-hover:scale-125 transition duration-300">
                    </div>
                    <div
                        class="bg-first shadow-md shadow-slate-500 aspect-square rounded-2xl hidden sm:block sm:aspect-auto lg:aspect-square overflow-hidden grid-img group">
                        <img src="/img/a1.JPG" alt=""
                            class="w-full h-full object-cover object-center group-hover:scale-125 transition duration-300">
                    </div>
                    <div
                        class="bg-first shadow-md shadow-slate-500 aspect-square rounded-2xl hidden md:block md:aspect-auto lg:aspect-square overflow-hidden grid-img group">
                        <img src="/img/a2.JPG" alt=""
                            class="w-full h-full object-cover object-center group-hover:scale-125 transition duration-300">
                    </div>
                    <div
                        class="bg-first shadow-md shadow-slate-500 aspect-square rounded-2xl hidden lg:block  lg:aspect-square overflow-hidden grid-img group">
                        <img src="/img/s2.JPG" alt=""
                            class="w-full h-full object-cover object-center group-hover:scale-125 transition duration-300">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section History End --}}

{{-- Section Tokoh Start --}}
{{-- <section class="pt-36 pb-24" id="tokoh">
    <div class="container px-4 lg:px-16 lg:max-w-full mx-auto">
        <div class="w-full px-4 mx-auto max-w-4xl mb-12">
            <h1 class="text-center text-first font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl">Tokoh</h1>
            <p class="mt-4 text-base sm:text-lg text-second text-center">Sepatah dua patah kata mengenai PMII dari tokoh
                tokoh di
                indonesia</p>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2 tokoh">
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 shadow-md shadow-slate-300 overflow-hidden">
                    <img class="w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="/img/sujiwotedjo.jpg" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-thin italic">
                                "PMII sebagai gerakan mahasiswa yang menjunjung Islam rahamatan lil alamin harus bisa
                                menangkal gerakan radikalisasi Islam dengan gerakan tasawuf,"
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-first dark:text-first">
                                Sujiwo Tedjo
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Budayawan
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2 tokoh">
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 shadow-md shadow-slate-300 overflow-hidden">
                    <img class="w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="https://source.unsplash.com/500x500?people" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-thin italic">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-first dark:text-first">
                                Nama Tokoh
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Profesi
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2 tokoh">
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 shadow-md shadow-slate-300 overflow-hidden">
                    <img class="w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="https://source.unsplash.com/500x500?people" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-thin italic">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-first dark:text-first">
                                Nama Tokoh
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Profesi
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2 tokoh">
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 shadow-md shadow-slate-300 overflow-hidden">
                    <img class="w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="https://source.unsplash.com/500x500?people" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-thin italic">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-first dark:text-first">
                                Nama Tokoh
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Profesi
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section> --}}
{{-- Section Tokoh End --}}

{{-- LSO Start --}}
<section class=" pt-20 bg-first" id="lso">
    <div class="container px-4 mx-auto lg:px-16 lg:max-w-full">
        <div class="w-full px-4 mx-auto max-w-4xl mb-12">
            <h1 class="text-white text-center font-semibold text-2xl sm:text-2xl md:text-3xl lg:text-3xl">Lembaga Semi
                Otonom (LSO)</h1>
            <p class="mt-4 text-base sm:text-lg text-white text-center">
                Beberapa lembaga semi otonom yang ada di PMII Cabang Ciputat :
            </p>
        </div>

        <div class="flex flex-wrap">

            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2">
                <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-md  overflow-hidden" data-aos="fade-up">
                    <img class="w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="/img/pers.jpg" alt="" width="384" height="512">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <figcaption class="font-medium ">
                            <div class=" text-xl text-first dark:text-first">
                                Pers Pergerakan
                            </div>
                        </figcaption>
                        <blockquote>
                            <p class=" text-md">
                                Pers Pergerakan adalah sebuah lembaga semi otonom yang bertugas dalam mengemas berita baik nasional ataupun internasional<a href="#" class="text-blue-700 hover:underline"> launch
                                    web</a>
                            </p>

                        </blockquote>

                    </div>
                </figure>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 lg:w-1/2 ">
                <figure class="md:flex bg-white rounded-xl p-8 md:p-0 shadow-md  overflow-hidden" data-aos="fade-up"
                    data-aos-delay="300">
                    <img class="lg:order-2 w-28 h-28 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                        src="/img/lbh.jpeg" alt="" width="384" height="512">
                    <div class=" lg:order-1 pt-6 md:p-8 text-center md:text-left space-y-4">
                        <figcaption class="font-medium lg:text-right">
                            <div class=" text-xl text-first dark:text-first">
                                LPBH PMII Cabang Ciputat
                            </div>
                        </figcaption>
                        <blockquote>
                            <p class="text-md lg:text-right ">
                                Lembaga Pendidikan dan Bantuan Hukum (LPBH) adalah Lembaga semi otonom yang bertugas melakukan edukasi dan pemberdayaan hukum.
                            </p>
                        </blockquote>

                    </div>
                </figure>
            </div>
        </div>

    </div>
</section>
{{-- LSO End --}}
{{-- Section Gallery Start --}}
<section class="pt-36 pb-24 bg-slate" id="gallery">
    <div class="container px-4 lg:px-16 lg:max-w-full mx-auto">
        <div class="w-full px-4 mx-auto max-w-4xl mb-12">
            <h1 class="text-center text-first font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl">Gallery</h1>
            <p class="mt-4 text-base sm:text-lg text-second text-center">Rangkaian foto dokumentasi kegiatan PMII Cabang
                Ciputat</p>
        </div>

        <div class="flex flex-wrap justify-center">
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g1.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g2.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g3.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g4.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g5.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g6.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g7.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g8.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>
            <div class="w-full px-4 mx-auto max-w-4xl mb-11 sm:w-1/2 lg:w-1/3 md:w-1/2 doc-img">
                <div
                    class="rounded-lg shadow-lg shadow-slate-400 overflow-hidden group hover:scale-90 transition  duration-700 ease-out ">
                    <img src="/img/g9.JPG" alt=""
                        class="aspect-[7/6] object-cover object-center group-hover:scale-150 transition duration-1000 ease-in">
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Section Gallery End--}}

@endsection