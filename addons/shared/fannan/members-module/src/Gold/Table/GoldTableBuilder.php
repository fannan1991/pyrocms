<?php namespace Fannan\MembersModule\Gold\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class GoldTableBuilder extends TableBuilder
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
                'gold_mobile',
                'gold_num',
                'gold_summary',
                'gold_member_id',
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
        'gold_num',
        'gold_summary',
        'gold_mobile',
        'entry.gold_member_id.real_name',
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
