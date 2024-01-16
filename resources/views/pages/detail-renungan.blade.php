<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="garisAs" content="projek" />
    <title>GPIB SILOAM PONTIANAK @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/pages/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/style.css') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Logo -->
                <a href="{{ route('beranda') }}" class="navbar-brand">
                    <img src="{{ asset('assets/pages/img/logo-80.png') }}" alt="GPIB SILOAM PONTIANAK Logo"
                        class="img-fluid mb-3" style="max-width: 100px" />
                    <h2 class="text-uppercase">GPIB SILOAM PONTIANAK</h2>
                </a>

                <!-- Tulisan GPIB SILOAM PONTIANAK -->
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white p-4 rounded shadow">
                <h1 class="text-center">{{ $renungan->judul }}</h1>
                <h6 class="text-center text-muted mb-4">{{ $renungan->bacaan_alkitab }}</h6>
                @if ($renungan->thumbnail)
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/thumbnails/') . '/' . $renungan->thumbnail }}"
                            class="img-fluid rounded w-100" style="height: 400px" alt="Thumbnail" />
                    </div>
                @endif
                <p class="mb-4">
                    {!! html_entity_decode($renungan->isi_bacaan) !!}
                </p>

                <hr class="my-4" />

                <p class="text-muted">Diupload: <span class="fw-bold">{{ $diupload }}</span></p>
                <hr class="my-4" />
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ isset($prevRenungan) ? route('detail-renungan', $prevRenungan->slug) : '#' }}"
                        class="btn" style="background-color: chocolate">
                        <i class="fas fa-chevron-left"></i> <<
                    </a>
                    <a href="{{ isset($nextRenungan) ? route('detail-renungan', $nextRenungan->slug) : '#' }}"
                        class="btn" style="background-color: chocolate"">
                        >> <i class="fas fa-chevron-right"></i>
                    </a>
            </div>
        </div>
    </div>
    </div>
    @include('components/footer')

    <script src="{{ asset('assets/pages/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
