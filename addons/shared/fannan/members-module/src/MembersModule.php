<?php namespace Fannan\MembersModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class MembersModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'members' => [
            'buttons' => [
                /*'new_member',*/
            ],
        ],
        'integral' => [
            'buttons' => [
                /*'new_integral',*/
            ],
        ],
        'gold' => [
            'buttons' => [
                /*'new_gold',*/
            ],
        ],
        'loan' => [
            'buttons' => [
                /*'new_loan',*/
            ],
        ],
        'repayment' => [
            'buttons' => [
                /*'new_repayment',*/
            ],
        ],
        'withdraw' => [
            'buttons' => [
                /*'new_withdraw',*/
            ],
        ],
        'message' => [
            'buttons' => [
                'new_message',
            ],
        ],
    ];

}
