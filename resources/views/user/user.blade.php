<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Heroes · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      @media (min-width: 992px) {
      .rounded-lg-3 { border-radius: .3rem; }
      }

    </style>


    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
<body>

    <main>
        {{-- halaman home start  --}}
    <div class="text-center">

       <div class="mb-5 mt-5 m-5 border border-3 border-dark ">
        <div class="d-grid gap-1 d-sm-flex justify-content-sm-center  me-5 ">
            <a href="beranda" class="p-1 m-2 text-dark text-decoration-none me-5 fw-semibold">HALAMAN UTAMA</a>
            <p class="m-2 border border-2 border-dark"></p>
            <a href="login" class="p-1 m-2  text-dark text-decoration-none ms-5 fw-semibold">LOG OUT</a>
        </div>
     </div>

    </main>

    <div class="d-flex justify-content-between m-2" >
        <p class="px-5 me-3 fw-medium fs-5">BARANG-BARANG DI JURUSAN TJKT</p>
        <a href="">
            <button class="btn btn-secondary px-5 me-5" type="button">PINJAM BARANG</button>
        </a>
    </div>

    <div class="m-5 ">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th ">NAMA BARANG</th>
                    <th>PEMBUAT BARANG</th>
                    <th>TANGGAL BARANG DIMASUKKAN</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                  <th scope="row">tang crimping</th>
                  <td>Mark</td>
                  <td scope="row">Otto</td>
                </tr>
            </tbody>
          </table>
    </div>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

