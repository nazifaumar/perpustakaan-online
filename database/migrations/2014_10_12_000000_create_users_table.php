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
    public function boot()
{
    Schema::defaultStringLength(191);
}
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->char('tlp');
            $table->string('address');
            $table->string('password');
            $table->enum('role', ['admin', 'user']);
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
};
