<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi </title>
    <!-- Icon APP -->
    <link href="assets/img/book-bg.png" rel="icon">
    <!-- Select 2 -->
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://data.perpusnas.go.id/assets/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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

<style>
    *{
        background-color: #2a5298;
        font-family: "Open Sans", sans-serif;
    }
    .btn{
        background-color: #3498db;
        color: white;
        font-size: 12px;
    }
</style>

<body class="container-fluid h-full m-0 p-0">
<section>
    <div class="h-full d-flex justify-content-center">
      @csrf
    <form id="form_login" class="rounded-xl bg-white border-gray min-w-sm p-4 my-auto" action="{{route('register.post')}}" method="POST">
        <input type="hidden" name="csrf_test_name" value="d1ce9cf6b9987582e60bb6d90477551d" />        
        <div class="mb-4 bg-white text-center">
            <div class="mt-2 form-logo-label bg-white"> <strong class="bg-white">REGISTRASI</strong></div>
        </div>

        <div class="mt-2 bg-white">
            <label class="m-0 form-label bg-white">Full Name</label>
            <div class="input-group bg-white">
                <input type="text" name="name" id="name" class="form-control bg-white" value="" required>
            </div>
        </div>

        <div class="mt-2 bg-white">
          <label class="m-0 form-label bg-white">Email</label>
          <div class="input-group bg-white">
              <input type="email" name="email" id="email" class="form-control bg-white" value="" required>
          </div>
      </div>

      <div class="mt-2 bg-white">
        <label class="m-0 form-label bg-white">Number Phone</label>
        <div class="input-group bg-white">
            <input type="number" name="tlp" id="tlp" class="form-control bg-white" value="" required>
        </div>
    </div>

        <div class="mt-2 bg-white">
          <label class="m-0 form-label bg-white">Address</label>
          <div class="input-group bg-white">
              <input type="text" name="address" id="address" class="form-control bg-white" value="" required>
          </div>
      </div>

        <div class="mt-2 bg-white">
            <label class="m-0 form-label bg-white">Password</label>
            <div class="input-group bg-white">
                <div class="input-group m-0 p-0 bg-white">
                    <input type="password" id="input_password" name="password" id="password" class="form-control bg-white" value="" required>
                    <span class="input-group-text pointer-click bg-white" id="password_icon" onclick="tooglePassword('input_password', 'password_icon')">
                        <i class="fa fa-eye-slash bg-white" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
        @csrf

        <div class="my-3 d-grid gap-4 d-flex justify-content-between bg-white">
            <a href="/" class="btn">Back</a>
            <button type="submit" class="btn ">Submit</button>
        </div>

        <div class="text-center ">
            <div class="bg-white">
                <a class="w-100  btn-sm btn-link bg-white" style="text-decoration: none"  href="/log"> Have an Account</a>
            </div>
        </div>
    </form>
</div>
</section>

    <script src="https://data.perpusnas.go.id/assets/theme/plugins/select2/js/select2.full.min.js"></script>

    </body>
</html>