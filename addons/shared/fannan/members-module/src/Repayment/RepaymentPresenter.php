<?php namespace Fannan\MembersModule\Repayment;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class RepaymentPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function statusValue($size = 'sm'){
        $color = 'default';
        $s = $this->object->repayment_status;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '未还款';
                break;

            case 1:
                $color = 'success';
                $status = '已还款';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
