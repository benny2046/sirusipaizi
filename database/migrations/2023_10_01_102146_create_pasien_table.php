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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rsp');
            $table->string('nama');
            $table->string('phone')->nullable();
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->string('umur');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('jenis_penyakit');
            $table->string('kategori_penyakit',['checkin', 'checkout']);
            $table->enum('status_rawat', ['checkin', 'checkout']); // Status checkin atau checkout
            $table->date('tanggal_masuk');
            $table->foreignId('kamar_id');
            $table->foreignId('pendamping_id')->nullable();
            $table->foreignId('reservasi_id')->nullable();
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
        Schema::dropIfExists('pasien');
    }
};
