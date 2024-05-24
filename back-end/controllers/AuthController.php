<?php

use Firebase\JWT\JWT;

class AuthController {
    private $secret_key = "YOUR_SECRET_KEY";

    public function login() {
        // Lógica de login aqui
    }

    public function register() {
        // Lógica de registro aqui
    }

    private function generateJWT($user_id) {
        $payload = [
            'iss' => "http://yourdomain.com",
            'aud' => "http://yourdomain.com",
            'iat' => time(),
            'exp' => time() + 3600,
            'data' => [
                'user_id' => $user_id
            ]
        ];

        return JWT::encode($payload, $this->secret_key);
    }
}
?>
