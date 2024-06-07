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
        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_subcategories_categories_id')
                  ->references('id')
                  ->on('categories');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('subcategory_id', 'fk_products_subcategories_id')
                  ->references('id')
                  ->on('subcategories');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('customer_id', 'fk_orders_customers_id')
                  ->references('id')
                  ->on('customers');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('seller_id', 'fk_orders_employees_id')
                  ->references('id')
                  ->on('employees');
        });

        Schema::table('orderproducts', function (Blueprint $table) {
            $table->foreign('order_id', 'fk_orderproducts_orders_id')
                  ->references('id')
                  ->on('orders');
        });

        Schema::table('orderproducts', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_orderproducts_productss_id')
                  ->references('id')
                  ->on('products');
        });

            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};