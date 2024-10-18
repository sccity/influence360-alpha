<?php

namespace Webkul\Admin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'contacts.person.create.after' => [
            'Webkul\Admin\Listeners\Person@linkToEmail',
        ],

        'initiative.create.after' => [
            'Webkul\Admin\Listeners\Initiative@linkToEmail',
        ],

        'activity.create.after' => [
            'Webkul\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],

        'activity.update.after' => [
            'Webkul\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],
    ];
}
