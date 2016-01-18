<?php

use Illuminate\Database\Migrations\Migration;
use \jlourenco\base\Database\Blueprint;

class CreatePermissionsTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Permission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 100);
            $table->string('description', 250);

            $table->unique('key');
        });

        Schema::create('Permission_Entity', function (Blueprint $table) {
            $table->increments('id');
            $table->text('permission');

            $table->timestamps();
            $table->softDeletes();
            $table->creation();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('Permission_Entity');
        Schema::drop('Permission');

    }

}
