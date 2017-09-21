<?php namespace Fannan\LotteryModule\Grant\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class GrantTableBuilder extends TableBuilder
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
    protected $filters = [];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'grant_ticket_name',
        'grant_grade',
        'grant_valid_period',
        'grant_num',
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
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
