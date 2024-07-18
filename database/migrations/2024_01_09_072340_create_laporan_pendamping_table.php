<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('laporan_pendamping', function (Blueprint $table) {
            $table->id();
            $table->string('rsp');
            $table->string('nama');
            $table->string('provinsi_alamat');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('usia');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('tlp');
            $table->foreignId('reservasi_id');
            $table->date('tanggal_masuk');
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
        Schema::dropIfExists('laporan_pendamping');
    }
};
