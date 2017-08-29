<?php namespace Fannan\EnvelopesModule\Log\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class LogTableBuilder extends TableBuilder
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
                'log_name',
                'log_mobile',
                'log_amount'
            ]
        ],
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'log_name',
        'log_mobile',
        'log_amount',
        'entry.created_at'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        /*'edit'*/
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
