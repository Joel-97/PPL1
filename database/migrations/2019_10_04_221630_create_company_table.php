<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyId')->unique();
            $table->string('companyName');
            $table->string('companyPhone');
            $table->string('companyEmail');
            $table->string('companyAddress');
            $table->string('requiredProfile');
            $table->string('companyRequirements');
            $table->string('companyInfo');
            $table->string('companyDescription');
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
        Schema::dropIfExists('company');
    }
}
