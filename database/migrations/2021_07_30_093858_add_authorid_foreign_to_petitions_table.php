<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthoridForeignToPetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('petitions', function (Blueprint $table) {
            $table->unsignedInteger('author')->change();
            $table->foreign('author')->references('id')->on('authors');
            $table->renameColumn('author', 'author_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('petitions', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->string('author_id')->change();
            $table->renameColumn('author_id', 'author');
        });
    }
}
