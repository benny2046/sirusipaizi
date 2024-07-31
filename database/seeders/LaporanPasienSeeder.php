<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;


class LaporanPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $rumahSakit = ['Sumatera Barat'];
        $provinsiData = [
            'Sumatera Barat' => [
                'kecamatan' => ['Padang Barat', 'Padang Timur', 'Padang Selatan', 'Padang Utara'],
                'kelurahan' => ['Anduring', 'Kampung Jua', 'Lubuk Begalung', 'Pasir', 'Ulak Karang'],
                'kabupaten' => ['Padang Pariaman', 'Solok', 'Pesisir Selatan', 'Bukittinggi']
            ],
            'Riau' => [
                'kecamatan' => ['Rumbai', 'Marpoyan Damai', 'Tenayan Raya', 'Pekanbaru Kota'],
                'kelurahan' => ['Simpang Tiga', 'Lembah Damai', 'Tuah Karya', 'Senapelan', 'Labuh Baru'],
                'kabupaten' => ['Kampar', 'Rokan Hulu', 'Bengkalis', 'Indragiri Hulu']
            ],
            'Kepulauan Riau' => [
                'kecamatan' => ['Batu Ampar', 'Lubuk Baja', 'Tanjung Pinang Timur', 'Tanjung Pinang Barat'],
                'kelurahan' => ['Batu Selicin', 'Tanjung Unggat', 'Tanjung Pinang Kota', 'Senggarang'],
                'kabupaten' => ['Bintan', 'Lingga', 'Karimun', 'Natuna']
            ],
            'Jambi' => [
                'kecamatan' => ['Jambi Selatan', 'Jambi Timur', 'Jambi Tengah', 'Jambi Barat'],
                'kelurahan' => ['Talang Jauh', 'Jelutung', 'Kenali Asam Bawah', 'Pasar Jambi'],
                'kabupaten' => ['Muaro Jambi', 'Batanghari', 'Kerinci', 'Sarolangun']
            ],
            'Bengkulu' => [
                'kecamatan' => ['Bengkulu Selatan', 'Bengkulu Utara', 'Bengkulu Tengah', 'Kota Bengkulu'],
                'kelurahan' => ['Kampung Melayu', 'Jati Agung', 'Kandang Limun', 'Pagar Dewa'],
                'kabupaten' => ['Rejang Lebong', 'Kepahiang', 'Seluma', 'Muko Muko']
            ],
            'Sumatera Selatan' => [
                'kecamatan' => ['Palembang', 'Lubuklinggau', 'Pagar Alam', 'Prabumulih'],
                'kelurahan' => ['16 Ilir', '13 Ulu', 'Talang Kelapa', 'Prabumulih Barat'],
                'kabupaten' => ['Ogan Komering Ilir', 'Ogan Komering Ulu', 'Musi Banyuasin', 'Lahat']
            ]
        ];
        $jenisKelamin = ['laki-laki', 'perempuan'];
        $kategoriPenyakit = [
            'Kanker' => ['Kanker Paru', 'Kanker Payudara'],
            'Non-Kanker' => ['Hipertensi', 'Diabetes', 'Demam Berdarah']
        ];
        $kamarIds = [1, 2, 3, 4]; // Hanya ada 4 kamar

        // Generate data untuk 51 pasien checkout
        for ($i = 1; $i <= 51; $i++) {
            $provinsi = $faker->randomElement(array_keys($provinsiData));
            $provinsiInfo = $provinsiData[$provinsi];
            $kecamatan = $faker->randomElement($provinsiInfo['kecamatan']);
            $kelurahan = $faker->randomElement($provinsiInfo['kelurahan']);
            $kabupaten = $faker->randomElement($provinsiInfo['kabupaten']);
            $tanggalMasuk = Carbon::create(2023, 6, 30)->addWeeks($i);
            $selectedKategori = $faker->randomElement(array_keys($kategoriPenyakit));
            $jenisPenyakit = $faker->randomElement($kategoriPenyakit[$selectedKategori]);

            DB::table('pasien')->insert([
                'id' => $i,
                'nama_rsp' => $faker->randomElement($rumahSakit),
                'nama' => $faker->name,
                'phone' => $faker->optional()->phoneNumber,
                'alamat' => $kelurahan,
                'kelurahan' => $kelurahan,
                'kecamatan' => $kecamatan,
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi,
                'jeniskelamin' => $faker->randomElement($jenisKelamin),
                'umur' => $faker->numberBetween(18, 80),
                'pendidikan' => $faker->randomElement(['SMA', 'Diploma', 'Sarjana']),
                'pekerjaan' => $faker->jobTitle,
                'jenis_penyakit' => $jenisPenyakit,
                'kategori_penyakit' => $selectedKategori,
                'status_rawat' => 'checkout',
                'tanggal_masuk' => $tanggalMasuk,
                'kamar_id' => null, // Tidak diberikan kamar_id untuk pasien checkout
                'pendamping_id' => null,
                'reservasi_id' => $faker->optional()->numberBetween(1, 100),
                'created_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
            ]);
        }

        // Generate data untuk 4 pasien checkin
        for ($i = 52; $i <= 55; $i++) {
            $provinsi = $faker->randomElement(array_keys($provinsiData));
            $provinsiInfo = $provinsiData[$provinsi];
            $kecamatan = $faker->randomElement($provinsiInfo['kecamatan']);
            $kelurahan = $faker->randomElement($provinsiInfo['kelurahan']);
            $kabupaten = $faker->randomElement($provinsiInfo['kabupaten']);
            $tanggalMasuk = Carbon::create(2024, 7, 1)->addDays($i - 51);

            DB::table('pasien')->insert([
                'id' => $i,
                'nama_rsp' => $faker->randomElement($rumahSakit),
                'nama' => $faker->name,
                'phone' => $faker->optional()->phoneNumber,
                'alamat' => $kelurahan,
                'kelurahan' => $kelurahan,
                'kecamatan' => $kecamatan,
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi,
                'jeniskelamin' => $faker->randomElement($jenisKelamin),
                'umur' => $faker->numberBetween(18, 80),
                'pendidikan' => $faker->randomElement(['SMA', 'Diploma', 'Sarjana']),
                'pekerjaan' => $faker->jobTitle,
                'jenis_penyakit' => $faker->randomElement($kategoriPenyakit['Non-Kanker']),
                'kategori_penyakit' => 'Non-Kanker',
                'status_rawat' => 'checkin',
                'tanggal_masuk' => $tanggalMasuk,
                'kamar_id' => $faker->randomElement($kamarIds),
                'pendamping_id' => null,
                'reservasi_id' => $faker->optional()->numberBetween(1, 100),
                'created_at' => Carbon::now(),
                'deleted_at' => null,
            ]);
        }
    }
}
