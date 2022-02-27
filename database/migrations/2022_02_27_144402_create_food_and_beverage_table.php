<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodAndBeverageTable extends Migration
{
    private const TABLE_NAME = 'food_and_beverage';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('logo')->comment('Логотип компании');
            $table->string('name')->comment('Название');
            $table->text('description')->comment('Описание');
            $table->foreignId('contacts_id')
                ->comment('Контакты')
                ->constrained('contacts')
                ->cascadeOnDelete();
            $table->string('location')->comment('Расположение');
            $table->string('gallery')->nullable()->comment('Галерея');
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
