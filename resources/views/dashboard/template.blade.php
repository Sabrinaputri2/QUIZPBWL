<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('asset/bootstrap-5.3.0-dist/css/bootstrap.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              {{ csrf_field() }}
              <button class="nav-link" type="submit">logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="m-4">
    <div class="row">
      <div class="col-md-3">
        <div class="card bg-dark">
          <div class="card-header text-white">
            Menu
          </div>
          <ul class="list-group list-group-flush">
            <a href="/user" style="text-decoration: none;"><li class="list-group-item bg-dark text-white menu">User</li></a>
            <a href="/golongan" style="text-decoration: none;"><li class="list-group-item bg-dark text-white menu">Golongan</li></a>
            <a href="/pelanggan" style="text-decoration: none;"><li class="list-group-item bg-dark text-white menu">Pelanggan</li></a>
          </ul>
        </div>
      </div>

      @yield('content')

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="{{ asset('asset/bootstrap-5.3.0-dist/js/bootstrap.js') }}"></script>
</body>
</html>