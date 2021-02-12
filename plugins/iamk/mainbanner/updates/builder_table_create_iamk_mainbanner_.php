<?php namespace Iamk\Mainbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIamkMainbanner extends Migration
{
    public function up()
    {
        Schema::create('iamk_mainbanner_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('first_slider_title');
            $table->string('first_slider_picture');
            $table->string('second_slider_title');
            $table->string('second_slider_picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamk_mainbanner_');
    }
}
