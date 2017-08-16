<?php namespace Fannan\LotteryModule\Ticket;

use Anomaly\Streams\Platform\Entry\EntryPresenter;
use Carbon\Carbon;

class TicketPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function status($size = 'sm'){
        $color = 'default';
        $s = $this->value();
        switch ($s) {
            case 'expired':
                $color = 'danger';
                $status = '已过期';
                break;

            case 'canUse':
                $color = 'success';
                $status = '可使用';
                break;
            case 'used':
                $color = 'success';
                $status = '已使用';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }


    public function value()
    {
        $validPeriod = $this->object->ticket_valid_period;
        $isUse = $this->object->ticket_is_use;

        if ($validPeriod->lt(Carbon::now()))
        {
            $status = 'expired';//过期
        }
        if ($validPeriod->gt(Carbon::now()) && $isUse == 0)
        {
            $status = 'canUse';//可使用
        }
        if ($validPeriod->gt(Carbon::now()) && $isUse == 1)
        {
            $status = 'used';//已使用
        }
        return $status;
    }
}
