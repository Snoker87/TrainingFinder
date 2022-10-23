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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('method')->nullable();
            $table->string('email')->nullable();
            $table->text('desc')->nullable();
            $table->text('instructions')->nullable();
            $table->text('requirments')->nullable();
            $table->string('specialization')->nullable();
            $table->string('gpa_limit')->nullable();
            $table->boolean('nationality')->nullable();
            $table->string('type')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->foreignId('company_id');
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
        Schema::dropIfExists('opportunities');
    }
};
