<?php namespace Fannan\AdvertisingModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Fannan\AdvertisingModule\Slot\Contract\SlotRepositoryInterface;
use Fannan\AdvertisingModule\Slot\SlotRepository;
use Anomaly\Streams\Platform\Model\Advertising\AdvertisingSlotEntryModel;
use Fannan\AdvertisingModule\Slot\SlotModel;
use Fannan\AdvertisingModule\Advertising\Contract\AdvertisingRepositoryInterface;
use Fannan\AdvertisingModule\Advertising\AdvertisingRepository;
use Anomaly\Streams\Platform\Model\Advertising\AdvertisingAdvertisingEntryModel;
use Fannan\AdvertisingModule\Advertising\AdvertisingModel;
use Illuminate\Routing\Router;

class AdvertisingModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/advertising/slot'           => 'Fannan\AdvertisingModule\Http\Controller\Admin\SlotController@index',
        'admin/advertising/slot/create'    => 'Fannan\AdvertisingModule\Http\Controller\Admin\SlotController@create',
        'admin/advertising/slot/edit/{id}' => 'Fannan\AdvertisingModule\Http\Controller\Admin\SlotController@edit',
        'admin/advertising'           => 'Fannan\AdvertisingModule\Http\Controller\Admin\AdvertisingController@index',
        'admin/advertising/create'    => 'Fannan\AdvertisingModule\Http\Controller\Admin\AdvertisingController@create',
        'admin/advertising/edit/{id}' => 'Fannan\AdvertisingModule\Http\Controller\Admin\AdvertisingController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Fannan\AdvertisingModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * The addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Fannan\AdvertisingModule\Event\ExampleEvent::class => [
        //    Fannan\AdvertisingModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Fannan\AdvertisingModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        AdvertisingSlotEntryModel::class => SlotModel::class,
        AdvertisingAdvertisingEntryModel::class => AdvertisingModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        SlotRepositoryInterface::class => SlotRepository::class,
        AdvertisingRepositoryInterface::class => AdvertisingRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
