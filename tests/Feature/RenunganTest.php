<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Renungan;
use Illuminate\Support\Str;
use App\Models\User;



class RenunganTest extends TestCase
{
    public function testMembuatRenunganBerhasil()
    {
        $admin = User::where('username', 'admin')->first();

        $data = [
            'judul' => 'Judul Renungan Baru',
            'bacaan_alkitab' => 'Bacaan Alkitab Baru',
            'isi_bacaan' => 'Isi Bacaan Renungan Baru',
            'thumbnail' => UploadedFile::fake()->image('thumbnail.jpg')
        ];
        $data['slug'] = Str::slug($data['judul'], '-');

        $response = $this->actingAs($admin)->json('POST', '/dashboard/renungan/simpan_renungan', $data);
        $response->assertStatus(200);
        $response->assertJson(['message' => 'Renungan berhasil ditambahkan']);
    }

    public function testMembuatRenunganGagal()
    {
        $admin = User::where('username', 'admin')->first();

        $data = [
            'judul' => '', // judul tidak diinputkan
            'bacaan_alkitab' => 'Bacaan Alkitab Baru',
            'isi_bacaan' => 'Isi Bacaan Renungan Baru',
            'thumbnail' => UploadedFile::fake()->image('thumbnail.jpg')
        ];

        $response = $this->actingAs($admin)->json('POST', '/dashboard/renungan/simpan_renungan', $data);
        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['judul' => 'Judul renungan wajib diisi.']);
    }
}
