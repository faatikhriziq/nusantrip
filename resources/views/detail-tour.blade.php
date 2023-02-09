@extends('layouts.user')

@push('headScripts')
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
@endpush
@section('main')
    <div class="w-full  px-32 py-8 bg-white">
        <h2 class="text-primaryDarken uppercase mb-2 font-semibold">
            < featured tours</h2>
                <div class="flex text-slate-600 mb-5">
                    <span class="mr-2">Home </span>
                    <p class="mr-2">/ </p><span class="mr-2"> Tours </span>
                    <p class="mr-2">/ </p><span class="mr-2">{{ $tourName }}</span>
                </div>
                <div class="w-full bg-white ">
                    <h1 class="text-4xl font-bold mb-5">{{ $tourName }}</h1>
                    <div class="flex items-center mb-2">
                        <svg aria-hidden="true" class="text-yellow-400 w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-yellow-400 w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Second star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-yellow-400 w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-yellow-400 w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 dark:text-gray-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <a href="#"
                            class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73
                            reviews</a>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <a href="" class="link text-sm ">{{ $tourCategory }}</a>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <a href="" class="link text-sm ">Tegal, Jawa Tengah</a>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-9">
                        <div class="w-full bg-white mb-5">

                            <img src="{{ asset($tourImage) }}" alt=""
                                class="w-full h-[500px] rounded-tl-sm rounded-tr-sm mb-5" >
                            <div class="w-full bg-white mb-24">
                                <p class="text-lg mb-10">{{ $tourDesc }}</p>
                                <ul class="text-slate-700">
                                    <li class="font-semibold text-lg mb-3"><i
                                            class="fa-solid fa-clock mr-3"></i><span>Jadwal Buka : </span>
                                        <p class="font-normal">{{ $tourHour }}</p>
                                    </li>
                                    <li class="font-semibold text-lg mb-3"><i
                                            class="fa-solid fa-location-dot mr-3"></i></i><span>Lokasi : </span>
                                        <p class="font-normal normal-case">{{ $tourRegency }}, {{ $tourProvince }}</p>
                                    </li>
                                    <li class="font-semibold text-lg mb-3"><i
                                            class="fa-solid fa-address-card mr-3"></i><span>Alamat Lengkap : </span>
                                        <p class="font-normal">{{ $tourAddress }}</p>
                                    </li>
                                    <li class="font-semibold text-lg mb-3"><i
                                            class="fa-solid fa-layer-group mr-3"></i><span>Kategori : </span>
                                        <p class="font-normal">{{ $tourCategory }}</p>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>
                    <div class=" col-span-3 ">
                        <div class="w-full bg-primary text-white px-6 py-3">

                            <div class=" flex justify-between items-center mb-1">
                                <h1 class=" text-xl font-semibold ">Komentar Pengguna</h1>

                            </div>
                            <a class="flex items-center cursor-pointer link" href="#comments">
                                <p class=" mr-2">Ketik Komentar</p>
                                <i class="fa-solid fa-pen  text-[13px]"></i>
                            </a>
                        </div>
                        <div class="w-full  bg-white drop-shadow-md border-t-2  px-4 py-3">
                            <div class=" bg-white">
                                <article
                                    class=" text-xs bg-white border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-xs text-gray-900 dark:text-white">
                                                <img class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Helene Engels">Helene Engels</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400"><time pubdate
                                                    datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                        </div>

                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the
                                        Backend
                                        development and explored some of the tools to design my Side Projects.</p>
                                    <div class="flex items-center mt-4 space-x-4">

                                    </div>
                                </article>
                                <article
                                    class=" text-xs bg-white border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-xs text-gray-900 dark:text-white">
                                                <img class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Helene Engels">Helene Engels</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400"><time pubdate
                                                    datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                        </div>

                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the
                                        Backend
                                        development and explored some of the tools to design my Side Projects.</p>
                                    <div class="flex items-center mt-4 space-x-4">

                                    </div>
                                </article>
                                <article
                                    class=" text-xs bg-white border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-xs text-gray-900 dark:text-white">
                                                <img class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Helene Engels">Helene Engels</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400"><time pubdate
                                                    datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                        </div>

                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the
                                        Backend
                                        development and explored some of the tools to design my Side Projects.</p>
                                    <div class="flex items-center mt-4 space-x-4">

                                    </div>
                                </article>
                                <article
                                    class=" text-xs bg-white border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-xs text-gray-900 dark:text-white">
                                                <img class="mr-2 w-6 h-6 rounded-full"
                                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                    alt="Helene Engels">Helene Engels</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400"><time pubdate
                                                    datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                        </div>

                                    </footer>
                                    <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the
                                        Backend
                                        development and explored some of the tools to design my Side Projects.</p>
                                    <div class="flex items-center mt-4 space-x-4">

                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                </div>
                <h1 class="font-semibold text-3xl mb-2">Lokasi Map</h1>
                <div class="grid grid-cols-12 gap-4 mb-16">
                    <div class="col-span-7">
                        <div class="w-full bg-white">
                            <div class="mb-2">
                                <p class="link  text-sm">{{$tourAddress}}</p>
                            </div>
                            <div id="map" class="w-full h-96 mb-3"></div>
                            <a class="btn btn-primary w-full glass flex items-center "><i
                                    class="fa-solid fa-route mr-2 text-xl"></i> <span>Open navigation map</span> </a>
                        </div>
                    </div>
                    <div class="col-span-5">
                        <div class="mb-4">
                            <h3 class="text-xl font-semibold mb-1">Rekomendasi Hotel Terdekat dari Agrowisata Melon</h3>
                            <p><i class="fa-solid fa-location-dot"></i> {{ $tourRegency }}, {{ $tourProvince }}</p>
                        </div>
                        <div class="flex flex-wrap flex-row">
                            <div class="mb-5">
                                <div class="flex">
                                    <img src="{{ asset('img-content/agrowisata-melon.jpg') }}"
                                        class="aspect-video h-24 w-36">
                                    <div class="ml-3 ">
                                        <h3 class="text-xl hover:link ml-1 font-semibold">Hotel Horizon</h3>
                                        <div class="flex items-center ml-1 mb-3">
                                            <ul class="flex justify-center">
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                            </ul>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <p class="hover:link">124 Reviews</p>
                                        </div>
                                        <div class="flex items-center">
                                            <h6>Harga Rp 1200000,-</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Tegal</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Jawa Tengah</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="flex">
                                    <img src="{{ asset('img-content/agrowisata-melon.jpg') }}"
                                        class="aspect-video h-24 w-36">
                                    <div class="ml-3 ">
                                        <h3 class="text-xl hover:link ml-1 font-semibold">Hotel Horizon</h3>
                                        <div class="flex items-center ml-1 mb-3">
                                            <ul class="flex justify-center">
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                            </ul>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <p class="hover:link">124 Reviews</p>
                                        </div>
                                        <div class="flex items-center">
                                            <h6>Harga Rp 1200000,-</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Tegal</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Jawa Tengah</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="flex">
                                    <img src="{{ asset('img-content/agrowisata-melon.jpg') }}"
                                        class="aspect-video h-24 w-36">
                                    <div class="ml-3 ">
                                        <h3 class="text-xl hover:link ml-1 font-semibold">Hotel Horizon</h3>
                                        <div class="flex items-center ml-1 mb-3">
                                            <ul class="flex justify-center">
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500 mr-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                        data-icon="star" class="w-4 text-yellow-500" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                        </path>
                                                    </svg>
                                                </li>
                                            </ul>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <p class="hover:link">124 Reviews</p>
                                        </div>
                                        <div class="flex items-center">
                                            <h6>Harga Rp 1200000,-</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Tegal</h6>
                                            <span class="w-1 h-1 mx-1.5 bg-slate-800 rounded-full dark:bg-gray-400"></span>
                                            <h6>Jawa Tengah</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>



                </div>
                <section class="dark:bg-gray-900 py-8 lg:py-16 grid grid-cols-12 gap-4">
                    <div class="col-span-3 pl-8 ">


                        <div class="flex items-center mb-3">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white">4.95 out of 5</p>
                        </div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">1,745 global ratings</p>
                        <div class="flex items-center mt-4">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">5 star</span>
                            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                <div class="h-5 bg-yellow-400 rounded" style="width: 70%"></div>
                            </div>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">70%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4 star</span>
                            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                <div class="h-5 bg-yellow-400 rounded" style="width: 17%"></div>
                            </div>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">17%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">3 star</span>
                            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                <div class="h-5 bg-yellow-400 rounded" style="width: 8%"></div>
                            </div>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">8%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">2 star</span>
                            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                <div class="h-5 bg-yellow-400 rounded" style="width: 4%"></div>
                            </div>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1 star</span>
                            <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                <div class="h-5 bg-yellow-400 rounded" style="width: 1%"></div>
                            </div>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1%</span>
                        </div>




                    </div>

                    <div class="max-w-2xl  px-4 col-span-9" id="comments">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                        </div>
                        <form class="mb-6">
                            <div
                                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="6"
                                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit"
                                class=" bg-primary inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Post comment
                            </button>
                        </form>
                        <article
                            class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                            alt="Bonnie Green">Bonnie Green</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-03-12" title="March 12th, 2022">Mar. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment3"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges,
                                myths and stages the UX designer should consider while creating the design strategy.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article
                            class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                            alt="Helene Engels">Helene Engels</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                </div>
                                <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment4"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the Backend
                                development and explored some of the tools to design my Side Projects.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article
                            class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                            alt="Bonnie Green">Bonnie Green</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-03-12" title="March 12th, 2022">Mar. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment3"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges,
                                myths and stages the UX designer should consider while creating the design strategy.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article
                            class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                            alt="Helene Engels">Helene Engels</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                </div>
                                <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment4"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the Backend
                                development and explored some of the tools to design my Side Projects.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                    </div>
                </section>



    </div>
@endsection

@push('scripts')
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZmFhdGlraHJpemlxIiwiYSI6ImNsYXJhOXpxNTFqcGwzcW1xYzV0aDlrdG0ifQ.OgX1k-R_xfg2vj5hxIzwng';

        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [{{ $long }},{{$lat}}],
            zoom: 12
        });

        // Create a default Marker and add it to the map.
        const marker1 = new mapboxgl.Marker({
                color: 'red',
            })
            .setLngLat([{{ $long }},{{$lat}} ])
            .addTo(map);

        // Add zoom and rotation controls to the map.
        map.addControl(new mapboxgl.NavigationControl());
    </script>
@endpush
