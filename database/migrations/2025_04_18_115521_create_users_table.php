<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken(); // Optionnel, pour "remember me" en login
            $table->timestamps(); // created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

