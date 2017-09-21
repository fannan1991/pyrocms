<?php namespace Fannan\LotteryModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class LotteryModule extends Module
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
        'lottery' => [
            'buttons' => [
                /*'new_lottery',*/
            ],
        ],
        'prize' => [
            'buttons' => [
                /*'new_prize',*/
            ],
        ],
        'winning' => [
            'buttons' => [
                /*'new_winning',*/
            ],
        ],
        'ticket' => [
            'buttons' => [
                'new_ticket',
            ],
        ],
        'grant' => [
            'buttons' => [
                'new_grant',
            ],
        ],
    ];

}
