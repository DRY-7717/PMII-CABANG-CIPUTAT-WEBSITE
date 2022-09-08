<header class=" header bg-first flex   items-center w-full   absolute top-0 left-0 ">
    <div class="container px-4 lg:px-16 lg:max-w-full  md:max-w-full sm:max-w-full">
        <div class="flex justify-between  items-center relative ">
            <div class="px-4 logom flex">
                <a href="#home" class="py-6 lg:py-4 block mr-2"><img src="/img/pmii.png" alt="pmii cabang ciputat"
                        class="lg:w-11 lg:h-11 w-8 h-8"></a>
                <a href="#home"
                    class="font-bold text-sm py-6 lg:py-4 block text-white md:text-xl lg:text-lg self-center "> PMII
                    CABANG
                    CIPUTAT</a>
            </div>


            <div class="flex px-4 items-center ">
                <div class="lg:hidden " id="hamburger">
                    <div class="hamburger  hamburger--elastic">
                        <div class="hamburger-box ">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <nav class="hidden z-50 py-5 lg:py-2 lg:block lg:static  bg-white absolute w-full max-w-[300px] lg:max-w-full top-full right-4 rounded-lg shadow-md shadow-slate-500 lg:shadow-none lg:bg-transparent lg:rounded-none"
                    id="nav-menu">
                    <ul class="block lg:flex">
                        <li class="group  lg:hover:bg-primary transition duration-200 lg:rounded-full ">
                            <a href="/"
                                class="text-base lg:text-[15px]  text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Home</a>
                        </li>
                        <li class="group  relative lg:hover:bg-primary transition duration-200 lg:rounded-full "><a
                                href="/#about"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">About</a>
                            {{-- <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-40 py-5 absolute -left-[165px] -top-8 lg:top-24 lg:group-hover:-translate-y-[51px] lg:-left-6 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">


                                <li class=" hover:bg-slate-100  transition duration-500"><a href="#gallery"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-7 flex">Gallery</a>
                                </li>

                            </ul> --}}
                        </li>


                        <li class="  group  lg:hover:bg-primary transition duration-200 lg:rounded-full"><a
                                href="/#sejarah"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Sejarah</a>
                        </li>

                        </li>
                        <li class=" group lg:hover:bg-primary transition duration-200 lg:rounded-full"><a
                                href="/#gallery"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Gallery</a>
                        </li>
                        <li
                            class=" group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('kopri') ? 'active' : '' }}">
                            <a href="/kopri"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Kopri</a>
                        </li>
                        <li
                            class="group relative lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('team') ? 'active' : '' }}">
                            <a href="#"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3  lg:block sm:hidden md:hidden hidden">Team</a>
                            <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-52 py-5 absolute lg:top-[85px] lg:group-hover:-translate-y-[48px] lg:right-0 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">

                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('team') ? 'active' : '' }}">
                                    <a href="/team"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fa-solid fa-users mr-2"></i>Team PMII Cabang</a>
                                </li>
                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('teamkopri') ? 'active' : '' }}">
                                    <a href="/teamkopri"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fa-solid fa-users mr-2"></i>Team Kopri Cabang</a>
                                </li>
                            </ul>
                        </li>
                        {{-- start team md sm --}}
                        <li
                            class="lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('team') ? 'active' : '' }}">
                            <a href="/team"
                                class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center">Team
                                PMII Cabang</a>
                        </li>
                        <li
                            class="lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('teamkopri') ? 'active' : '' }}">
                            <a href="/teamkopri"
                                class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center">Team
                                Kopri Cabang</a>
                        </li>
                        {{-- end team md sm --}}
                        <li
                            class="hidden lg:block group lg:hover:bg-primary transition duration-200 lg:rounded-full relative {{ Request::is('programs') ? 'active' : ''  || Request::is('news') ? 'active' : '' || Request::is('award') ? 'active' : '' || Request::is('mails') ? 'active' : ''}}">
                            <a href="#"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Update</a>
                            <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-52 py-5 absolute lg:top-[85px] lg:group-hover:-translate-y-[48px] lg:right-0 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">

                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('programs') ? 'active' : '' }}">
                                    <a href="/programs"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fas fa-clipboard-list mr-2"></i>Program</a>
                                </li>
                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('news') ? 'active' : '' }}">
                                    <a href="/news"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fas fa-newspaper mr-2"></i>Berita</a>
                                </li>
                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('talent') ? 'active' : '' }}">
                                    <a href="/talent"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i class="fa-regular fa-star mr-2"></i>Talent</a>
                                </li>
                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('award') ? 'active' : '' }}">
                                    <a href="/award"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fas fa-medal mr-2"></i>Prestasi</a>
                                </li>
                                <li
                                    class=" hover:bg-slate-100  transition duration-500 {{ Request::is('mails') ? 'active' : '' }}">
                                    <a href="/mails"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2"><i
                                            class="fas fa-envelope mr-2"></i>Perizinan</a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('programs') ? 'active' : '' }}">
                            <a href="/programs"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Program</a>
                        </li>
                        <li
                            class="lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('news') ? 'active' : '' }}">
                            <a href="/news"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Berita</a>
                        </li>
                        <li
                            class=" lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('talent') ? 'active' : '' }}">
                            <a href="/talent"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Talent</a>
                        </li>
                        <li
                            class=" lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('award') ? 'active' : '' }}">
                            <a href="/award"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Prestasi</a>
                        </li>
                        <li
                            class=" lg:hidden group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('mails') ? 'active' : '' }}">
                            <a href="/mails"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex">Perizinan</a>
                        </li>


                        <li class="flex items-center text-white">
                            <span class="mx-3">|</span>
                        </li>

                        @auth
                        <li
                            class="group lg:hover:bg-primary  transition duration-200 lg:rounded-full  flex items-center text-white relative {{ Request::is('login') ? 'active' : '' }}">
                            <a href="#"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex items-center">
                                <i
                                    class="fas fa-user-alt mr-3"></i>{{
                                auth()->user()->name }}</a>
                            <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-52 py-5 absolute lg:top-[85px] lg:group-hover:-translate-y-[51px] lg:right-0 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">


                                @if (auth()->user()->role === 1)
                                <li class=" hover:bg-slate-100  transition duration-500"><a href="/dashboard/anggota"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2">
                                        <i class="fas fa-tachometer-alt-fast mr-2"></i> Dashboard</a>
                                </li>
                                @else
                                <li class=" hover:bg-slate-100  transition duration-500"><a href="/dashboard/program"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center mb-2">
                                        <i class="fas fa-tachometer-alt-fast mr-2"></i> Dashboard</a>
                                </li>
                                @endif





                                <li class="border-t hover:bg-slate-100  transition duration-500">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button
                                            class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center w-full"><i
                                                class="fas fa-sign-out mr-2"></i> Logout</button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                        @if (auth()->user()->role === 1)
                        <li
                            class="group lg:hidden lg:hover:bg-primary transition duration-200 lg:rounded-full  flex items-center text-white {{ Request::is('login') ? 'active' : '' }}">
                            <a href="/dashboard/anggota"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex items-center "><i
                                    class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
                        </li>
                        @else
                        <li
                            class="group lg:hidden lg:hover:bg-primary transition duration-200 lg:rounded-full  flex items-center text-white {{ Request::is('login') ? 'active' : '' }}">
                            <a href="/dashboard/program"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex items-center "><i
                                    class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
                        </li>
                        @endif

                        <li class="lg:hidden border-t hover:bg-slate-100  transition duration-500">
                            <form action="/logout" method="post">
                                @csrf
                                <button
                                    class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-3 flex items-center w-full"><i
                                        class="fas fa-sign-out mr-2"></i> Logout</button>
                            </form>

                        </li>
                        @else
                        <li
                            class="group lg:hover:bg-primary transition duration-200 lg:rounded-full  flex items-center text-white {{ Request::is('login') ? 'active' : '' }}">
                            <a href="/login"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-first lg:text-white lg:group-hover:text-white py-1  mx-3 flex items-center "><i
                                    class="fa-solid fa-right-to-bracket mr-2"></i> Login</a>
                        </li>
                        @endauth



                    </ul>
                </nav>
            </div>


        </div>
    </div>
</header>