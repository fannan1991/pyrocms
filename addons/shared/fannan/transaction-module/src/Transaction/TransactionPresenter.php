<?php namespace Fannan\TransactionModule\Transaction;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class TransactionPresenter extends EntryPresenter
{
    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function status($size = 'sm'){
        $color = 'default';
        $s = $this->object->trade_status;
        switch ($s) {
            case 1:
                $color = 'danger';
                $status = '未支付';
                break;

            case 2:
                $color = 'success';
                $status = '已支付';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
