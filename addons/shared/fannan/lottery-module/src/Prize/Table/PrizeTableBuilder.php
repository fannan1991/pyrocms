<?php namespace Fannan\LotteryModule\Prize\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class PrizeTableBuilder extends TableBuilder
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
                'prize_grade',
                'prize_name',
            ]
        ],
        'prize_lottery_id'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'prize_name',
        'prize_grade',
        'prize_probability',
        'prize_num',
        'prize_lottery_id',
        'entry.created_at'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
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
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
