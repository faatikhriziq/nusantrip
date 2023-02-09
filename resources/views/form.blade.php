<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <form action="">
        <select class="form-select" aria-label="Default select example" id="provinsi">
            <option>Open this select menu</option>
            @foreach ($provinces as $provinsi)
                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
            @endforeach
        </select>
        <select class="form-select" aria-label="Default select example" id="kabupaten">
            <option selected>Open this select menu</option>

        </select>
        <select class="form-select" aria-label="Default select example" id="kecamatan">
            <option selected>Open this select menu</option>

        </select>
        <select class="form-select" aria-label="Default select example" id="desa">
            <option selected>Open this select menu</option>

        </select>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getkabupaten') }}",
                    data : {id_provinsi : id_provinsi},
                    cache : false,
                    success : function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error : function (data) {
                        console.log('error HADUHH!!',data)

                    }
                })
            })
        })


    </script>
</body>

</html>
