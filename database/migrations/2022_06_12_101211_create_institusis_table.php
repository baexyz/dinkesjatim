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
        Schema::create('institusi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id');
            $table->foreignId('user_id');
            $table->foreignId('profil_id');
            $table->string('judul');
            $table->string('image')->nullable();
            $table->text('body')->nullable();
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('institusi');
    }
};
