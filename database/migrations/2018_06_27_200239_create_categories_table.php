<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        try {
            $content = file_get_contents("categories.json", FILE_USE_INCLUDE_PATH);
            $data = json_decode($content);
            foreach ($data as $key => $item) {
                $datetime = date('Y-m-d H:i:s');
                DB::table('categories')->insert(["name"=> $item->name, "created_at" => $datetime, "updated_at" => $datetime]);
            }
        } catch (Exception $e) {
            print($e->getMessage());
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
