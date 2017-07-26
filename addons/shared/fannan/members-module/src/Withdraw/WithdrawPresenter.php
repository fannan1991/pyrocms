<?php namespace Fannan\MembersModule\Withdraw;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class WithdrawPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function statusValue($size = 'sm'){
        $color = 'default';
        $s = $this->object->withdraw_status;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '待审核';
                break;

            case 1:
                $color = 'success';
                $status = '提现中';
                break;
            case 2:
                $color = 'success';
                $status = '拒绝';
                break;
            case 3:
                $color = 'success';
                $status = '已成功';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
