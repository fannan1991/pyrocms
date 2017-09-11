<?php namespace Fannan\MembersModule\Member\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class MemberTableBuilder extends TableBuilder
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
                'mobile',
                'real_name',
                'invitation_code',
                'nickname',
                'id_card',
            ]
        ],
        'verified_status',
        'grade',
        'parent_id',
        'grand_id',
        'great_grand_id'

    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.id',
        'mobile',
        'nickname',
        'real_name',
        'integral',
        'gold',
        'entry.verified',
        'invitation_code',
        'entry.grade_value',
        'entry.created_at'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'son',
        'grandson',
        'heavygrandson'
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
