<?php
namespace App\CryptString;
use Illuminate\Support\Facades\Crypt; // Mã hóa chuỗi
use Illuminate\Contracts\Encryption\DecryptException;

class CryptString
{
    
    public static function encrypt($str = '') {
        return Crypt::encrypt($str);
    }

    public static function decrypt($str = '') {
        try {
            return Crypt::decryptString($str);
        } catch (DecryptException $e) {
            return $e;
        }
    }

}