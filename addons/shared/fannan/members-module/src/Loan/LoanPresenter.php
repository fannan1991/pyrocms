<?php namespace Fannan\MembersModule\Loan;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class LoanPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function statusValue($size = 'sm'){
        $color = 'default';
        $s = $this->object->loan_status;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '待审核';
                break;

            case 1:
                $color = 'success';
                $status = '审核通过';
                break;
            case 2:
                $color = 'success';
                $status = '审核拒绝';
                break;
            case 3:
                $color = 'success';
                $status = '已完成';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
