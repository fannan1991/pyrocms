<?php namespace Fannan\AdvertisingModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class AdvertisingModule extends Module
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
        'advertising' => [
            'buttons' => [
                'new_advertising',
            ],
        ],
        'slot' => [
            'buttons' => [
                'new_slot',
            ],
        ],
    ];

}
