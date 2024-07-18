<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rsp'); // Nama RSP (diambil dari tabel user)
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('umur'); // Kategori umur (balita, anak-anak, dewasa, orang tua)
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('jenis_penyakit');
            $table->string('kategori_penyakit')->nullable();
            $table->string('nama_pendamping')->nullable();
            $table->enum('status_rawat', ['checkin', 'checkout']); // Status checkin atau checkout
            $table->date('tanggal_masuk');
            $table->date('tanggal_checkout')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_pasien');
    }
};
