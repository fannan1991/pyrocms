<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Member\MemberModel;
use League\Fractal\TransformerAbstract;

class MemberTransformer extends TransformerAbstract
{
    public function transform(MemberModel $member)
    {
        return [
            'id' => $member['id'],
            'mobile'   => $member['mobile'],
            'password' => $member['password'],
            'invitation_code' => $member['invitation_code'],
            'nickname' => $member['nickname'],
            'grade' => $member['grade'],
            'is_verified' => $member['is_verified'],
            'real_name' => $member['real_name'],
            'id_card' => $member['id_card'],
            'results' => $member['results'],
            'integral' => $member['integral'],
            'gold' => $member['gold'],
            'created_at' => $member['created_at']
        ];
    }
}