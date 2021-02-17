<?php namespace Iamk\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkCategory extends Migration
{
    public function up()
    {
        Schema::create('iamk_category_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('main_banner');
            $table->string('title');
            $table->text('category_info');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_category_');
    }
}
