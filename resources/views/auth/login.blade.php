<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('asset/bootstrap-5.3.0-dist/css/bootstrap.css') }}" rel="stylesheet">
  <style>
    body{
      background-color: #0d6efd;
    }
  </style>
</head>
<body>
  <div class="mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form action="/loginCheck" method="post">
                {{ csrf_field() }}
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email anda">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan password anda">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <link href="{{ asset('asset/bootstrap-5.3.0-dist/js/bootstrap.js') }}" rel="stylesheet">
</body>
</html>
