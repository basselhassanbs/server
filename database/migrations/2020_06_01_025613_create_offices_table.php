<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::insert('insert into offices (id, name) values (?, ?)', [1, 'شؤون الطلاب']);
        DB::insert('insert into offices (id, name) values (?, ?)', [2, 'الامتحانات']);
        DB::insert('insert into offices (id, name) values (?, ?)', [3, 'العميد']);
        DB::insert('insert into offices (id, name) values (?, ?)', [4, 'النافذة الواحدة']);
        DB::insert('insert into offices (id, name) values (?, ?)', [5, 'رئيس الدائرة']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
