    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/swiper.css" />
    @vite('resources/css/app.css')

</head>

<body>
    <!-- navbar section -->
    <div class="navbar bg-base-100 px-9 py-0">
        <div class="flex-1 md:flex-none md:mr-7">
            <a class="btn btn-ghost normal-case text-xl hover:bg-transparent"><span
                    class="text-primary h">Nusantara</span>Trip</a>
        </div>
        <div class="flex-1 hidden md:block">
            <ul class="menu menu-horizontal p-0 h-[64px]">
                <li><a>Wisata</a></li>
                <li><a>Hotel</a></li>
                <li><a>Restoran</a></li>
                <li><a>Forum Wisata</a></li>
            </ul>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end md:hidden">
                <label tabindex="0" class="btn m-1 p-0 bg-transparent hover:bg-transparent border-none"><img
                        src="/icons/icons8-menu-26.png" alt="hamburger" width="20" srcset="" /></label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Wisata</a></li>
                    <li><a>Hotel</a></li>
                    <li><a>Restoran</a></li>
                    <li><a>Forum Wisata</a></li>
                </ul>
            </div>
            {{-- Guest --}}
            @if (Auth::guest())
                <a class=" normal-case rounded-none text-lg hover:bg-primary h-[64px] px-5 flex items-center hover:text-white cursor-pointer transition-all duration-200"
                    href="{{ route('register') }}">Register</a>
                <a class=" normal-case rounded-none text-lg hover:bg-primary h-[64px] px-5 flex items-center hover:text-white cursor-pointer transition-all duration-200"
                    href="{{ route('login') }}">Login</a>
            @else
                <span class="normal-case mr-3">Welcome, {{ Auth::user()->name }}</span>
                <div class="dropdown dropdown-end">

                    <label tabindex="0" class="btn btn-ghost btn-circle avatar ">
                        <div class="w-10 rounded-full">
                            <img src="{{ Auth::user()->profile_photo_url }}" />
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between" href="{{ route('profile.show') }}">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>

                </div>
                <div class="dropdown dropdown-end ml-5">
                    <label tabindex="0" class="btn btn-ghost btn-circle hover:bg-transparent md:mr-8">
                        <div class="indicator">
                            <span class="normal-case self-center hidden md:block mr-1 text-slate-700">Favorit</span>
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mr-2"
                                width="512" height="512">
                                <g id="_01_align_center" data-name="01 align center">
                                    <path
                                        d="M17.5.917a6.4,6.4,0,0,0-5.5,3.3A6.4,6.4,0,0,0,6.5.917,6.8,6.8,0,0,0,0,7.967c0,6.775,10.956,14.6,11.422,14.932l.578.409.578-.409C13.044,22.569,24,14.742,24,7.967A6.8,6.8,0,0,0,17.5.917ZM12,20.846c-3.253-2.43-10-8.4-10-12.879a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,7.967h2a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,7.967C22,12.448,15.253,18.416,12,20.846Z" />
                                </g>
                            </svg>
                            <span class="badge badge-sm badge-success indicator-item">8</span>
                        </div>
                    </label>
                    <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span class="font-bold text-lg">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-block bg-primary hover:bg-primaryDarken border-none">View
                                    cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- End Guest  --}}

            {{-- IF LOGIN --}}


            {{-- End IF LOGIN --}}
        </div>
    </div>
    <!-- end navbar section -->

    <!-- hero section -->
    <div class="hero h-[25rem]" style="background-image: url(/img-content/bali.jpg)">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content">
            <div class="max-w-4xl">
                <h1 class="mb-5 text-5xl font-bold normal-case">Rencanakan Perjalananmu Sekarang</h1>
                <p class="mb-5 text-lg">Pariwisata merupakan suatu perjalanan yang dilakukan oleh seseorang atau lebih
                    dengan tujuan antara lain untuk mendapatkan kesenangan dan keinginan untuk mengetahui sesuatu.</p>
            </div>
        </div>
    </div>
    <!-- end hero section -->

    <!-- form search and book -->
    <div class="bg-primary px-3 sm:px-0">
        <div
            class="w-full max-w-md flex justify-center items-center bg-slate-50 rounded-md px-4 py-6 mx-auto -translate-y-1/2 sm:min-w-max sm:px-6 sm:py-8 sm:w-5/6">
            <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/50/34be82/external-destination-travel-flatart-icons-outline-flatarticons-1.png"
                class="mr-8 hidden sm:block sm:flex-none" />
            <input type="text" placeholder="Mau Kemana?"
                class="input input-bordered w-full mr-3 sm:w-[340px] md:w-[430px] lg:w-[600px] xl:w-[700px]" />
            <button class="btn glass border-none bg-primary hover:bg-primaryDarken sm:flex-none">Search</button>
        </div>
        <div class="text-center">
            <h5 class="text-slate-50 text-lgff">Buku Petunjuk Perjalanan</h5>
            <h1 class="text-2xl text-slate-50 font-semibold">Hal Yang Diperlukan Untuk Berwisata</h1>
        </div>
        <div class="grid grid-cols-1 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            <div class="flex flex-col items-center mb-10">
                <img src="https://img.icons8.com/external-tulpahn-detailed-outline-tulpahn/560/FFFFFF/external-wifi-digital-nomad-tulpahn-detailed-outline-tulpahn.png"
                    class="w-32 lg:w-20" />
                <h1 class="font-semibold text-slate-50 text-xl mt-5">Mobile Data(3G/4G)</h1>
                <a class="text-slate-50 cursor-pointer hover:underline">More Detail ></a>
            </div>
            <div class="flex flex-col items-center mb-10 lg:row-span-2">
                <img src="https://img.icons8.com/wired/560
          /FFFFFF/sorting-arrows.png" class="w-32 lg:w-20" />
                <h1 class="font-semibold text-slate-50 text-xl mt-5">Currency Exchange</h1>
                <a class="text-slate-50 cursor-pointer hover:underline">More Detail ></a>
            </div>
            <div class="flex flex-col items-center mb-10">
                <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/560/FFFFFF/external-guidebook-location-wanicon-lineal-wanicon.png"
                    class="w-32 lg:w-20" />
                <h1 class="font-semibold text-slate-50 text-xl mt-5">Local Guidebook</h1>
                <a class="text-slate-50 cursor-pointer hover:underline">More Detail ></a>
            </div>
            <div class="flex flex-col items-center mb-10">
                <img src="https://img.icons8.com/ios/560/FFFFFF/wheel.png" class="w-32 lg:w-20" />
                <h1 class="font-semibold text-slate-50 text-xl mt-5">Car/Bike Rental</h1>
                <a class="text-slate-50 cursor-pointer hover:underline">More Detail ></a>
            </div>
            <div class="flex flex-col items-center mb-10 sm:col-span-2 lg:col-auto">
                <img src="https://img.icons8.com/dotty/560/FFFFFF/ticket-confirmed.png" class="w-32 lg:w-20" />
                <h1 class="font-semibold text-slate-50 text-xl mt-5">Show/Ticket</h1>
                <a class="text-slate-50 cursor-pointer hover:underline">More Detail ></a>
            </div>
        </div>
    </div>
    <!-- end form search -->

    <!-- category and popular tour-->
    <section class="py-20 block">
        <div class="text-center mb-5">
            <h5 class="uppercase text-primary text-sm font-semibold">best category tourist</h5>
            <h1 class="text-slate-600 font-semibold text-2xl normal-case">Kategori Wisata Terbaik</h1>
        </div>
        <div class="grid grid-flow-row gap-6 justify-center md:flex md:flex-wrap lg:flex-wrap lg:px-20 xl:flex-nowrap">
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all transitoi duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/sejarah_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">WISATA SEJARAH</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/alam_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">WISATA ALAM</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/budaya_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">WISATA BUDAYA</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/bahari_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">WISATA BAHARI</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/cagaralam_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">CAGAR ALAM</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
        </div>

        <div class="text-center mt-20 mb-5">
            <h5 class="uppercase text-primary text-sm font-semibold">best category tourist</h5>
            <h1 class="text-slate-600 font-semibold text-2xl normal-case">Wisata Populer di Indonesia</h1>
        </div>

        <div class="flex flex-wrap gap-10 px-10 justify-center">
            <div class="flex justify-center w-72 h-96 bg-cover bg-center bg-slate-300 bg-blend-multiply group lg:w-64 lg:h-80 xl:w-60 xl:h-80"
                style="background-image: url('/img-content/populer_borobudur.jpg')">
                <div class="text-center w-full text-white self-end mb-5 flex flex-col items-center">
                    <h1 class="text-3xl font-semibold">Candi Borobudur</h1>
                    <p class="text-lg">20 jt+ Pengunjung Pertahun</p>
                    <a class="w-fit btn bg-transparent hover:bg-primary glass border-none mt-5 rounded-none"> Lihat
                        lebih detail </a>
                </div>
            </div>
            <div class="flex justify-center w-72 h-96 bg-cover bg-center bg-slate-300 bg-blend-multiply group lg:w-64 lg:h-80 xl:w-60 xl:h-80"
                style="background-image: url('/img-content/populer_bromo.jpg')">
                <div class="text-center w-full text-white self-end mb-5 flex flex-col items-center">
                    <h1 class="text-3xl font-semibold">Gunung Bromo</h1>
                    <p class="text-lg">18 jt+ Pengunjung Pertahun</p>
                    <a class="w-fit btn bg-transparent hover:bg-primary glass border-none mt-5 rounded-none"> Lihat
                        lebih detail </a>
                </div>
            </div>
            <div class="flex justify-center w-72 h-96 bg-cover bg-center bg-slate-300 bg-blend-multiply group lg:w-64 lg:h-80 xl:w-60 xl:h-80"
                style="background-image: url('/img-content/populer_pulaukomodo.jpg')">
                <div class="text-center w-full text-white self-end mb-5 flex flex-col items-center">
                    <h1 class="text-3xl font-semibold">Pulau Komodo</h1>
                    <p class="text-lg">16 jt+ Pengunjung Pertahun</p>
                    <a class="w-fit btn bg-transparent hover:bg-primary glass border-none mt-5 rounded-none"> Lihat
                        lebih detail </a>
                </div>
            </div>
            <div class="flex justify-center w-72 h-96 bg-cover bg-center bg-slate-300 bg-blend-multiply group lg:w-64 lg:h-80 xl:w-60 xl:h-80"
                style="background-image: url('/img-content/populer_rajaampat.jpg')">
                <div class="text-center w-full text-white self-end mb-5 flex flex-col items-center">
                    <h1 class="text-3xl font-semibold">Raja Ampat</h1>
                    <p class="text-lg">10 jt+ Pengunjung Pertahun</p>
                    <a class="w-fit btn bg-transparent hover:bg-primary glass border-none mt-5 rounded-none"> Lihat
                        lebih detail </a>
                </div>
            </div>
            <div class="flex justify-center w-72 h-96 bg-cover bg-center bg-slate-300 bg-blend-multiply group lg:w-64 lg:h-80 xl:w-60 xl:h-80"
                style="background-image: url('/img-content/populer_tamanlautbunakean.jpg')">
                <div class="text-center w-full text-white self-end mb-5 flex flex-col items-center">
                    <h1 class="text-3xl font-semibold">Taman Laut Bunaken</h1>
                    <p class="text-lg">5 jt+ Pengunjung Pertahun</p>
                    <a class="w-fit btn bg-transparent hover:bg-primary glass border-none mt-5 rounded-none"> Lihat
                        lebih detail </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end category and popular tour -->



    <!-- featured tour -->
    <section class="py-20 w-full block px-16 sm:px-20">
        <!-- title content -->
        <div class="text-center mb-5">
            <h5 class="uppercase text-primary text-sm font-semibold">Wisata terbaik yang dapat anda kunjungi</h5>
            <h1 class="text-slate-600 font-semibold text-2xl normal-case">Wisata Unggulan Di Indonesia</h1>
        </div>
        <!-- end titile content -->

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="w-full" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" checked />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        Raja Ampat
                        <div class="badge badge-success">baru!</div>
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">Papua
                                Barat</small></li>
                        <li class="flex justify-between"><small>Category</small><small
                                class="font-semibold">Bahari</small></li>
                        <li class="flex justify-between"><small>Harga Tiket</small><small class="font-semibold">Rp.
                                1.000.000,-</small></li>
                    </ul>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end featured tour -->



    <!-- footer -->
    <footer class="footer p-10 bg-base-200 text-base-content">
        <div class="text-left">
            <a class="btn btn-ghost normal-case text-3xl hover:bg-transparent"><span
                    class="text-primary h">Nusan</span>Trip</a>
            <p>ACME Industries Ltd.<br />Providing reliable tech since 1992</p>
        </div>
        <div>
            <span class="footer-title">Services</span>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </div>
        <div>
            <span class="footer-title">Company</span>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <span class="footer-title">Legal</span>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </div>
        <div>
            <span class="footer-title">Social</span>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </footer>

    <script src="/fontawesome-free/js/all.min.js"></script>
</body>

</html>
