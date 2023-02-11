<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Icon APP -->
    <link href="assets/img/book-bg.png" rel="icon">
    <!-- Select 2 -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="https://data.perpusnas.go.id/assets/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/fontawesome-free/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://data.perpusnas.go.id/assets/css/bootstrap5.css" rel="stylesheet">
    <script src="https://data.perpusnas.go.id/assets/js/bootstrap5.js"></script>
    <!-- App Style -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/css/app.css">
    <!-- Custom Override -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/css/override_selec2.css">
    <!-- jQuery -->
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery/jquery.min.js"></script>
    <!-- jquery-validation -->
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/jquery-validation/additional-methods.min.js"></script>
</head>

<body>
{{-- COBAINNN --}}

    <div class="container content">
        <form id="create-form" action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Create Book</h3>
            <hr>

            <fieldset>
                <label for="">Judul</label>
                <input class="input" type="text" name="judul">
                @error('judul')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">Penulis</label>
                <input class="input" type="text" name="penulis">
                @error('penulis')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">Penerbit</label>
                <input class="input" type="text" name="penerbit">
                @error('penerbit')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">No. ISBM</label>
                <input class="input" type="number" name="isbn">
                @error('isbn')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">Sinopsis</label>
                <textarea class="input" name="sinopsis" tabindex="5"></textarea>
                @error('sinopsis')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">Kategori Buku</label>
                <select class="input" name="kategori" type="text">
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                    @endforeach
                </select>
                @error('kategori')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>

            <fieldset>
                <label for="">Sampul</label>
                {{-- ihhh kemana  --}}
                <input class="input" name="image" id="image" type="file" class="file-upload-field">
                @error('image')
                    <div class="error">{{ $message }}</div>
                @enderror
            </fieldset>
            <br>
            <fieldset>
                <button class="input" type="submit" id="contactus-submit">Submit</button>
            </fieldset>
            <fieldset>
        </form>
    </div>
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/select2/js/select2.full.min.js"></script>

</body>

</html>
