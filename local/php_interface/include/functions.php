<?php


use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;

function getIblockIdByCode(string $code): int
{
    Loader::includeModule('iblock');
    $iblock = IblockTable::getLIst([
        'filter' => ['Code' => $code],
        'select' => ['ID', 'CODE']
    ])->fetch();

    if (!isset($iblock['ID'])) {
        throw new Exception("не найден инфоблок с кодом" . $code);
    }
    return (int)$iblock['ID'];
}
