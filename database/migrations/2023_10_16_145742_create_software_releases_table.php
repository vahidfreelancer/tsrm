<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('software_releases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('no_of_downloads')->default(0);
            $table->integer('file_size')->default(0);
            $table->integer('userid')->default(0);
            $table->integer('status')->default(1);
            $table->integer('type')->default(1);
            $table->timestamp('releasedate')->default(now());
            $table->timestamp('builddate')->default(now());
            $table->string('filename',64);
            $table->string('format',64);
            $table->string('md5',32);
            $table->string('name',128)->nullable();
            $table->string('detils',255)->nullable();
            $table->string('improvements',255)->nullable();
            $table->string('version',32)->nullable();
            $table->string('device',128)->nullable();
            $table->string('comment',255)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_releases');
    }
};
