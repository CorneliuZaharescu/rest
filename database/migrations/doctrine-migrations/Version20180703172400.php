<?php

namespace Database\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema as Schema;
use LaravelDoctrine\Migrations\Schema\Table;
use LaravelDoctrine\Migrations\Schema\Builder;

class Version20180703172400 extends AbstractMigration
{

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        (new Builder($schema))->create('jobs', function (Table $table) {
            $table->increments('id');
            $table->string('company_name', 255);
            $table->text('company_description');
            $table->string('company_email', 128);
            $table->string('company_phone', 50);
            $table->string('job_title', 255);
            $table->text('job_description');
            $table->unsignedInteger('category_id');
            $table->foreign('categories','category_id');
            $table->unsignedInteger('city_id');
            $table->foreign('cities','city_id');
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        (new Builder($schema))->table('jobs', function (Table $table) {
            //
        });
    }
}
