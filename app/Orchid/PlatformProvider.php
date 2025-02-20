<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [
            // Menu::make('Get Started')
            //     ->icon('bs.book')
            //     ->title('Navigation')
            //     ->route(config('platform.index')),

            // Menu::make('Sample Screen')
            //     ->icon('bs.collection')
            //     ->route('platform.example')
            //     ->badge(fn () => 6),

            // Menu::make('Form Elements')
            //     ->icon('bs.card-list')
            //     ->route('platform.example.fields')
            //     ->active('*/examples/form/*'),

            // Menu::make('Overview Layouts')
            //     ->icon('bs.window-sidebar')
            //     ->route('platform.example.layouts'),

            // Menu::make('Grid System')
            //     ->icon('bs.columns-gap')
            //     ->route('platform.example.grid'),

            // Menu::make('Charts')
            //     ->icon('bs.bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('bs.card-text')
            //     ->route('platform.example.cards')
            //     ->divider(),

            // Menu::make(__('Users'))
            //     ->icon('bs.people')
            //     ->route('platform.systems.users')
            //     ->permission('platform.systems.users')
            //     ->title(__('Access Controls')),

            // Menu::make(__('Roles'))
            //     ->icon('bs.shield')
            //     ->route('platform.systems.roles')
            //     ->permission('platform.systems.roles')
            //     ->divider(),

            // Menu::make('Documentation')
            //     ->title('Docs')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://orchid.software/en/docs')
            //     ->target('_blank'),

            // Menu::make('Changelog')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
            //     ->target('_blank')
            //     ->badge(fn () => Dashboard::version(), Color::DARK),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('List Roles'))
                ->addPermission('platform.systems.roles.add', __('Add Role'))
                ->addPermission('platform.systems.roles.edit', __('Edit Role'))
                ->addPermission('platform.systems.roles.remove', __('Remove Role'))

                ->addPermission('platform.systems.users', __('List Users'))
                ->addPermission('platform.systems.users.add', __('Add User'))
                ->addPermission('platform.systems.users.edit', __('Edit User'))
                ->addPermission('platform.systems.users.remove', __('Remove User'))
                ->addPermission('platform.provinces', __('List Provinces'))
                ->addPermission('platform.provinces.add', __('Add Province'))
                ->addPermission('platform.provinces.edit', __('Edit Province'))
                ->addPermission('platform.provinces.remove', __('Remove Province'))
                ->addPermission('platform.states', __('List States'))
                ->addPermission('platform.states.add', __('Add State'))
                ->addPermission('platform.states.edit', __('Edit State'))
                ->addPermission('platform.states.remove', __('Remove State')),


            ItemPermission::group(__('Organisation Management'))
                ->addPermission('platform.organisations', __('List Organisations'))
                ->addPermission('platform.organisations.add', __('Add Organisation'))
                ->addPermission('platform.organisations.edit', __('Edit Organisation'))
                ->addPermission('platform.organisations.remove', __('Remove Organisation'))
                ->addPermission('platform.organisation.specialists', __('Organization Specialists Acceptance'))
                ->addPermission('platform.organisation.specialists.confirm', __('Organization Specialists Confirm'))
                ->addPermission('platform.organisation.specialists.reject', __('Organization Specialists Reject'))
                ->addPermission('platform.organisation.specialists.dismiss', __('Organization Specialists Dismiss')),

            ItemPermission::group(__('Category Management'))
                ->addPermission('platform.categories', __('List Categories'))
                ->addPermission('platform.categories.add', __('Add Category'))
                ->addPermission('platform.categories.edit', __('Edit Category'))
                ->addPermission('platform.categories.remove', __('Remove Category')),

            ItemPermission::group(__('Slider Management'))
                ->addPermission('platform.sliders', __('List Sliders'))
                ->addPermission('platform.sliders.add', __('Add Slider'))
                ->addPermission('platform.sliders.edit', __('Edit Slider'))
                ->addPermission('platform.sliders.remove', __('Remove Slider')),

            ItemPermission::group(__('Audio Management'))
                ->addPermission('platform.audios', __('List Audios'))
                ->addPermission('platform.audios.add', __('Add Audio'))
                ->addPermission('platform.audios.edit', __('Edit Audio'))
                ->addPermission('platform.audios.remove', __('Remove Audio')),

            ItemPermission::group(__('Package Management'))
                ->addPermission('platform.packages', __('List Packages'))
                ->addPermission('platform.packages.add', __('Add Package'))
                ->addPermission('platform.packages.edit', __('Edit Package'))
                ->addPermission('platform.packages.remove', __('Remove Package')),

            ItemPermission::group(__('Test Management'))
                ->addPermission('platform.tests', __('List Tests'))
                ->addPermission('platform.tests.add', __('Add Test'))
                ->addPermission('platform.tests.edit', __('Edit Test'))
                ->addPermission('platform.tests.remove', __('Remove Test')),
            ItemPermission::group(__('Patients Management'))
                ->addPermission('platform.patients', __('List Patients'))
                ->addPermission('platform.patients.add', __('Add Patient'))
                ->addPermission('platform.patients.edit', __('Edit Patient'))
                ->addPermission('platform.patients.remove', __('Remove Patient')),
            ItemPermission::group(__('Sessions Management'))
                ->addPermission('platform.sessions', __('Sessions'))
        ];
    }
}
