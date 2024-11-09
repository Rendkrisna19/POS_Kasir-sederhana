<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Cafe Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" href="../../../css/app.css">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: "Poppins", serif;
    }

    .font-judul {
        font-family: "Poppins", serif;
        font-weight: 600;
        font-style: normal;
    }

    .baground-nav {
        background-color: #955FC7FF;
    }

    .baground-image {
        background-image: url('../../../images/baground\ cafe.jpg');
        background-size: cover;

        /* Agar gambar menutupi seluruh layar */
        background-repeat: no-repeat;
        /* Mencegah gambar diulang */
        background-position: center;
        /* Memusatkan gambar */
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        /* Mengisi layar penuh secara vertikal */
        margin: 0;
        position: relative;
    }

    .bg-color {
        background-color: #AF7BE4FF;
    }
    </style>

</head>

<body class=" bg-color baground-image">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light  baground-nav rounded">
            <div class="container-fluid">
                <a class="navbar-brand  font-judul" href="#">KASIR CAFFE SEDERHANA</a>
                <img class="" src="" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
        <a href="{{url('/pos')}}" type="button"
            class="btn btn-primary mt-4 {{ request()->is('pos*', '') || request()->is('/') ? 'active' : '' }}">Tampilan
            POS</a>
        <a href="{{url('/product')}}" type="button"
            class="btn btn-primary mt-4 {{ request()->is('product*') ? 'active' : '' }}">Produk</a>

        <a href="{{url('/order')}}" type="button"
            class="btn btn-primary mt-4 {{ request()->is('order*') ? 'active' : '' }}">Daftar Order</a>

        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>