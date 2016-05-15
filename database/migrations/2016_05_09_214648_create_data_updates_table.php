<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('identification');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('age');
            $table->string('birth_municipality');
            $table->string('birth_country');
            $table->string('residence_municipality');
            $table->string('residence_address');
            $table->string('residential_area');
            $table->integer('sex_id')->unsigned();
            $table->foreign('sex_id')->references('id')->on('sexes')->onDelete('cascade');
            $table->integer('sexual_orientation_id')->unsigned();
            $table->foreign('sexual_orientation_id')->references('id')->on('sexual_orientations')->onDelete('cascade');
            $table->integer('civil_state_id')->unsigned();
            $table->foreign('civil_state_id')->references('id')->on('civil_states')->onDelete('cascade');
            $table->string('personal_email');
            $table->string('one_phone');
            $table->string('two_phone');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->string('semester');
            $table->integer('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->integer('credit_id')->unsigned();
            $table->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
            $table->integer('ethnic_group_id')->unsigned();
            $table->foreign('ethnic_group_id')->references('id')->on('ethnic_groups')->onDelete('cascade');
            $table->integer('indigenous_people_id')->unsigned();
            $table->foreign('indigenous_people_id')->references('id')->on('indigenous_peoples')->onDelete('cascade');
            $table->integer('black_community_id')->unsigned();
            $table->foreign('black_community_id')->references('id')->on('black_communities')->onDelete('cascade');
            $table->integer('victim_type_id')->unsigned();
            $table->foreign('victim_type_id')->references('id')->on('victim_types')->onDelete('cascade');
            $table->integer('disability_type_id')->unsigned();
            $table->foreign('disability_type_id')->references('id')->on('disability_types')->onDelete('cascade');
            $table->string('one_full_name_family');
            $table->string('one_relationship_family');
            $table->string('one_phone_family');
            $table->string('two_full_name_family');
            $table->string('two_relationship_family');
            $table->string('two_phone_family');
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
        Schema::drop('data_updates');
    }
}
