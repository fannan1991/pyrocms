<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Gold\GoldModel;
use League\Fractal\TransformerAbstract;

class GoldTransformer extends TransformerAbstract
{
    public function transform(GoldModel $goldModel)
    {
        return [
            'id' => $goldModel['id'],
            'gold_num' => $goldModel['gold_num'],
            'gold_summary' => $goldModel['gold_summary'],
            'gold_mobile' => $goldModel['gold_mobile'],
            'created_at' => $goldModel['created_at']

        ];
    }
}