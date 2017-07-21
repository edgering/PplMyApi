<?php
/**
 * Copyright (C) 2016 Adam Schubert <adam.schubert@sg1-game.net>.
 *
 * DEPOTS:
 * -------------------
 * 01 Praha východ
 * 02 České Budějovice 
 * 03 Plzeň
 * 04 Teplice
 * 05 Hradec Králové
 * 06 Brno 
 * 07 Ostrava
 * 08 Zlín - Malenovice
 * 09 Olomouc
 * 10 Praha západ
 * 11 Liberec 
 * 12 Humpolec
 * 14 Praha sever  
 *
 */

namespace Salamek\PplMyApi\Enum;


class Depo
{
    const CODE_01 = '01';
    const CODE_02 = '02';
    const CODE_03 = '03';
    const CODE_04 = '04';
    const CODE_05 = '05';
    const CODE_06 = '06';
    const CODE_07 = '07';
    const CODE_08 = '08';
    const CODE_09 = '09';
    const CODE_10 = '10';
    const CODE_11 = '11';
    const CODE_12 = '12';
    const CODE_14 = '14';

    /** @var array */
    public static $list = [
        self::CODE_01,
        self::CODE_02,
        self::CODE_03,
        self::CODE_04,
        self::CODE_05,
        self::CODE_06,
        self::CODE_07,
        self::CODE_08,
        self::CODE_09,
        self::CODE_10,
        self::CODE_11,
        self::CODE_12,
        self::CODE_14
    ];
}
