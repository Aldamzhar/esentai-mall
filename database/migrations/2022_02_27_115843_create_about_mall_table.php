<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMallTable extends Migration
{
    private const TABLE_NAME = 'about_mall';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->text('description')->comment('Описание');
            $table->text('development_history')->comment('История развития проекта');
            $table->string('gallery')->comment('Галерея');
            $table->string('mall_map')->comment('Статичная карта');
            $table->string('three_d_link')->comment('Ссылка на ресурс: 3D тур');
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
