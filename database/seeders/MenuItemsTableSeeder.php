<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'О Торговом Центре',
            'url' => '',
            'route' => 'voyager.about_mall.index',
            'target' => '_self',
            'icon_class' => 'voyager-info-circled',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Esentai App',
            'url' => '',
            'route' => 'voyager.esentai_app_info.index',
            'target' => '_self',
            'icon_class' => 'voyager-phone',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Новости и События',
            'url' => '',
            'route' => 'voyager.news_and_events.index',
            'target' => '_self',
            'icon_class' => 'voyager-news',
            'color' => null,
            'order' => 1,
        ]);

//        $menuItem = MenuItem::create([
//            'menu_id' => $menu->id,
//            'title' => 'Пользователи',
//            'url' => '',
//            'route' => 'voyager.users.index',
//            'target' => '_self',
//            'icon_class' => 'voyager-people',
//            'color' => null,
//            'order' => 1,
//        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Контакты',
            'url' => '',
            'route' => 'voyager.contacts.index',
            'target' => '_self',
            'icon_class' => 'voyager-person',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Бренды',
            'url' => '',
            'route' => 'voyager.brands_handbook.index',
            'target' => '_self',
            'icon_class' => 'voyager-paypal',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Сервисы',
            'url' => '',
            'route' => 'voyager.services.index',
            'target' => '_self',
            'icon_class' => 'voyager-hammer',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Развлечения',
            'url' => '',
            'route' => 'voyager.entertainments.index',
            'target' => '_self',
            'icon_class' => 'voyager-controller',
            'color' => null,
            'order' => 1,
        ]);




        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Рестораны',
            'url' => '',
            'route' => 'voyager.food_and_beverage.index',
            'target' => '_self',
            'icon_class' => 'voyager-pizza',
            'color' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Магазины/Бутики',
            'url' => '',
            'route' => 'voyager.shops_and_boutiques.index',
            'target' => '_self',
            'icon_class' => 'voyager-shop',
            'color' => null,
            'order' => 1,
        ]);


        $menuItemParent = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Инструменты',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-tools',
            'color' => null,
            'parent_id' => null,
            'order' => 1,
        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Настройки',
            'url' => '',
            'route' => 'voyager.settings.index',
            'target' => '_self',
            'icon_class' => 'voyager-settings',
            'color' => null,
            'parent_id' => $menuItemParent->id,
            'order' => 1,
        ]);

//        $menuItem = MenuItem::create([
//            'menu_id' => $menu->id,
//            'title' => 'Роли',
//            'url' => '',
//            'route' => 'voyager.roles.index',
//            'target' => '_self',
//            'icon_class' => 'voyager-lock',
//            'color' => null,
//            'parent_id' => $menuItemParent->id,
//            'order' => 1,
//        ]);

        $menuItem = MenuItem::create([
            'menu_id' => $menu->id,
            'title' => 'Медиа',
            'url' => '',
            'route' => 'voyager.media.index',
            'target' => '_self',
            'icon_class' => 'voyager-images',
            'color' => null,
            'parent_id' => $menuItemParent->id,
            'order' => 1,
        ]);


        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'База данных',
            'url'     => '',
            'route'   => 'voyager.database.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => $menuItemParent->id,
                'order'      => 11,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Компас',
            'url'     => '',
            'route'   => 'voyager.compass.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-compass',
                'color'      => null,
                'parent_id'  => $menuItemParent->id,
                'order'      => 12,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.bread'),
            'url'     => '',
            'route'   => 'voyager.bread.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread',
                'color'      => null,
                'parent_id'  => $menuItemParent->id,
                'order'      => 13,
            ])->save();
        }

    }
}
