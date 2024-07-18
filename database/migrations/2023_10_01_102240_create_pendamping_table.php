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
        Schema::create('pendamping', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('provinsi'); //provinsi alamat
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->integer('umur');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('phone')->nullable(); 
            $table->date('tanggal_masuk');
            $table->foreignId('pasien_id')->nullable();
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
        Schema::dropIfExists('pendamping');
    }
};
