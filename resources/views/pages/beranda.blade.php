@extends('../components/main')
@section('content')
    <!-- COVER -->
    <header class="text-center">
        <h1>- GPIB SILOAM PONTIANAK -</h1>
        <blockquote class="blockquote">
            <p class="mt-3">
                “Dan orang akan datang dari Timur dan Barat dan dari Utara dan Selatan
                dan mereka duduk makan di dalam Kerajaan Allah”
                <br />
                Lukas 13:29
            </p>
        </blockquote>
        <a href="{{ route('info') }}" class="btn btn-get-started px-4 mt-4"> Sejarah </a>
    </header>
    <!-- Akhir COVER -->

    <!-- RENUNGAN -->
    <div class="container mt-4">
        @if (!empty($renungan))
            <h1 class="text-center mb-4">Renungan Terbaru</h1>
            <div class="row justify-content-start">
                @foreach ($renungan as $data)
                <!-- Card -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="height: 100%">
                        <img src="{{ asset('storage/thumbnails/') . '/' . $data->thumbnail }}"
                            class="card-img-top" alt="Thumbnail" style="height: 100%"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Bacaan: {{ $data->bacaan_alkitab }}</h6>
                            <a href="{{ route('detail-renungan', $data->slug) }}"
                                class="btn btn-get-started w-100">Baca
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
    <!-- AKHIR RENUNGAN -->
@endsection
