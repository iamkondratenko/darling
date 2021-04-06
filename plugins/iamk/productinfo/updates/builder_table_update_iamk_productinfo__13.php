<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkProductinfo13 extends Migration
{
    public function up()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->boolean('is_banner')->default(false);
            $table->string('banner_picture')->default('null');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->dropColumn('is_banner');
            $table->dropColumn('banner_picture');
        });
    }
}
