<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Member;
use League\Fractal\TransformerAbstract;

class MemberTransformer extends TransformerAbstract
{
    public function transform(Member $member)
    {
        return [
            'mobile'   => $member['mobile'],
            'password' => $member['password'],
            'id' => $member['id']
        ];
    }
}