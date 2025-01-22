<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('division');
            $table->string('status');
            $table->timestamps(); // untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
