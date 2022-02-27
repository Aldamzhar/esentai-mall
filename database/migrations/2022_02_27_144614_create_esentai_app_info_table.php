<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsentaiAppInfoTable extends Migration
{
    private const TABLE_NAME = 'esentai_app_info';
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
            $table->string('gallery')->comment('Галерея');
            $table->string('download_link')->comment('Ссылка на скачивание');
            $table->string('qr_code')->comment('QR code');
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
