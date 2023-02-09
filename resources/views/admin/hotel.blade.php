<div class="content-wrapper container">
    <div class="page-heading">
        <h3>Hotel</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <a href="/add-hotel" type="button" class="btn btn-outline-primary mb-3">
                                Add Hotel
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
                                        <th>ROOM TYPE</th>
                                        <th>LOCATION</th>
                                        <th>PRICE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hotels as $index => $hotel)


                                    <tr>
                                        <td>{{ $hotels->firstItem() + $index }}</td>
                                        <td>{{$hotel->name}}</td>
                                        <td>null</td>
                                        <td>{{$hotel->regency->name}},{{$hotel->province->name}}</td>
                                        <td>@currency($hotel->price)</td>
                                        <td class="text-bold-500">
                                            <a href="" style="cursor: pointer" class=" text-primary me-2"><i
                                                    class="bi bi-pencil"></i> Edit</a>
                                            <a wire:click="delete({{$hotel->id}})" style="cursor: pointer" class="text-danger "><i class="bi bi-x"></i>
                                                Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                {{$hotels->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
