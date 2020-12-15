<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('customer_number');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('dob');
            $table->string('opened_date');
            $table->string('nationality');
            $table->string('doc_no');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('work_allocations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('allocation');
            $table->string('completed');
            $table->string('pending_SLA');
            $table->string('pending_SLA_breach');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
