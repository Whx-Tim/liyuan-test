<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('email',30)->unique();
            $table->string('password',50);
            $table->string('phone',20)->unique();
            $table->boolean('phoneVerified')->nullable();
            $table->boolean('emailVerified')->nullable();
            $table->string('sex',5);
            $table->string('bornDate',30)->nullable();
            $table->text('content')->nullable();
            $table->integer('stuNumber')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
