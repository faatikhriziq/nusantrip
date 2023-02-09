{{-- @push('mapboxScripts')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>
@endpush
@section('mapbox-gl-geocoder')
    <!-- Load the `mapbox-gl-geocoder` plugin. -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
        type="text/css">
@endsection --}}


@push('mapboxScripts')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>
@endpush
@section('mapbox-gl-geocoder')
    <!-- Load the `mapbox-gl-geocoder` plugin. -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
        type="text/css">
@endsection
<div class="content-wrapper container">
    <div class="page-heading">
        <h3>Wisata</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <a href="/add-wisata" type="button" class="btn btn-outline-primary mb-3">
                                Add Wisata
                            </a>

                            @if (session()->has('success'))
                                <div class="alert alert-light-success color-danger" style="width: 50%"><i
                                        class="bi bi-check-circle"></i> {{ session('success') }}</div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-light-danger color-danger" style="width: 50%"><i
                                        class="bi bi-check-circle"></i> {{ session('error') }}</div>
                            @endif


                            {{-- <form action="#">
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-6"> <label>Provinsi</label>
                                            <div class="form-group">

                                                <select class="form-select" id="provinsi"
                                                    wire:model="selectedProvince">
                                                    <option value="">- Pilih Provinsi -</option>
                                                    @foreach ($provinces as $provinsi)
                                                        <option value="{{ $provinsi->id }}">
                                                            {{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6"><label>Kabupaten</label>
                                            <div class="form-group">
                                                <select class="form-select" aria-label="Default select example"
                                                    id="kabupaten">
                                                    <option value="">- Pilih Kabupaten -</option>
                                                    @if (!is_null($regencies))
                                                        @foreach ($regencies as $regency)
                                                            <option value="{{ $regency->id }}">
                                                                {{ $regency->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label>Nama Wisata</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Kategori Wisata</label>
                                            <div class="form-group">
                                                <select class=" form-select" id="desa">
                                                    <option value="">- Pilih Kategori -</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <label>Foto Thumbnail</label>
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <label>Deskripsi</label>
                                    <input id="x" type="hidden" name="content">
                                    <trix-editor input="x"></trix-editor>

                                    <div class="row mb-3 mt-4">
                                        <div class="col-6">
                                            <label>latitude</label>
                                            <div class="form-group ">
                                                <input wire:model="lat" type="text" class="form-control"
                                                    id="basicInput" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>longitude</label>
                                            <div class="form-group ">
                                                <input wire:model="long" type="text" class="form-control"
                                                    id="basicInput" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <h5>Pilih dan cari lokasi wisata</h5>
                                            <div id='map' style=' height: 500px;' class="img-thumbnail"></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label>Alamat Lengkap</label>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Jadwal Buka</label>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form> --}}
                            {{-- <livewire:admin.form-wisata> --}}



                            <div class="col-4">
                                <label for="">Cari Data</label>
                                <input type="text" class="form-control " wire:model="search">


                            </div>
                            <!-- table striped -->
                            <div class="table-responsive">
                                <table class="table table-striped mb-3">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAME</th>
                                            <th>KATEGORI</th>
                                            <th>LOCATION</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tours as $index => $tour)

                                        <tr>
                                            <td class="text-bold-500">{{ $tours->firstItem() + $index }}</td>
                                            <td>{{ $tour->name }}</td>
                                            <td class="text-bold-500">{{ $tour->category['name'] }}</td>
                                            <td > <div style="text-transform: capitalize;">{{ $tour->regency['name'] }} , {{ $tour->province['name'] }}</div> </td>
                                            <td class="text-bold-500">
                                                <a href="/edit-wisata/{{$tour->id}}" style="cursor: pointer" class=" text-primary me-2"><i
                                                        class="bi bi-pencil"></i> Edit</a>
                                                <a wire:click="delete({{ $tour->id }})" style="cursor: pointer" class="text-danger "><i class="bi bi-x"></i>
                                                    Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $tours->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
@push('scripts')
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiZmFhdGlraHJpemlxIiwiYSI6ImNsYXJhOXpxNTFqcGwzcW1xYzV0aDlrdG0ifQ.OgX1k-R_xfg2vj5hxIzwng';
        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [116.888453, -2.618904],
            zoom: 3.8
        });

        // Add the control to the map.
        map.addControl(
            new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                flyTo: {
                    bearing: 0,
                    // Control the flight curve, making it move slowly and
                    // zoom out almost completely before starting to pan.
                    speed: 0.2, // Make the flying slow.
                    curve: 1, // Change the speed at which it zooms out.
                    // This can be any easing function: it takes a number between
                    // 0 and 1 and returns another number between 0 and 1.
                    easing: function(t) {
                        return t;
                    }
                },
                mapboxgl: mapboxgl
            })
        );

        map.addControl(new mapboxgl.NavigationControl)
        map.on('click', (e) => {
            const longtitude = e.lngLat.lng
            const lattitude = e.lngLat.lat
            var data = e.detail
            @this.long = longtitude
            @this.lat = lattitude
        })


        $(document).ready(function() {
            window.livewire.on('alert_remove', () => {
                setTimeout(function() {
                    $(".alert").fadeOut('fast');
                }, 3000); // 3 secs
            });
        });
    </script>
@endpush

{{--
@push('scripts')
    <script>

            mapboxgl.accessToken =
                'pk.eyJ1IjoiZmFhdGlraHJpemlxIiwiYSI6ImNsYXJhOXpxNTFqcGwzcW1xYzV0aDlrdG0ifQ.OgX1k-R_xfg2vj5hxIzwng';
            const map = new mapboxgl.Map({
                container: 'map',
                // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                style: 'mapbox://styles/mapbox/streets-v12',
                center: [116.888453, -2.618904],
                zoom: 3.8
            });

            // Add the control to the map.
            map.addControl(
                new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    flyTo: {
                        bearing: 0,
                        // Control the flight curve, making it move slowly and
                        // zoom out almost completely before starting to pan.
                        speed: 0.2, // Make the flying slow.
                        curve: 1, // Change the speed at which it zooms out.
                        // This can be any easing function: it takes a number between
                        // 0 and 1 and returns another number between 0 and 1.
                        easing: function(t) {
                            return t;
                        }
                    },
                    mapboxgl: mapboxgl
                })
            );

            map.addControl(new mapboxgl.NavigationControl)
            map.on('click', (e) => {
                const longtitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longtitude
                @this.lat = lattitude
            })

    </script>
@endpush --}}
