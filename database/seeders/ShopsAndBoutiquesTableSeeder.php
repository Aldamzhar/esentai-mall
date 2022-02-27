<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Permission;

class ShopsAndBoutiquesTableSeeder extends Seeder
{
    private const TABLE_NAME = 'shops_and_boutiques';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = DataType::create([
            'slug' => self::TABLE_NAME,
            'name' => self::TABLE_NAME,
            'display_name_singular' => 'Магазины/Бутики',
            'display_name_plural' => 'Магазины/Бутики',
            'icon' => '',
            'model_name' => 'App\\Models\\ShopsAndBoutiques',
            'controller' => '',
            'generate_permissions' => 1,
            'description' => ''
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'id',
            'type' => 'number',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'name',
            'type' => 'text',
            'display_name' => 'Название',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'description',
            'type' => 'text_area',
            'display_name' => 'Описание',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'logo',
            'type' => 'image',
            'display_name' => 'Логотип',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'contacts_id',
            'type' => 'number',
            'display_name' => 'Контакты',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'contacts_id_relationship',
            'type' => 'relationship',
            'display_name' => 'Контакты',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'model' => 'App\\Models\\Contacts',
                'table' => 'contacts',
                'type' => 'belongsTo',
                'column' => 'contacts_id',
                'key' => 'id',
                'label' => 'for_users',
                'pivot_table' => 'migrations',
                'pivot' => '0',
                'taggable' => null
            ],
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'shops_and_boutiques_belongstomany_brands_relationship',
            'type' => 'relationship',
            'display_name' => 'Бренды',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'model' => 'App\\Models\\BrandsHandbook',
                'table' => 'brands_handbook',
                'type' => 'belongsToMany',
                'column' => 'id',
                'key' => 'id',
                'label' => 'name',
                'pivot_table' => 'ref_shops_and_boutiques_brands',
                'pivot' => '1',
                'taggable' => 0,
            ],
        ]);


        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'location',
            'type' => 'text',
            'display_name' => 'Расположение',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'clothes',
            'type' => 'checkbox',
            'display_name' => 'Одежда',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'on' => 'Да',
                'off' => 'Нет'
            ]
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'accessories',
            'type' => 'checkbox',
            'display_name' => 'Аксессуары',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'on' => 'Да',
                'off' => 'Нет'
            ]
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'jewellery',
            'type' => 'checkbox',
            'display_name' => 'Ювелирные изделия',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'on' => 'Да',
                'off' => 'Нет'
            ]
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'beauty',
            'type' => 'checkbox',
            'display_name' => 'Beauty',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => [
                'on' => 'Да',
                'off' => 'Нет'
            ]
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => 'Дата создания',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => 'Дата обновления',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
        ]);

        DataRow::create([
            'data_type_id' => $dataType->id,
            'field' => 'deleted_at',
            'type' => 'timestamp',
            'display_name' => 'Дата удаления',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
        ]);

        Permission::generateFor(self::TABLE_NAME);
    }
}
