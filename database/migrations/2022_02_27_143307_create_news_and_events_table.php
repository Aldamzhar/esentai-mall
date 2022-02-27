<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsAndEventsTable extends Migration
{
    private const TABLE_NAME = 'news_and_events';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('preview')->comment('Превью');
            $table->string('title')->comment('Заголовок');
            $table->text('description')->comment('Текстовый блок');
            $table->date('publication_date')->comment('Дата публикации');
            $table->string('gallery')->comment('Галерея');
            $table->boolean('whatsapp')->default(0)->comment('Ватсап');
            $table->boolean('facebook')->default(0)->comment('Фейсбук');
            $table->boolean('instagram')->default(0)->comment('Инстаграм');
            $table->boolean('telegram')->default(0)->comment('Телеграм');
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
