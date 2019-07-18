<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
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
        Schema::dropIfExists('departments');
    }
}

create_departments_table  

public function up() 

{ 

   Schema::create('departments', function (Blueprint $table) { 

       $table->bigIncrements('id'); 

       $table->string('nombre'); 

       $table->integer('bono'); 

       $table->timestamps(); 

   }); 

} 

 
 

create_users_table  

public function up() 

{ 

   Schema::create('users', function (Blueprint $table) { 

       $table->bigIncrements('id'); 

       $table->string('nombre'); 

       $table->unsignedBigInteger('department_id'); 

       $table->timestamps(); 

 
 

       $table->foreign('department_id')->references('id')->on('departments'); 

   }); 

} 