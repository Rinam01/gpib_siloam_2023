@extends('../components/main')
@section('title')
    - Info
@endsection
@section('content')
    <!-- Informasi Sejarah -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <h4 class="card-title">Sejarah</h4>
                        <p class="card-text">
                            "SILOAM" adalah nama Jemaat yang ditetapkan berdasarkan Surat
                            Penjerahan, tertanggal Pontianak 29 September 1963 dari Panitia
                            Pembangunan Ibadat Pontianak yang disebut Panitia 9 menyerahkan
                            kepada Madjelis Sinode GPIB Djakarta yang menjaksikan Madjelis
                            Geredja GPIB Pontianak, sesuai data histories bernama De
                            Protestansche Gemeente te Pontianak atau Jemaat Protestan di
                            Pontianak menjadi GPIB Jemaat "SILOAM" Pontianak. Perlu kiranya
                            diketahui bahwa pada masa peralihan dari De Indishe Kerk (DIK)
                            kepada GEREJA PROTESTAN di INDONESIA bagian BARAT pada tahun
                            1948 terakhir kali dikuatkan dengan Surat Keputusan Menteri
                            Dalam Negeri RI No. SK. 22//DDA/1969/D/13, tanggal Jakarta
                            20-3-1978.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Visi, Misi -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <h4 class="card-title">Visi</h4>
                        <p class="card-text">
                            Gereja GPIB Jemaat SILOAM Pontianak memiliki visi untuk menjadi
                            Gereja yang mewujudkan damai sejahtera Allah bagi seluruh
                            ciptaan-Nya, serta berperan aktif dalam pelayanan sosial,
                            pendidikan, dan lingkungan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4">
                <div class="card border-0">
                    <div class="card-body text-justify">
                        <h4 class="card-title text-center">Misi</h4>
                        <ol>
                            <li>
                                Menjadi Gereja yang terus menerus diperbaharui dengan bertolak
                                dari firman Allah yang terwujud dalam perilaku warga gereja,
                                baik dalam Persekutuan maupun dalam hidup bermasyarakat.
                            </li>
                            <li>
                                Menjadi Gereja yang hadir sebagai contoh kehidupan, yang
                                terwujud melalui inisiatif dan partisipasi dalam
                                kesetiakawanan social serta kerukunan dalam Masyarakat, dengan
                                berbasis pada perilaku kehidupan keluarga yang kuat dan
                                sejahtera.
                            </li>
                            <li>
                                Menjadi Gereja yang membangun keutuhan ciptaan yang terwujud
                                melalui perhatian terhadap lingkungan hidup, semangat keesaan
                                dan semangan persatuan dan kesatuan warga Gereja sebagai warga
                                masyarakat.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Pendeta dan Wilayah Pelayanan -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Info Pendeta -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Pendeta yang Melayani Saat Ini</h4>
                        <ul>
                            @foreach ($pengurus as $item)
                                @if ($item->kategori == "Ketua Majelis Jemaat")
                                    <li>
                                        <strong>Ketua Majelis Jemaat:</strong> {{ $item->nama }}
                                    </li>
                                @elseif ($item->kategori == "Pendeta Jemaat")
                                    <li>
                                        <strong>Pendeta Jemaat:</strong> {{ $item->nama }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Wilayah Pelayanan -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Wilayah Pelayanan</h4>
                        <ul>
                            <li>GPIB Jemaat "Siloam" Pontianak, Kota Pontianak</li>
                            <li>Bajem Tuah Petara Sintang, Kabupaten Sintang</li>
                            <li>Pos Pelkes Ekklesia Nanga Silat, Kabupaten Kapuas Hulu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
