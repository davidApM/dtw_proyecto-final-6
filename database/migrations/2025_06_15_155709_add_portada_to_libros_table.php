<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPortadaToLibrosTable extends Migration
{
    public function up()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->string('portada')->nullable()->after('estado');
        });
    }

    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropColumn('portada');
        });
    }
}
