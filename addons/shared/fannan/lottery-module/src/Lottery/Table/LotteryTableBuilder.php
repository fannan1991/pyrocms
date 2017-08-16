<?php namespace Fannan\LotteryModule\Lottery\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class LotteryTableBuilder extends TableBuilder
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
            'lottery_title',
        ],
        'lottery_is_ticket',
        'lottery_is_open'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'lottery_title',
        'lottery_start',
        'lottery_end',
        'entry.ticket',
        'entry.open'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'prize',
        'winning'
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
