<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('order_ref_number');
            $table->string('payment_status');
            $table->string('payment_date')->nullable();
            $table->string('customer_delivery_status');
            $table->string('dispatch_date')->nullable();
            $table->string('admin_delivery_status');
            $table->string('expected_delivery_date')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('approval_status');
            $table->longText('shipping_address');
            $table->string('user_id');
            $table->double('total')->default(0.0);
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
        Schema::dropIfExists('orders');
    }
};
