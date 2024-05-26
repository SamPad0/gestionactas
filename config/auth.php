<?php

require __DIR__ . '/../vendor/autoload.php';
use \Firebase\JWT\JWT;

class Auth {
    private static $secret_key = 'your_secret_key';
    private static $expiration_time = 3600;

    public static function createToken($data) {
        $issued_at = time();
        $expiration_time = $issued_at + self::$expiration_time;

        $payload = [
            'iat' => $issued_at,
            'exp' => $expiration_time,
            'data' => $data
        ];

        return JWT::encode($payload, self::$secret_key);
    }

    public static function validateToken($token) {
        try {
            $decoded = JWT::decode($token, self::$secret_key, ['HS256']);
            return (array) $decoded->data;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>
