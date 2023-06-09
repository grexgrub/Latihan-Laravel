<?php

namespace App\Models;

class artikel
{
    private static $artikel = [
        'naruto' => [
            'nama' => 'naruto',
            'kelas' => '10'
        ],
        'sasuke' => [
            'nama' => 'sasuke',
            'kelas' => '10'
        ],
    ];

    public static function all()
    {
        return collect(self::$artikel);
    }

    public function findFirst()
    {
        $artikel = self::all();
        return $artikel->where('kelas', '10');
    }

}
