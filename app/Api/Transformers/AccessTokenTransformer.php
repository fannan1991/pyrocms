<?php
namespace App\Api\Transformers;

use App\AccessToken;
use League\Fractal\TransformerAbstract;

class AccessTokenTransformer extends TransformerAbstract
{
    public function transform(AccessToken $accessToken)
    {
        return [
            'id' => $accessToken['id'],
            'access_token' => $accessToken['access_token'],
        ];
    }
}