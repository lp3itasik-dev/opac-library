<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcebook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bcebook', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->text('title');
            $table->string('author');
            $table->string('publication_year');
            $table->string('publisher');
            $table->string('place_of_publication');
            $table->string('isbn');
            $table->char('type_id');
            $table->text('file_name');
            $table->string('typefile');
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
        Schema::dropIfExists('bcebook');
    }
}
