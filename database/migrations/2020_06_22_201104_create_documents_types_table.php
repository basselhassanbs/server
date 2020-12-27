<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_types', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('office_id');
        $table->string('type');
        $table->string('name');
        $table->timestamps();
        });

        Schema::create('document_type_office', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('document_type_id');
        $table->unsignedBigInteger('office_id');
        $table->integer('seq');
        $table->timestamps();
        $table->unique(['document_type_id','office_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_types');
    }
}
