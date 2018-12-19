<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToProjectItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_items', function (Blueprint $table) {
            $table->foreign('project_id', 'fk_project_items_projects')->references('id')->on('projects')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('item_id', 'fk_project_items_items')->references('id')->on('items')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_items', function (Blueprint $table) {
            $table->dropForeign('fk_projects_users');
        });
    }
}
