<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php
if (!empty($arResult['SECTIONS'])) : ?>

    <div class="col-lg-12">
        <div class="portfolio-menu brand-filter text-center mb-70">
            <div class="filter" data-filter="all">Все</div>
            <?php
            foreach ($arResult['SECTIONS'] as $item): ?>
                <?
                $this->AddEditAction(
                    $item['ID'],
                    $item['EDIT_LINK'],
                    CIBlock::GetArrayByID(
                        $item["IBLOCK_ID"],
                        "ELEMENT_EDIT"
                    )
                );
                $this->AddDeleteAction(
                    $item['ID'],
                    $item['DELETE_LINK'],
                    CIBlock::GetArrayByID(
                        $item["IBLOCK_ID"],
                        "ELEMENT_DELETE"
                    ),
                    array(
                        "CONFIRM" => GetMessage(
                            'CT_BNL_ELEMENT_DELETE_CONFIRM'
                        )
                    )
                );
                ?>
                <div class="filter"
                     data-filter=".<?= $item['CODE']
                         ?? '';
                     ?>"><?= $item['NAME']
                        ?? '';
                    ?></div>
            <?php
            endforeach; ?>

        </div>
    </div>
<?php
endif ?>
