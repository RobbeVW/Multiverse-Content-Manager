<?php namespace RobVW\MultiverseContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRobvwMultiversecontentmanagerUploads extends Migration
{
    public function up()
    {
        Schema::create('robvw_multiversecontentmanager_uploads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('path');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('robvw_multiversecontentmanager_uploads');
    }
}
