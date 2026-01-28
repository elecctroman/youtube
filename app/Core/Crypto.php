<?php
namespace App\Core;

class Crypto
{
    public static function encrypt(string $plaintext, string $key): string
    {
        $ivLen = openssl_cipher_iv_length('aes-256-gcm');
        $iv = random_bytes($ivLen);
        $tag = '';
        $ciphertext = openssl_encrypt($plaintext, 'aes-256-gcm', self::normalizeKey($key), OPENSSL_RAW_DATA, $iv, $tag);
        return base64_encode($iv . $tag . $ciphertext);
    }

    public static function decrypt(string $payload, string $key): string
    {
        $raw = base64_decode($payload, true);
        if ($raw === false) {
            return '';
        }
        $ivLen = openssl_cipher_iv_length('aes-256-gcm');
        $iv = substr($raw, 0, $ivLen);
        $tag = substr($raw, $ivLen, 16);
        $ciphertext = substr($raw, $ivLen + 16);
        $plaintext = openssl_decrypt($ciphertext, 'aes-256-gcm', self::normalizeKey($key), OPENSSL_RAW_DATA, $iv, $tag);
        return $plaintext === false ? '' : $plaintext;
    }

    private static function normalizeKey(string $key): string
    {
        return hash('sha256', $key, true);
    }
}
