@extends('layouts.user')

@section('main')
    <!-- hero section -->
    <div class="hero h-[25rem]" style="background-image: url(/img-content/bali.jpg)">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content">
            <div class="max-w-4xl">
                <h1 class="mb-5 text-5xl font-bold normal-case">Rencanakan Perjalananmu Sekarang</h1>
                <p class="mb-5 text-lg">Sadar nggak? Kalau kamu sudah lama banget nggak jalan-jalan. Kamu mulai resah, gelisah, uring-uringan, bahkan kesel sama semua hal. Nusantara Trip bisa kasih solusi buat kamu, yaitu jelajahi Wisata Yang ada di Nusantara sekarang!.</p>
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
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl"> SEJARAH</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/ziarah.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">ZIARAH</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/budaya_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl">AGROWISATA</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/bahari_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl"> BAHARI</h1>

                    <i
                        class="fa-solid fa-arrow-right text-3xl -mr-36 group-hover:mr-0 transition-all duration-500 ease-in-out"></i>
                </div>
            </a>
            <a class="w-80 h-40 bg-cover rounded-md hover:bg-slate-400 group bg-blend-multiply transition-all duration-500 cursor-pointer ease-in-out overflow-hidden lg:w-72 lg:h-36"
                style="background-image: url('/img-content/cagaralam_category.jpg')" href="#">
                <div class="h-full flex justify-around items-center text-white">
                    <h1 class="text-2xl font-semibold text-shadow-lg lg:text-xl"> ALAM</h1>

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
    <section class=" w-full block px-16 sm:px-20">

        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800">
                <style>
                    .zoom:hover img {
                        transform: scale(1.1);
                    }
                </style>
                 <h5 class="uppercase text-primary text-sm font-semibold text-center">best city in indonesia</h5>
                <h2 class="text-3xl font-bold mb-12 text-center">
                    Kota-Kota Besar Di Indonesia
                </h2>

                <div class="grid lg:grid-cols-3 gap-6">
                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/jakarta.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Jakarta</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>

                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/surabaya.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Surabaya</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>

                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/medan.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Medan</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>

                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/bandung.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Bandung</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>

                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/aceh.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Aceh</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>

                    <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                        <img src="{{ asset('img-content/semarang.jpg') }}"
                            class="w-full transition duration-300 ease-linear align-middle" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <div class="flex justify-start items-end h-full">
                                    <h5 class="text-lg font-bold text-white m-6">Semarang</h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                                    style="background-color: rgba(253, 253, 253, 0.15)"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->
        {{-- <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
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
        </div> --}}
    </section>
    <!-- end featured tour -->
@endsection
