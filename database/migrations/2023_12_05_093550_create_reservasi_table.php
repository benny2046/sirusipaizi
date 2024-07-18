<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('phone')->nullable();
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status', ['diterima', 'Ditolak', 'Menunggu', 'Selesai'])->default('Menunggu');
            $table->integer('umur');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('jenis_penyakit');
            $table->enum('kategori_penyakit',['Kanker', 'Non-Kanker']);
            $table->date('tanggal_masuk');
            $table->string('nama_pendamping')->nullable();
            $table->integer('umur_pendamping')->nullable();
            $table->string('pendidikan_pendamping')->nullable();
            $table->string('pekerjaan_pendamping')->nullable();
            $table->enum('jeniskelaminpendamping', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('phone_pendamping')->nullable();
            $table->string('provinsi_pendamping')->nullable();
            $table->foreignId('pasien_id')->nullable();
            $table->date('tanggal_masuk_pendamping')->nullable();
            $table->foreignId('user_id');
            $table->string('file');
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
        Schema::dropIfExists('reservasi');
    }
};
