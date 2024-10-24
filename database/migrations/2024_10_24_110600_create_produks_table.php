<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama'); // Kolom nama
            $table->text('deskripsi'); // Kolom deskripsi
            $table->decimal('harga', 10, 2); // Kolom harga
            $table->integer('stok'); // Kolom stok
            $table->timestamps(); // Kolom timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
