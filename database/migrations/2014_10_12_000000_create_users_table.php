<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname'); //Фамилия
            $table->string('email')->unique();
            $table->enum('gender', ['m','f']); //Пол: m - муж., f - жен.
            $table->date('bdate'); //Дата рожд.
            $table->string('orgname'); // Назв. организации
            $table->string('position'); //Должность
            $table->string('nation'); //Национальность
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
