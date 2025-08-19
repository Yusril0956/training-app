<?php

namespace App\Api\Info;

use App\Api\Api;
use Illuminate\Http\Client\Response;

class Info extends Api
{
    protected static $api = 'info';

    protected static function responseHandler(Response $response, $default = null)
    {
        $result = $response->object();
        $callerFunction = debug_backtrace()[1]['function'];

        if ($callerFunction == 'get') {
            if ($result->info == 'sukses') {
                if (count($result->data) === 1) {
                    return $result->data[0];
                }

                return $result->data;
            } else {
                return $default;
            }
        } else {
            return $result;
        }
    }
}
