<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkProductinfo12 extends Migration
{
    public function up()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->text('description_en')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->text('description_en')->default('0')->change();
        });
    }
}
