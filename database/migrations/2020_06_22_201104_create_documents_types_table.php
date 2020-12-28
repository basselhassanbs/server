<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [1, 1, 'time', 'وثيقة دوام']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [2, 1, 'universitylife', 'وثيقة حياة جامعية']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [3, 2, 'success', 'وثيقة ترفع']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [4, 2, 'coursescomplete', 'وثيقة إنهاء مقررات']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [5, 4, 'timerequest', 'طلب وثيقة دوام']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [6, 4, 'successrequest', 'طلب وثيقة ترفع']);
        DB::insert('insert into documents_types (id, office_id, type, name) values (?, ?, ?, ?)', [7, 4, 'coursescompleterequest', 'طلب إنهاء مقررات']);

        Schema::create('document_type_office', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('document_type_id');
        $table->unsignedBigInteger('office_id');
        $table->integer('seq');
        $table->timestamps();
        $table->unique(['document_type_id','office_id']);
        });

        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [1, 1, 1, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [2, 1, 3, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [3, 5, 4, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [4, 5, 2, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [5, 5, 3, 3]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [6, 6, 4, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [7, 6, 2, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [8, 6, 3, 3]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [9, 7, 4, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [10, 7, 2, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [11, 7, 3, 3]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [12, 3, 2, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [13, 3, 5, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [14, 3, 3, 3]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [15, 4, 2, 1]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [16, 4, 5, 2]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [17, 4, 3, 3]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [18, 5, 1, 4]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [19, 6, 2, 4]);
        DB::insert('insert into document_type_office (id, document_type_id, office_id, seq) values (?, ?, ?, ?)', [20, 7, 2, 4]);




















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
