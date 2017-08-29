<?php namespace Fannan\TransactionModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class TransactionModule extends Module
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
        'transaction' => [
            'buttons' => [
                /*'new_transaction',*/
            ],
        ],
    ];

}
