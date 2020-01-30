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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('level_id')->default(2)->unsigned(); //id levels for type of hierarchy's users
            $table->integer('category_id')->nullable()->unsigned(); //id categories for type of event that users choose for
            $table->integer('status')->default(0); //status for user inactivity, active=1, nonactive=0
            $table->string('university')->nullable(); //the name of university
            $table->string('whatsapp', 16)->nullable(); //for example: +6280000000000
            $table->string('line', 20)->nullable(); //maximum character of id line is 20
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
