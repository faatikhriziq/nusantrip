@push('mapboxScripts')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

@endpush
@section('mapbox-gl-geocoder')
    <!-- Load the `mapbox-gl-geocoder` plugin. -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
          type="text/css">
@endsection
<div class="content-wrapper container">
    <div class="page-heading">
        <h4> Tambah Hotel</h4>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form action="#" wire:submit.prevent="store" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <h5>Pilih dan cari lokasi Hotel</h5>
                                            <div id='map' style=' height: 500px;' class="img-thumbnail"></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-4">
                                        <div class="col-6">
                                            <label>latitude</label>
                                            <div class="form-group ">
                                                <input wire:model="lat" type="text"
                                                       class="form-control  @error('lat')
                                                is-invalid
                                            @enderror "
                                                       id="basicInput" placeholder=" ">
                                                @error('lat')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>longitude</label>
                                            <div class="form-group ">
                                                <input wire:model="long" type="text"
                                                       class="form-control  @error('long')
                                                is-invalid
                                            @enderror "
                                                       id="basicInput" placeholder="">
                                                @error('long')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
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
                                                        id="kabupaten" wire:model="selectedRegency">
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
                                            <label>Nama Hotel</label>
                                            <div class="form-group">
                                                <input type="text"
                                                       class="form-control @error('name')
                                                is-invalid
                                            @enderror "
                                                       id="basicInput" placeholder="" wire:model="name">
                                                @error('name')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div><div class="col-6">
                                            <label>Harga</label>
                                            <div class="form-group">
                                                <input type="text"
                                                       class="form-control @error('price')
                                                is-invalid
                                            @enderror "
                                                       id="basicInput" placeholder="" wire:model="price">
                                                @error('price')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>



                                    @if ($img_thumbnail)
                                        <div class="col-12">
                                            <h5>Preview</h5>
                                            <img src="{{ $img_thumbnail->temporaryUrl() }}" height="500"
                                                 class="img-thumbnail mb-3">
                                        </div>
                                    @endif

                                    <label>Foto Hotel</label>
                                    <div class="form-group mb-3">
                                        <input
                                            class="form-control  @error('img_thumbnail')
                                                is-invalid
                                            @enderror "
                                            type="file" id="formFile" wire:model="img_thumbnail">
                                        @error('img_thumbnail')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label>Deskripsi</label>
                                    <div class="form-group mb-3">

                                        <textarea
                                            class="form-control  @error('description')
                                                is-invalid
                                            @enderror "
                                            name="" id="" cols="30" rows="10" wire:model="description"></textarea>
                                        @error('description')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label>Alamat Lengkap</label>
                                            <div class="form-group mb-3">
                                                <input type="text"
                                                       class="form-control  @error('address')
                                                is-invalid
                                            @enderror "
                                                       id="basicInput" placeholder="" wire:model="address">
                                                @error('address')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-light-secondary me-3"
                                            data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Save</span>
                                    </button>
                                </div>
                            </form>
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
                        speed: 3, // Make the flying slow.
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


    </script>
@endpush
