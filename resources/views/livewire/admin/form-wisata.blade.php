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
<form action="#">
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
                        placeholder="" wire:model="name">
                </div>
            </div>
            <div class="col-6">
                <label>Kategori Wisata</label>
                <div class="form-group">
                    <select class=" form-select" id="desa" wire:model="category">
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


        <div class="col-6">
            @if ($image)
                <div class="col-4">
                    <h5>New Image :</h5>
                    <img src="{{ $image->temporaryUrl() }}" height="300"
                        class="img-thumbnail mb-3">
                </div>
            @endif
        </div>
        <label>Foto Thumbnail</label>
        <div class="form-group mb-3">
            <input class="form-control" type="file" id="formFile" wire:model="image">
        </div>
        <label>Deskripsi</label>
        <input id="x" type="hidden" name="content" wire:model="description">
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
                <div wire:click="refresh" style="cursor: pointer">refresh</div>
                <h5>Pilih dan cari lokasi wisata</h5>
                <div id='map' style=' height: 500px;' class="img-thumbnail" ></div>
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
</form>
@push('scripts')
<script>
      document.addEventListener("DOMContentLoaded", () => {

        Livewire.hook('element.updated', (el, component) => {

        })

    });
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





</script>
@endpush

