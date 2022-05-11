<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            // $table->text('judul_konten')->nullable();;
            // $table->text('isi_konten');
            // $table->date('tanggal_konten');
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->string('short description');
            $table->date('date_published');
            $table->string('category_blog_id');
            $table->string('image')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('blogs');
    }
}
