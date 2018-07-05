<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 255);
            $table->text('company_description');
            $table->string('company_email', 128);
            $table->string('company_phone', 50);
            $table->string('job_title', 255);
            $table->text('job_description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        try {
            $content = file_get_contents("jobs.json", FILE_USE_INCLUDE_PATH);
            $data = json_decode($content);
            $startDate = time();
            foreach ($data as $key => $item) {
                $day = rand(1,10);
                try {
                    DB::table('jobs')->insert(
                        [
                            "company_name" => $item->company_name,
                            "company_description" => $item->company_description,
                            "company_email" => $item->company_email,
                            "company_phone" => $item->company_phone,
                            "job_title" => $item->job_title,
                            "job_description" => $item->job_description,
                            "category_id" => $item->category_id,
                            "city_id" => $item->city_id,
                            "created_at" => date('Y-m-d H:i:s', strtotime("+".$day." day", $startDate)),
                            "updated_at" => date('Y-m-d H:i:s', strtotime("+".$day." day", $startDate))
                        ]
                    );
                } catch (Exception $e) {
                    print($e->getMessage());
                }
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
        Schema::drop('jobs');
    }
}
