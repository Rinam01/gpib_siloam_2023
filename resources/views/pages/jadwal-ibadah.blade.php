@extends('../components/main')
@section('title')
    - Jadwal Ibadah
@endsection
@section('content')
    <!-- Jadwal Ibadah Minggu-->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-chocolate text-white">
                <h5 class="card-title text-center">Jadwal Ibadah Minggu</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-striped">
                        <caption>
                            Jadwal Ibadah Minggu
                        </caption>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwalIbadah as $jadwal)
                                @if ($jadwal->kategori == 'Ibadah Minggu')
                                    <tr>
                                        <td>{{ $jadwal->keterangan }}</td>
                                        <td>{{ $jadwal->jam }} WIB</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jadwal Ibadah Minggu-->

    <!-- Jadwal Ibadah Pelkat-->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-chocolate text-white">
                <h5 class="card-title text-center">Jadwal Ibadah Pelkat</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-striped">
                        <caption>
                            Jadwal Ibadah Pelkat
                        </caption>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwalIbadah as $jadwal)
                                @if ($jadwal->kategori == 'Ibadah Pelkat')
                                    <tr>
                                        <td>{{ $jadwal->keterangan }}</td>
                                        <td>{{ $jadwal->hari }}</td>
                                        <td>{{ $jadwal->jam }} WIB</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jadwal Ibadah Pelkat-->
@endsection
