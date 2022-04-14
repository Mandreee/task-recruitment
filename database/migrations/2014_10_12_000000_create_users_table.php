<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('applied_position');
            $table->string('name');
            $table->string('no_ktp');
            $table->string('contact')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->string('pob');
            $table->date('dob');
            $table->enum('gender', ['male','female'])->default('male');
            $table->string('religion')->default('islam');
            $table->string('blood_type');
            $table->enum('married_status', ['single','married'])->default('single');
            $table->text('address_ktp');
            $table->text('address_home');
            $table->string('relative_name');
            $table->string('relative_contact');
            $table->text('skill');
            $table->enum('is_approved', ['Setuju','Tidak Setuju'])->default('setuju');
            $table->double('salary_expectation');
            $table->timestamps();
            $table->softDeletes();
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
