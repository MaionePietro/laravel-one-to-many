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
        Schema::table('projects', function (Blueprint $table) {
             // 1. aggiungendo la colonna
             $table->unsignedBigInteger('project_id')->nullable()->after('id');

             // 2. creando la relazione tra chiave esterna e chiave primaria
             $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            // 2. droppiamo la realzione

            $table->dropForeign(['project_id']);

            // 1. droppare la colonna
            $table->dropColumn('project_id');
        });
    }
};
