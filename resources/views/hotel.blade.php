@extends('layouts.user')

@section('main')
    <div class="w-full bg-base h-20 px-5 py-12 flex items-center ">
        <div class="form-control">
            <div class="input-group">
                <input type="text" placeholder="Search…" class="input  input-bordered" wire:model="search" />
                <button class="btn  btn-square btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="w-full px-32 py-8 bg-slate-50">
        <h2 class="text-xl text-slate-800 font-semibold mb-7">Hotels Di Indonesia</h2>
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 mb-8">
            @foreach($hotels as $hotel)

            <div class="card bg-base-100 shadow-lg rounded-sm">
                <figure>
                    <img src="{{ $hotel->img_thumbnail }}" alt="Shoes" class="w-full h-[230px]" />
                </figure>
                <div class="card-body p-3">
                    <div class="rating rating-sm items-center">
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating-6" class="mask mask-star-2 bg-orange-400" />
                        <span class="text-orange-400 font-semibold text-sm ml-3">100 Reviews</span>
                    </div>

                    <h2 class="card-title">
                        {{ $hotel->name }}

                    </h2>
                    <p> {{ Str::limit($hotel->description, 50) }}</p>
                    <ul>
                        <li class="flex justify-between"><small>Lokasi</small><small class="font-semibold">{{$hotel->regency->name}}</small></li>
                        <li class="flex justify-between"><small>Harga</small><small class="font-semibold uppercase">@currency($hotel->price)</small>
                        </li>
                        <li class="flex justify-between"><small>Long & Lat</small><small class="font-semibold">{{ Str::limit($hotel->longitude, 10) }},{{ Str::limit($hotel->latitude, 10) }}</small>
                        </li>

                    </ul>
                    <div class="card-actions justify-start">
                        <a href="/detail-hotel/{{ $hotel->id }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {{ $hotels->links() }}
        <a href="" class="text-primaryDarken font-semibold  link-hover ">Lihat Lebih Banyak (230+) </a>
    </div>
@endsection
