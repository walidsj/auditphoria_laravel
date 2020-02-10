<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeamNameAndTeam1AndTeam2AndTeam3ToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('team_name')->nullable();
            $table->string('team1')->nullable();
            $table->string('team2')->nullable();
            $table->string('team3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('team_name');
            $table->dropColumn('team1');
            $table->dropColumn('team2');
            $table->dropColumn('team3');
        });
    }
}
