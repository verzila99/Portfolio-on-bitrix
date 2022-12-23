<?php


if (!empty($arResult['PROPERTIES']['gallery']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['gallery']['VALUE'] as $key => $item) {
        $arPhoto = CFile::GetFileArray($item);

        $arResult['PROPERTIES']['photos'][$key]['src'] = $arPhoto['SRC'];
    }
}
