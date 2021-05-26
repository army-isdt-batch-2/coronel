<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            
            $table->double('amount');
            $table->string('months_payable');
            $table->string('notes');
            $table->enum('loans_type',[
                'calamity','Salary'
                
            ]);
            $table->unsignedBiginteger('employee_id')->index();

            
            $table->timestamps();
            $table->foreign('employee_id')->references ('id')->on('employees');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
