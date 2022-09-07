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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('d_o_b');
            $table->foreignId('blood_type_id')->constrained('blood_types');
            $table->foreignId('city_id')->constrained('cities');
            $table->string('phone');
            $table->string('password');
            $table->string('pin_code')->nullable();
            $table->string('age');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->text("token")->nullable();
            $table->enum('status', ['1', '0']);
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
        Schema::dropIfExists('donar');
    }
};
