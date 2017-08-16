<?php namespace Fannan\EnvelopesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Fannan\EnvelopesModule\Log\Contract\LogRepositoryInterface;
use Fannan\EnvelopesModule\Log\LogRepository;
use Anomaly\Streams\Platform\Model\Envelopes\EnvelopesLogEntryModel;
use Fannan\EnvelopesModule\Log\LogModel;
use Fannan\EnvelopesModule\Envelope\Contract\EnvelopeRepositoryInterface;
use Fannan\EnvelopesModule\Envelope\EnvelopeRepository;
use Anomaly\Streams\Platform\Model\Envelopes\EnvelopesEnvelopesEntryModel;
use Fannan\EnvelopesModule\Envelope\EnvelopeModel;
use Illuminate\Routing\Router;

class EnvelopesModuleServiceProvider extends AddonServiceProvider
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
        'admin/envelopes/log'           => 'Fannan\EnvelopesModule\Http\Controller\Admin\LogController@index',
        'admin/envelopes/log/create'    => 'Fannan\EnvelopesModule\Http\Controller\Admin\LogController@create',
        'admin/envelopes/log/edit/{id}' => 'Fannan\EnvelopesModule\Http\Controller\Admin\LogController@edit',
        //'admin/envelopes'           => 'Fannan\EnvelopesModule\Http\Controller\Admin\EnvelopesController@index',
        'admin/envelopes'           => 'Fannan\EnvelopesModule\Http\Controller\Admin\EnvelopesController@setting',
        'admin/envelopes/create'    => 'Fannan\EnvelopesModule\Http\Controller\Admin\EnvelopesController@create',
        'admin/envelopes/edit/{id}' => 'Fannan\EnvelopesModule\Http\Controller\Admin\EnvelopesController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Fannan\EnvelopesModule\Http\Middleware\ExampleMiddleware::class
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
        //Fannan\EnvelopesModule\Event\ExampleEvent::class => [
        //    Fannan\EnvelopesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Fannan\EnvelopesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        EnvelopesLogEntryModel::class => LogModel::class,
        EnvelopesEnvelopesEntryModel::class => EnvelopeModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        LogRepositoryInterface::class => LogRepository::class,
        EnvelopeRepositoryInterface::class => EnvelopeRepository::class,
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
