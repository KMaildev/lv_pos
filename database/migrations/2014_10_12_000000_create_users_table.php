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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->text('employee_id')->nullable();
            $table->text('phone')->nullable();
            $table->text('passport_photo')->nullable();
            $table->text('nrc_number')->nullable();
            $table->text('nrc_front_photo')->nullable();
            $table->text('nrc_back_photo')->nullable();
            $table->text('household_member_list')->nullable();
            $table->text('gender')->nullable();
            $table->text('address')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->text('employment_type')->nullable();
            $table->text('join_date')->nullable();
            $table->text('emergency_contact_person')->nullable();
            $table->text('emergency_contact_number')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
