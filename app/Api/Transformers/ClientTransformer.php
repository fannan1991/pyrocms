<?php
namespace App\Api\Transformers;

use App\OauthClients;
use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(OauthClients $clients)
    {
        return [
            'id' => $clients['id'],
            'imsi' => $clients['imsi'],
            'secret' => $clients['secret']
        ];
    }
}