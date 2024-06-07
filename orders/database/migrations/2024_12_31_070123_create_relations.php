<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

        Schema::table('order_products', function (Blueprint $table) {
            $table->foreign('order_id', 'fk_order_products_orders_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
        });

        Schema::table('order_products', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_order_products_products_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropForeign('fk_subcategories_categories_id');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_products_subcategories_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('fk_orders_customers_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('fk_orders_employees_id');
        });

        Schema::table('order_products', function (Blueprint $table) {
            $table->dropForeign('fk_order_products_orders_id');
        });

        Schema::table('order_products', function (Blueprint $table) {
            $table->dropForeign('fk_order_products_products_id');
        });
    }
};
