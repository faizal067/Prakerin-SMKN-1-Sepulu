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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama');
            $table->enum('kelas', ['10', '11', '12']);
            $table->enum('jurusan', ['rpl', 'tkj', 'mm', 'aph', 'tkr']);
            $table->string('alamat');
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'budha','hindu']);
            $table->enum('kelompok', ['1', '2', '3', '4', '5', '6', '7', '8']);
            $table->enum('industri', ['telkomsurabaya', 'ukirpecah', 'pttati', 'telkombangkalan']);
            $table->string('notelp');
            $table->string('foto');
            $table->string('keahlian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftars');
    }
};
