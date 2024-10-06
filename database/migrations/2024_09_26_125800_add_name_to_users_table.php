<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('email')->unique()->after('username'); // Add email field
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('email'); // Drop email field
    });
}
}
