<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkProductinfo extends Migration
{
    public function up()
    {
        Schema::create('iamk_productinfo_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug');
            $table->string('category');
            $table->string('title');
            $table->text('product_title');
            $table->integer('price');
            $table->text('additional_info');
            $table->string('buy_link');
            $table->text('color_slider');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_productinfo_');
    }
}
