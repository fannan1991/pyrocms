<?php namespace Fannan\MembersModule\Integral\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class IntegralTableBuilder extends TableBuilder
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
                'integral_mobile',
                'integral_num',
                'integral_summary',
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
        'integral_num',
        'integral_summary',
        'integral_mobile',
        'entry.integral_member_id.real_name',
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
