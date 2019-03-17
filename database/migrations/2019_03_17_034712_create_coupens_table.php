<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoupensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->date('expires_on');
            $table->float('cash')->defualt(0.00);
            $table->float('percentage')->defualt(0.00);
            $table->enum('type',[0,1])->default(0);
            $table->enum('delivery_cost',[0,1])->defualt(0);
            $table->integer('category_id')->defualt(0);
            $table->integer('product_id')->defualt(0);
            $table->enum('occassion',[0,1])->defualt(0);
            $table->enum('new_customer',[0,1])->defualt(0);
            $table->integer('minimum_expense')->defualt(0);
            $table->text('description')->nullable();
            $table->string('title')->nullable();
            $table->enum('status',[0,1])->defualt(1);
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
        Schema::dropIfExists('coupens');
    }
}
