<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    private const TABLE_NAME = 'contacts';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('mall_presentation_link')->comment('Ссылка на презентацию торгового центра');
            $table->string('mall_general_rules_link')->comment('Ссылка на документ про правила торгового центра');
            $table->string('mall_parking_rules_link')->comment('Ссылка на документ про правила паркинга торгового центра');
            $table->string('for_users')->comment('Для пользователей');
            $table->string('for_leasers')->comment('Для арендаторов');
            $table->string('for_advertisers')->comment('Для рекламодателей');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
