<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_perms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('role');
            $table->string('permission');
            $table->string('visibility');
            $table->string('created_by');

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles_perms');

        //
    }
}
