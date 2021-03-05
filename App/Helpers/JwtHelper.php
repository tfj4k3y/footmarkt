<?php namespace App\Helpers;


use Exception;
use Firebase\JWT\JWT;

class JwtHelper {
    const AUTH_TOKEN_KEY = "VerySecretKeyForJwtToken213983908345493852-23948329842";
    const SESSION_TIME = 3600;
    const ORIGIN = "http://localhost";
    const JWT_SIGNING_ALGORITHM = 'HS256';

    public static function generateUserToken($username) {
        return JWT::encode(
            self::buildTokenPayload($username),
            self::AUTH_TOKEN_KEY,
            self::JWT_SIGNING_ALGORITHM
        );
    }

    public static function verifyToken($token) {
        try {
            JWT::decode($token, self::AUTH_TOKEN_KEY, array(self::JWT_SIGNING_ALGORITHM));
            return true;
        } catch (Exception $e) {
            //TODO add some logs
            return false;
        }
    }


    private static function buildTokenPayload($username) {
        $issuedAt = time();

        return array(
            "sub" => $username,
            "iss" => self::ORIGIN,
            "aud" => self::ORIGIN,
            "iat" => $issuedAt,
            "exp" => $issuedAt + self::SESSION_TIME
        );
    }
}