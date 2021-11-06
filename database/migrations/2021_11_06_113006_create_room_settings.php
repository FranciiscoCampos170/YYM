<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('mute_user_participant');
            $table->boolean('require_moderator_approval_before_joinig');
            $table->boolean('allow_any_user_to_start_this_meeting');
            $table->boolean('all_users_join_as_moderator');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            $table->string('dial_number');
            $table->string('welcome_message');
            $table->string('logo');
            $table->string('presentation');
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
        Schema::dropIfExists('room_settings');
    }
}
