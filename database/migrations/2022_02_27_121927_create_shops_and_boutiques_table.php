<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsAndBoutiquesTable extends Migration
{
    private const TABLE_NAME = 'shops_and_boutiques';
    private const PIVOT_TABLE_NAME = 'ref_shops_and_boutiques_brands';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->boolean('clothes')->default(0)->comment('Одежда');
            $table->boolean('accessories')->default(0)->comment('Аксессуары');
            $table->boolean('jewellery')->default(0)->comment('Ювелирные изделия');
            $table->boolean('beauty')->default(0)->comment('Beauty');
            $table->string('logo')->comment('Логотип');
            $table->string('name')->comment('Название');
            $table->text('description')->comment('Описание');
            $table->foreignId('contacts_id')
                ->comment('Контакты')
                ->constrained('contacts')
                ->cascadeOnDelete();
            $table->string('location')->comment('Расположение');
            $table->timestamps();
        });

        Schema::create(self::PIVOT_TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId('shops_and_boutique_id')
                ->constrained('shops_and_boutiques')
                ->cascadeOnDelete();
            $table->foreignId('brands_handbook_id')
                ->constrained('brands_handbook')
                ->cascadeOnDelete();
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
        Schema::dropIfExists(self::PIVOT_TABLE_NAME);
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
