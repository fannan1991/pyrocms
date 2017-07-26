<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateMembersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'members',
         /*'title_column' => 'real_name',*/
         'translatable' => false,
         'trashable' => false,
         'searchable' => false,
         'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'mobile' => [
            'unique' => true,
            'required' => true,
        ],
        'password' => [
            'required' => true,
        ],
        'openid',
        'invitation_code' => [
            'required' => true,
        ],
        'nickname',
        'avatar',
        'grade',
        'is_verified',
        'real_name',
        'id_card',
        'card_positive_pic',
        'card_negative_pic',
        'card_pic',
        'results',
        'integral',
        'gold',
        'parent_id',
        'grand_id',
        'great_grand_id',

    ];

}
