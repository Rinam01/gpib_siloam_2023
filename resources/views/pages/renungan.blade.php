@extends('../components/main')
@section('title')
    - Renungan
@endsection
@section('content')
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-6">Renungan</h1>
            <p class="lead">
                Dalam pelukan hangat renungan rohani ini. Semoga setiap kata yang
                terhampar di halaman ini menjadi sumber kekuatan dan ketenangan bagi
                hati dan jiwa Anda. Bersama-sama, mari kita renungkan Firman-Nya dan
                temukan cahaya-Nya yang memandu langkah-langkah kita.
            </p>
            <hr class="my-4" />
            <p>Tuhan memberkati perjalanan rohaniah kita bersama!</p>
            <hr class="my-4" />
        </div>
    </div>

    <!-- RENUNGAN -->
    <div class="container mt-4">
        <div class="row justify-content-start" id="renungan-container">
            <!-- Data Renungan akan ditampilkan di sini -->
        </div>
        <div class="text-center mt-3">
            <button id="load-more" class="btn btn-get-started">Muat Lebih Banyak</button>
        </div>
    </div>
    <!-- AKHIR RENUNGAN -->
@endsection
@section('script')
    <script src="{{ asset('assets/dashboard/vendor/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/pages/js/renungan/renungan.js') }}"></script>
@endsection
