<!-- navbar section -->
<div class="navbar bg-base-100 px-9 py-0 drop-shadow-md">
    <div class="flex-1 md:flex-none md:mr-7">
        <a class="btn btn-ghost normal-case text-xl hover:bg-transparent"><span
                class="text-primary h" href="/">Nusantara</span>Trip</a>
    </div>
    <div class="flex-1 hidden md:block">
        <ul class="menu menu-horizontal p-0 h-[64px]">
            <li><a href="/tour">Wisata</a></li>
            <li><a href="/hotels">Hotel</a></li>
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
