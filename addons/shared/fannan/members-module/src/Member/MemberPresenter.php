<?php namespace Fannan\MembersModule\Member;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class MemberPresenter extends EntryPresenter
{
    protected $object;

    public function __construct($object)
    {
        parent::__construct($object);
    }


    public function verified($size = 'sm'){
        $color = 'default';
        $s = $this->object->is_verified;
        switch ($s) {
            case 0:
                $color = 'danger';
                $status = '未认证';
                break;

            case 1:
                $color = 'success';
                $status = '已认证';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
    public function gradeValue($size = 'sm'){
        $color = 'default';
        $s = $this->object->grade;
        switch ($s) {
            case 0:
                $color = 'success';
                $status = '游客';
                break;
            case 1:
                $color = 'success';
                $status = '普通会员';
                break;

            case 2:
                $color = 'success';
                $status = '铜牌会员';
                break;
            case 3:
                $color = 'success';
                $status = '银牌会员';
                break;
            case 4:
                $color = 'success';
                $status = '金牌会员';
                break;
            case 5:
                $color = 'success';
                $status = '钻石会员';
                break;
        }

        return '<span class="label label-' . $size . ' label-' . $color . '">' . $status . '</span>';
    }
}
