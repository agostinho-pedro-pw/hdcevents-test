<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        $table->foreignId('user_id')->constrainded();//atributo, para saber que toda a logica insere um chave estrangeira, e atrela ela a um user de um aoutra tabela
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }
}
