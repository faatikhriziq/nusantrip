<div class="content-wrapper container">
    <div class="page-heading">
        <h3>Kategori Wisata</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                @if ($form == false)
                    <!-- Button Show Form -->
                    <button type="button" class="btn icon icon-left btn-primary mb-3" wire:click="showForm">
                        Show Form Category
                    </button>
                @elseif($form == true)
                    <!-- Button Show Form -->
                    <button type="button" class="btn icon icon-left btn-primary mb-3" wire:click="closeForm">
                        Close Form Category
                    </button>
                @endif

                @if ($editMode == true)
                    <!-- Button Show Form -->
                    <button type="button" class="btn icon icon-left btn-primary mb-3" wire:click="closeUpdateform">
                        Close Form Update Category
                    </button>
                @endif

                @if ($form)
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" wire:submit.prevent="store"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="col-4">
                                            @if ($image)
                                                <h5>Photo Preview:</h5>
                                                <img src="{{ $image->temporaryUrl() }}" height="300"
                                                    class="img-thumbnail mb-3">
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" id="first-name-vertical"
                                                        class="form-control @error('name')
                                                        is-invalid
                                                    @enderror "
                                                        placeholder="Nama Budaya" wire:model="name">
                                                    @error('name')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="photo">Foto Thumbnail</label>


                                                    <input type="file" id="photo"
                                                        class="form-control  @error('image')
                                                    is-invalid
                                                @enderror"
                                                        wire:model="image">
                                                    @error('image')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($editMode)
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" wire:submit.prevent="update"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <input type="hidden" wire:model="idCateogry">
                                        <div class="row">
                                            <div class="col-6">
                                                @if ($oldImage != null)
                                                    <div class="col-4">
                                                        <h5>Old Image:</h5>
                                                        <img src="{{ $oldImage }}" height="300"
                                                            class="img-thumbnail mb-3">
                                                    </div>
                                                @endif
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
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" id="first-name-vertical"
                                                        class="form-control @error('name')
                                                    is-invalid
                                                @enderror "
                                                        placeholder="Nama Budaya" wire:model.lazy="name">
                                                    @error('name')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="photo">Foto Thumbnail</label>
                                                    <input type="file" id="photo"
                                                        class="form-control  @error('image')
                                                is-invalid
                                            @enderror"
                                                        wire:model="image">
                                                    @error('image')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-light-success color-danger" style="width: 50%"><i
                                        class="bi bi-check-circle"></i> {{ session('success') }}</div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-light-danger color-danger" style="width: 50%"><i
                                        class="bi bi-check-circle"></i> {{ session('error') }}</div>
                            @endif
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <div class="col-4">
                                    <label for="">Cari Data</label>
                                    <input type="text" class="form-control " wire:model="search">
                                </div>

                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KATEGORI</th>
                                            <th>IMAGE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td class="text-bold-500">{{ $categories->firstItem() + $index }}</td>
                                                <td class="text-bold-500">{{ $category->name }}</td>
                                                <td><img src="{{ $category->image }}" alt="" srcset=""
                                                        width="100"></td>
                                                <td class="text-bold-500">
                                                    <a wire:click="showUpdateform({{ $category->id }})"
                                                        class="btn btn-sm icon btn-primary me-2"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <a wire:click="delete({{ $category->id }})"
                                                        class="btn btn-sm icon btn-danger"><i class="bi bi-x"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $categories->links() }}
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
        $(document).ready(function() {
            window.livewire.on('alert_remove', () => {
                setTimeout(function() {
                    $(".alert").fadeOut('fast');
                }, 3000); // 3 secs
            });
        });
    </script>
@endpush

