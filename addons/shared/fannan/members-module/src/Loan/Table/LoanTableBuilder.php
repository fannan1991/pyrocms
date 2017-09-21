<?php namespace Fannan\MembersModule\Loan\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class LoanTableBuilder extends TableBuilder
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
                'loan_name',
                'loan_id_card',
                'loan_order_sn',
                'loan_bz',
            ]
        ],
        'loan_status'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'loan_name',
        'loan_member_id',
        'loan_id_card',
        'loan_order_sn',
        'loan_amount',
        'entry.status_value',
        'entry.created_at'

    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'repayment'
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
