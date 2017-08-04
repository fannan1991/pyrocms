<?php

namespace App\Http\Middleware;

use App\AccessToken;
use App\OauthClients;
use Closure;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class UserAuth
{
    use Helpers;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $client_id = $request->client_id;
        $access_token = $request->access_token;
        $has_client = OauthClients::find($client_id);
        if($has_client){
            $has_access_token = AccessToken::where('member_id',$has_client->member_id)->where('client_id',$client_id)->first();
            if($has_access_token){
                if($access_token == $has_access_token->access_token){
                    $request->member_id = $has_access_token->member_id;
                }else{
                    return $this->response->array(['error' => '非法访问']);
                }
            }else{
                return $this->response->array(['error' => '非法访问']);
            }
        }else{
            return $this->response->array(['error' => '非法访问']);
        }
        return $next($request);

    }
}
