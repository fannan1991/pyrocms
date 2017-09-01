<?php namespace Fannan\LotteryModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Fannan\LotteryModule\Ticket\Contract\TicketRepositoryInterface;
use Fannan\LotteryModule\Ticket\TicketRepository;
use Anomaly\Streams\Platform\Model\Lottery\LotteryTicketEntryModel;
use Fannan\LotteryModule\Ticket\TicketModel;
use Fannan\LotteryModule\Winning\Contract\WinningRepositoryInterface;
use Fannan\LotteryModule\Winning\WinningRepository;
use Anomaly\Streams\Platform\Model\Lottery\LotteryWinningEntryModel;
use Fannan\LotteryModule\Winning\WinningModel;
use Fannan\LotteryModule\Prize\Contract\PrizeRepositoryInterface;
use Fannan\LotteryModule\Prize\PrizeRepository;
use Anomaly\Streams\Platform\Model\Lottery\LotteryPrizeEntryModel;
use Fannan\LotteryModule\Prize\PrizeModel;
use Fannan\LotteryModule\Lottery\Contract\LotteryRepositoryInterface;
use Fannan\LotteryModule\Lottery\LotteryRepository;
use Anomaly\Streams\Platform\Model\Lottery\LotteryLotteryEntryModel;
use Fannan\LotteryModule\Lottery\LotteryModel;
use Illuminate\Routing\Router;

class LotteryModuleServiceProvider extends AddonServiceProvider
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
        'admin/lottery/ticket'           => 'Fannan\LotteryModule\Http\Controller\Admin\TicketController@index',
        'admin/lottery/ticket/create'    => 'Fannan\LotteryModule\Http\Controller\Admin\TicketController@create',
        'admin/lottery/ticket/edit/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\TicketController@edit',
        'admin/lottery/winning'           => 'Fannan\LotteryModule\Http\Controller\Admin\WinningController@index',
        'admin/lottery/winning/create'    => 'Fannan\LotteryModule\Http\Controller\Admin\WinningController@create',
        'admin/lottery/winning/edit/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\WinningController@edit',
        'admin/lottery/prize'           => 'Fannan\LotteryModule\Http\Controller\Admin\PrizeController@index',
        'admin/lottery/prize/create'    => 'Fannan\LotteryModule\Http\Controller\Admin\PrizeController@create',
        'admin/lottery/prize/edit/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\PrizeController@edit',
        //'admin/lottery/'           => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@index',
        'admin/lottery/'           => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@setting',
        'admin/lottery/create'    => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@create',
        'admin/lottery/edit/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@edit',
        'admin/lottery/prize/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@prize',
        'admin/lottery/winning/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\LotteryController@winning',
        //'admin/lottery/grant'           => 'Fannan\LotteryModule\Http\Controller\Admin\GrantController@index',
        'admin/lottery/grant'           => 'Fannan\LotteryModule\Http\Controller\Admin\GrantController@send',
        'admin/lottery/grant/create'    => 'Fannan\LotteryModule\Http\Controller\Admin\GrantController@create',
        'admin/lottery/grant/edit/{id}' => 'Fannan\LotteryModule\Http\Controller\Admin\GrantController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Fannan\LotteryModule\Http\Middleware\ExampleMiddleware::class
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
        //Fannan\LotteryModule\Event\ExampleEvent::class => [
        //    Fannan\LotteryModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Fannan\LotteryModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        LotteryTicketEntryModel::class => TicketModel::class,
        LotteryWinningEntryModel::class => WinningModel::class,
        LotteryPrizeEntryModel::class => PrizeModel::class,
        LotteryLotteryEntryModel::class => LotteryModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TicketRepositoryInterface::class => TicketRepository::class,
        WinningRepositoryInterface::class => WinningRepository::class,
        PrizeRepositoryInterface::class => PrizeRepository::class,
        LotteryRepositoryInterface::class => LotteryRepository::class,
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
