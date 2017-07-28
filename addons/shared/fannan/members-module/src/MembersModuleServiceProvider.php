<?php namespace Fannan\MembersModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Fannan\MembersModule\Message\Contract\MessageRepositoryInterface;
use Fannan\MembersModule\Message\MessageRepository;
use Anomaly\Streams\Platform\Model\Members\MembersMessageEntryModel;
use Fannan\MembersModule\Message\MessageModel;
use Fannan\MembersModule\Withdraw\Contract\WithdrawRepositoryInterface;
use Fannan\MembersModule\Withdraw\WithdrawRepository;
use Anomaly\Streams\Platform\Model\Members\MembersWithdrawEntryModel;
use Fannan\MembersModule\Withdraw\WithdrawModel;
use Fannan\MembersModule\Repayment\Contract\RepaymentRepositoryInterface;
use Fannan\MembersModule\Repayment\RepaymentRepository;
use Anomaly\Streams\Platform\Model\Members\MembersRepaymentEntryModel;
use Fannan\MembersModule\Repayment\RepaymentModel;
use Fannan\MembersModule\Loan\Contract\LoanRepositoryInterface;
use Fannan\MembersModule\Loan\LoanRepository;
use Anomaly\Streams\Platform\Model\Members\MembersLoanEntryModel;
use Fannan\MembersModule\Loan\LoanModel;
use Fannan\MembersModule\Gold\Contract\GoldRepositoryInterface;
use Fannan\MembersModule\Gold\GoldRepository;
use Anomaly\Streams\Platform\Model\Members\MembersGoldEntryModel;
use Fannan\MembersModule\Gold\GoldModel;
use Fannan\MembersModule\Integral\Contract\IntegralRepositoryInterface;
use Fannan\MembersModule\Integral\IntegralRepository;
use Anomaly\Streams\Platform\Model\Members\MembersIntegralEntryModel;
use Fannan\MembersModule\Integral\IntegralModel;
use Fannan\MembersModule\Member\Contract\MemberRepositoryInterface;
use Fannan\MembersModule\Member\MemberRepository;
use Anomaly\Streams\Platform\Model\Members\MembersMembersEntryModel;
use Fannan\MembersModule\Member\MemberModel;
use Illuminate\Routing\Router;

class MembersModuleServiceProvider extends AddonServiceProvider
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
        'admin/members/message'           => 'Fannan\MembersModule\Http\Controller\Admin\MessageController@index',
        'admin/members/message/create'    => 'Fannan\MembersModule\Http\Controller\Admin\MessageController@create',
        'admin/members/message/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\MessageController@edit',
        'admin/members/withdraw'           => 'Fannan\MembersModule\Http\Controller\Admin\WithdrawController@index',
        'admin/members/withdraw/create'    => 'Fannan\MembersModule\Http\Controller\Admin\WithdrawController@create',
        'admin/members/withdraw/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\WithdrawController@edit',
        'admin/members/repayment'           => 'Fannan\MembersModule\Http\Controller\Admin\RepaymentController@index',
        'admin/members/repayment/create'    => 'Fannan\MembersModule\Http\Controller\Admin\RepaymentController@create',
        'admin/members/repayment/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\RepaymentController@edit',
        'admin/members/loan'           => 'Fannan\MembersModule\Http\Controller\Admin\LoanController@index',
        'admin/members/loan/create'    => 'Fannan\MembersModule\Http\Controller\Admin\LoanController@create',
        'admin/members/loan/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\LoanController@edit',
        'admin/members/gold'           => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@index',
        'admin/members/gold/create'    => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@create',
        'admin/members/gold/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@edit',
        'admin/members/gold'           => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@index',
        'admin/members/gold/create'    => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@create',
        'admin/members/gold/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\GoldController@edit',
        'admin/members/integral'           => 'Fannan\MembersModule\Http\Controller\Admin\IntegralController@index',
        'admin/members/integral/create'    => 'Fannan\MembersModule\Http\Controller\Admin\IntegralController@create',
        'admin/members/integral/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\IntegralController@edit',
        'admin/members'           => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@index',
        'admin/members/create'    => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@create',
        'admin/members/edit/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@edit',
        'admin/members/son/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@son',
        'admin/members/grandson/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@grandson',
        'admin/members/heavygrandson/{id}' => 'Fannan\MembersModule\Http\Controller\Admin\MembersController@heavygrandson',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Fannan\MembersModule\Http\Middleware\ExampleMiddleware::class
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
        //Fannan\MembersModule\Event\ExampleEvent::class => [
        //    Fannan\MembersModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Fannan\MembersModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        MembersMessageEntryModel::class => MessageModel::class,
        MembersWithdrawEntryModel::class => WithdrawModel::class,
        MembersRepaymentEntryModel::class => RepaymentModel::class,
        MembersLoanEntryModel::class => LoanModel::class,
        MembersGoldEntryModel::class => GoldModel::class,
        MembersGoldEntryModel::class => GoldModel::class,
        MembersIntegralEntryModel::class => IntegralModel::class,
        MembersMembersEntryModel::class => MemberModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        MessageRepositoryInterface::class => MessageRepository::class,
        WithdrawRepositoryInterface::class => WithdrawRepository::class,
        RepaymentRepositoryInterface::class => RepaymentRepository::class,
        LoanRepositoryInterface::class => LoanRepository::class,
        GoldRepositoryInterface::class => GoldRepository::class,
        GoldRepositoryInterface::class => GoldRepository::class,
        IntegralRepositoryInterface::class => IntegralRepository::class,
        MemberRepositoryInterface::class => MemberRepository::class,
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
