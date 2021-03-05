<?php namespace App\Router;


use App\Helpers\HttpHeadersHelper;
use App\Serializer\JsonSerializer;

class RestBodyReader {

    public static function readBody($classReference = null) {
        $rawBody = file_get_contents('php://input');

        if (HttpHeadersHelper::getHttpHeader("content-type") === "application/json") {
            if (empty($classReference)) {
                return json_decode($rawBody);
            } else {
                return JsonSerializer::getInstance()->deserialize($rawBody, $classReference, 'json');
            }
        }

        return $rawBody;
    }
}