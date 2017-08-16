<?php namespace Fannan\LotteryModule\Lottery;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class LotteryPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function ticket($size = 'sm'){
        $color = 'default';
        $s = $this->object->lottery_is_ticket;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '否';
                break;

            case 1:
                $color = 'success';
                $status = '是';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }

    public function open($size = 'sm'){
        $color = 'default';
        $s = $this->object->lottery_is_open;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '否';
                break;

            case 1:
                $color = 'success';
                $status = '是';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
