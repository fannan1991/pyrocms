<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Withdraw\WithdrawModel;
use League\Fractal\TransformerAbstract;

class WithdrawTransformer extends TransformerAbstract
{
    public function transform(WithdrawModel $withdrawModel)
    {
        return [
            'id' => $withdrawModel['id'],
            'withdraw_amount' => $withdrawModel['withdraw_amount'],
            'withdraw_bank' => $withdrawModel['withdraw_bank'],
            'withdraw_name' => $withdrawModel['withdraw_name'],
            'withdraw_card' => $withdrawModel['withdraw_card'],
            'withdraw_bank_card' => $withdrawModel['withdraw_bank_card'],
            'withdraw_mobile' => $withdrawModel['withdraw_mobile'],
            'withdraw_status' => $withdrawModel['withdraw_status'],
            'created_at' => $withdrawModel['created_at'],

        ];
    }
}