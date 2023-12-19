<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
body {
  font-size: larger;
  font-weight: bold;
}

.navbar {
  background-color: #007bff;
  color: black;
  /* margin-bottom: 100px; */
}

.navbar-nav {
  margin-left: auto;
}

.nav-item {
  color: Black;
}

.container {
  color: black;
}


</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FINALS IPT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="{{ url('/home') }}"  class="{{ Request::is('home') ? 'active' : '' }} nav-link" value="login">Home</a>
        </li>
        <li class="nav-item">
        <a href="{{ url('/cars') }}"  class="{{ Request::is('home') ? 'active' : '' }} nav-link" value="login">Cars</a>
        </li>
        <li class="nav-item">
        <a href="{{ url('/customers') }}"  class="{{ Request::is('home') ? 'active' : '' }} nav-link" value="login">Customers</a>
        </li>
        <li class="nav-item">
        <a href="{{ url('/rentals') }}"  class="{{ Request::is('home') ? 'active' : '' }} nav-link" value="login">Rentals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



        

    <!-- <div class="container">
        <h1>Home Page</h1>
        <p>This is the home page content.</p>
    </div> -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
