<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Integral\IntegralModel;
use League\Fractal\TransformerAbstract;

class IntegralTransformer extends TransformerAbstract
{
    public function transform(IntegralModel $integralModel)
    {
        return [
            'id' => $integralModel['id'],
            'integral_num' => $integralModel['integral_num'],
            'integral_summary' => $integralModel['integral_summary'],
            'integral_mobile' => $integralModel['integral_mobile'],
            'created_at' => $integralModel['created_at']
        ];
    }
}