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
                <nav class="hidden z-50 py-5 lg:py-2 lg:block lg:static  bg-white absolute w-full max-w-[250px] lg:max-w-full top-full right-4 rounded-lg shadow-md shadow-slate-500 lg:shadow-none lg:bg-transparent lg:rounded-none"
                    id="nav-menu">
                    <ul class="block lg:flex">
                        <li class="group  lg:hover:bg-primary transition duration-200 lg:rounded-full ">
                            <a href="/"
                                class="text-base lg:text-[15px]  text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-7 flex">Home</a>
                        </li>
                        <li class="group  relative lg:hover:bg-primary transition duration-200 lg:rounded-full "><a
                                href="/#about"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-7 flex">About</a>
                            {{-- <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-40 py-5 absolute -left-[165px] -top-8 lg:top-24 lg:group-hover:-translate-y-[51px] lg:-left-6 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">


                                <li class=" hover:bg-slate-100  transition duration-500"><a href="#gallery"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-7 flex">Gallery</a>
                                </li>

                            </ul> --}}
                        </li>


                        <li class="  group  lg:hover:bg-primary transition duration-200 lg:rounded-full"><a
                                href="/#sejarah"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex">Sejarah</a>
                        </li>

                        </li>
                        <li class="group  lg:hover:bg-primary transition duration-200 lg:rounded-full"><a href="/#tokoh"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex">Tokoh</a>
                        </li>
                        <li class=" group lg:hover:bg-primary transition duration-200 lg:rounded-full"><a
                                href="/#gallery"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex">Gallery</a>
                        </li>
                        <li
                            class="group lg:hover:bg-primary transition duration-200 lg:rounded-full {{ Request::is('team') ? 'active' : '' }}">
                            <a href="/team"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex">Team</a>
                        </li>
                        <li
                            class="group lg:hover:bg-primary transition duration-200 lg:rounded-full  {{ Request::is('programs') ? 'active' : '' }}">
                            <a href="/programs"
                                class=" text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex">Programs</a>
                        </li>
                        <li class="flex items-center text-white">
                            <span class="mx-3">|</span>
                        </li>

                        @auth
                        <li
                            class="group lg:hover:bg-primary transition duration-200 lg:rounded-full  flex items-center text-white relative {{ Request::is('login') ? 'active' : '' }}">
                            <a href="/login"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex ">{{
                                auth()->user()->name }}</a>
                            <ul
                                class="hidden lg:block  invisible group-hover:visible  opacity-0 group-hover:opacity-100 w-52 py-5 absolute lg:top-[85px] lg:group-hover:-translate-y-[51px] lg:right-0 bg-white rounded-lg shadow-md shadow-slate-400 transition duration-300 z-50">


                                <li class=" hover:bg-slate-100  transition duration-500"><a href="/dashboard"
                                        class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-5 flex items-center mb-2">
                                        <i class="fas fa-tachometer-alt-fast mr-2"></i> Dashboard</a>
                                </li>
                                <li class="border-t hover:bg-slate-100  transition duration-500">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button
                                            class="text-base lg:text-base text-slate-800 hover:text-first  py-1  mx-5 flex items-center w-full"><i
                                                class="fas fa-sign-out mr-2"></i> Logout</button>
                                    </form>

                                </li>

                            </ul>
                        </li>
                        @else
                        <li
                            class="group lg:hover:bg-primary transition duration-200 lg:rounded-full  flex items-center text-white {{ Request::is('login') ? 'active' : '' }}">
                            <a href="/login"
                                class="text-base lg:text-[15px] text-slate-800 hover:text-primary lg:text-white lg:group-hover:text-white py-1  mx-5 flex items-center "><i
                                    class="fa-solid fa-right-to-bracket mr-2"></i> Login</a>
                        </li>
                        @endauth



                    </ul>
                </nav>
            </div>


        </div>
    </div>
</header>