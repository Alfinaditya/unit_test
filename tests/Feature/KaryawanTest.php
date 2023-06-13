<?php

namespace Tests\Feature;

use App\Models\M_Karyawan;
use App\Models\User;
use Tests\TestCase;

class KaryawanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // use RefreshDatabase;

    public function test_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_insert_karyawan()
    {
        $data = [
            'nama' => 'Alfin',
            'nik' => '33423423',
            'id_kar' => 1,
        ];
        $response = $this->post('/insert', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('karyawan', $data); // 

    }

    public function test_update_karyawan()
    {
        $data = [
            'nama' => 'Yagami',
            'nik' => '33423423',
        ];
        $karyawan = M_Karyawan::first();
        $karyawan->nama = $data['nama'];
        $karyawan->nik = $data['nik'];
        $karyawan->save();
        $this->assertInstanceOf(M_Karyawan::class, $karyawan);
        $this->assertDatabaseHas('karyawan', $data);
    }

    public function test_delete_karyawan()
    {
        $karyawan = M_Karyawan::create([
            'nama' => 'Alfin',
            'nik' => '33423423',
            'id_kar' => 1,
        ]);

        $karyawan->forceDelete();

        $this->assertInstanceOf(M_Karyawan::class, $karyawan);
        $this->assertDatabaseMissing('karyawan', ['id' => $karyawan->id]);
    }

    public function test_auth_user()
    {
        $user = User::where('name', 'Dika')->first();
        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }
}
