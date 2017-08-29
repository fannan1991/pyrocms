<?php namespace Fannan\MembersModule\Repayment\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class RepaymentTableBuilder extends TableBuilder
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
                'repayment_sn',
                'repayment_loan_name',
                'repayment_loan_card',
                'repayment_mobile',
            ]
        ],
        'repayment_loan'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'repayment_amount',
        'repayment_date',
        'entry.status_value',
        'repayment_loan_name',
        'repayment_loan_card',
        'repayment_mobile',
        'repayment_sn'
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
        /*'delete'*/
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
