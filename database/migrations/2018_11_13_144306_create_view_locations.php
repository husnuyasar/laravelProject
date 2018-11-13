<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            "
            CREATE VIEW view_locations AS
            SELECT l.*, u.name as username,d.title,d.address FROM locations as l
            INNER JOIN location_details as d ON l.id = d.location_id AND d.deleted_at is null
            INNER JOIN users as u ON u.id = d.user_id AND u.deleted_at is null
            " 
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_locations');
    }
}
