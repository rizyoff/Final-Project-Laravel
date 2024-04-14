<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    html,body {
        height: 100%;
        }

        .form-signin {
        max-width: 330px;
        padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

  </head>
    <!-- body form login -->
  <body class="d-flex align-items-center py-4 bg-body-tertiary">

    <!-- form login main start -->

    <main class=" w-90 m-auto">
        <form>
            <div class="align-middle">

                <h1 class="text-center ">
                    PEMINJAMAN BARANG
                </h1>
                <p class="text-center fw-medium">
                    Silahkan Pinjam Barang Yang Dibutuhkan
                </p>
            </div>

            {{-- login session  --}}

            <div class=" mb-3">
                <label for="floatingInput" class="form-label fw-medium">NAMA BARANG</label>
                <input type="name" class="form-control p-2 border-2 border-dark" id="floatingInput" placeholder="example:pc">
            </div>

            <div class=" mb-3">
                <label for="floatingDatePinjam" class="form-label fw-medium">TANGGAL PEMINJAMAN</label>
                <input type="date" class="form-control p-2 border-2 border-dark" id="floatingDatePinjam">
            </div>

            <div class=" mb-3">
                <label for="floatingInputKembali" class="form-label fw-medium">TANGGAL PENGEMBALIAN</label>
                <input type="date" class="form-control p-2 border-2 border-dark" id="floatingInputKembali">
            </div>

            <div class="mb-3">
                <label for="floatingNameUser" class="form-label fw-medium ">USERNAME PEMINJAM</label>
                <input type="name" class="form-control p-2 border-2 border-dark" id="floatingNameUser" placeholder="example:agus">
            </div>

            <button class="btn btn-dark w-100 py-2" type="submit">PINJAM</button>

        </form>
    </main>
    {{-- form main end --}}
        <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
