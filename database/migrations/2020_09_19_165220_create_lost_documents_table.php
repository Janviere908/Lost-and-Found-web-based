<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('document_type_id');
            $table->integer('user_id');
            $table->boolean('found')->default(0);
            $table->boolean('received')->default(0);
            $table->string('document_number');
           

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
        Schema::dropIfExists('lost_documents');
    }
}
