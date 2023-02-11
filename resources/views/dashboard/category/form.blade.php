<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create </title>
    <!-- Icon APP -->
    <link href="assets/img/book-bg.png" rel="icon">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
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

    
<div class="container content">  
    <form id="create-form" action="{{ route('addCategory')}}" method="POST">
      @csrf
      <h3>Create Todo</h3>
      <hr>
      
      <fieldset>
          <label for="">Title</label>
          <br>
          <input class="input" placeholder="title of todo" type="text" name="category_name">
          @error('category_name')
          <div class="error">{{ $message }}</div>
         @enderror
      </fieldset>
      <br>
      <fieldset>
          <button class="input" type="submit" id="contactus-submit">Submit</button>
      </fieldset>
    
    </form>
  </div>

    <!-- Content -->
    {{--  <div class="h-full d-flex justify-content-center">
        <div class="main-body" style="width: 50%; padding: 1rem;">
        </div>
        <div class="container">
            <h1>Create Category Name</h1>
            <br>
            <form action="{{ route('addCategory') }}" method="post" enctype="multipart/form-data">
                @csrf --}}
                {{-- pakein errornya
                <div class="row">
                    <div class="column">
                        <label for="judul">Category Name</label>
                        <input type="text" name="category_name" placeholder="enter a category name">
                        @error('category_name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" style="cursor: pointer;">Submit</button>
            </form>
        </div>
    </div> --}}
    <script src="https://data.perpusnas.go.id/assets/theme/plugins/select2/js/select2.full.min.js"></script>

</body>

</html>
