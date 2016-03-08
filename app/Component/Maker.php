<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.01.16
 * Time: 15:21
 */

namespace app\Component;


class Maker
{
    protected static function getList()
    {
        return [
            'ALFA',
            'ROMEO',
            'HYUNDAI',
            'OPEL',
            'VOLKSWAGEN',
            'AUDI',
            'INFINITI',
            'PEUGEOT',
            'VOLVO',
            'BMW',
            'JAGUAR',
            'PORSCHE',
            'ВАЗ',
            'BYD',
            'JEEP',
            'RENAULT',
            'УАЗ',
            'CHERY',
            'KIA',
            'ROVER',
            'CHEVROLET',
            'LAND',
            'ROVER',
            'SAAB',
            'CHRYSLER',
            'LEXUS',
            'SEAT',
            'CITROEN',
            'LIFAN',
            'SKODA',
            'DAEWOO',
            'MAZDA',
            'SSANG',
            'YONG',
            'FIAT',
            'MERCEDES',
            'SUBARU',
            'FORD',
            'MINI',
            'SUZUKI',
            'GEELY',
            'MITSUBISHI',
            'TOYOTA',
            'HONDA',
            'NISSAN'
        ];
    }

    public static function isOriginal($maker)
    {
        $maker = strtoupper($maker);

        foreach (static::getList() as $value) {
            if (strpos($maker, $value) !== false) {
                return true;
            }
        }

        return false;
    }
}