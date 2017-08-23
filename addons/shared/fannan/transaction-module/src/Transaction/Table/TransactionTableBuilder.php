<?php namespace Fannan\TransactionModule\Transaction\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class TransactionTableBuilder extends TableBuilder
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
            'trade_out_no',
            'trade_no',
            'trade_mobile',
            'trade_payment_method'
        ],
        'trade_status',
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'trade_out_no',
        'trade_amount',
        'trade_project',
        'trade_member_id',
        'entry.status',
        'trade_payment_method',
        'trade_no',
        'trade_payment_time',
        'entry.created_at'
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
