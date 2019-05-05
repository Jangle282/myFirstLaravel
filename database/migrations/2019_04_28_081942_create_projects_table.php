<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) { /// any project has these columns
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description'); // text column for longer paragraphs of input
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * this is called when using php artisan migrate:rollback (?)
     * some people lose this methods because od inconssistencies - comment out {} conten
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
