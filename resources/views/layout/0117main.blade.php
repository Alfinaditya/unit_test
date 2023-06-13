<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum | 0117 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<body style="background-color: #ffffff">
    <nav class="navbar-expand-lg navbar-dark bg-white" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav"></ul>
                <div class="d-xl-flex mx-auto align-items-xl-center" style="margin: -20px auto -40px">
                    <div class="h1 p-2 text-center" style="margin-left: -50px">
                         <p style="margin-top: 50px;"> </p>
                        <p>SELAMAT DATANG DI PRAKTIKUM PAW</p>
                        <p style="margin-top: 80px;"> </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-tabs">
  <div class="container">
  <a class="navbar-brand" href="#">PAW 2022</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kegiatan 1
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item"  href="/Home">Home </a>
            <li><a class="dropdown-item" href="/Artikel">Artikel</a></li>
            <li><a class="dropdown-item"  href="/ContactUs">Contact Us</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kegiatan 2
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item"  href="/Select">Select</a>
            <li><a class="dropdown-item"  href="/SelectWhere">Select Where</a>
            <li><a class="dropdown-item"  href="/SelectJoin">Select Join</a>
            <li><a class="dropdown-item"  href="/JoinLike">Join Like</a>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kegiatan 3 & 4
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item"  href="/karyawan">CRUD & Cetak PDF</a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mt-4">
    @yield('container')
    </div>
</body>
</html>
