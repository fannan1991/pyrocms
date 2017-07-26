<?php namespace Fannan\MembersModule\Withdraw\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class WithdrawTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'fields' => [
                'withdraw_bank',
                'withdraw_name',
                'withdraw_card',
                'withdraw_bank_card',
                'withdraw_mobile',
                'withdraw_member_id',
            ]
        ],
        'withdraw_status',
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'withdraw_amount',
        'withdraw_bank',
        'withdraw_name',
        'withdraw_card',
        'withdraw_bank_card',
        'withdraw_mobile',
        'entry.status_value'

    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [
        'order_by' => [
            'id' => 'DESC',
        ],
    ];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
