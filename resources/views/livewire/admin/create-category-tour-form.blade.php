<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form form-vertical" wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="col-4">
                        @if ($image)
                        <h5>Photo Preview:</h5>
                        <img src="{{ $image->temporaryUrl() }}" height="300" class="img-thumbnail mb-3">
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
                            <button type="submit" class="btn btn-primary me-1 mb-1" href="#">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
