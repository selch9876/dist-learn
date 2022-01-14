<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            /* $table->bigInteger('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users'); */
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->text('password');
            /* $table->bigInteger('package_type_id')->unsigned()->unique();
            $table->foreign('package_type_id')->references('id')->on('packages'); */
            $table->text('job')->nullable();
            $table->integer('age')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('body_fat')->nullable();
            $table->text('nutrition_budget')->nullable();
            $table->time('wake_up_time')->nullable();
            $table->time('sleep_time')->nullable();
            $table->time('breakfast_time')->nullable();
            $table->time('training_time')->nullable();
            $table->text('daily_routine')->nullable();
            $table->text('training_place')->nullable();
            /* $table->enum('subscription_type', ['student', 'full']); */
            $table->enum('package', ['1', '0'])->nullable();
            $table->date('starting_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->text('customer_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
