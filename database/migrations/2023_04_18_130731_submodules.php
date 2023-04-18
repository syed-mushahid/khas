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
    public function up()
    {
        Schema::create('sub_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modules_id');
            $table->foreign('modules_id')->references('id')->on('modules')->onDelete('cascade');
            $table->string('sub_module_name');
            $table->string('sub_module_route')->nullable();
            $table->string('icon')->nullable();
            $table->string('disabled')->default(false);
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
        Schema::dropIfExists('sub_modules');
    }
};
