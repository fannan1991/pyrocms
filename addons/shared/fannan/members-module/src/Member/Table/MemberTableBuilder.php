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
        'is_verified',
        'grade',


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
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
