<?php namespace Fannan\LotteryModule\Winning;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class WinningPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function exchange($size = 'sm'){
        $color = 'default';
        $s = $this->object->winning_status;
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
