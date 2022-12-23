<?php

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
if (!empty($arResult['ITEMS'])) : ?>
    <section class="project-count-area brand-bg pad-90">
        <div class="container">
            <div class="row">
                <?php
                foreach ($arResult['ITEMS'] as $item): ?>
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
                    <div class="col-md-3 col-sm-3">
                        <div class="single-count white-text text-center">
                            <?= $item['DETAIL_TEXT'] ?? ''; ?>
                            <h2 class="counter"><?= $item['PREVIEW_TEXT'] ??
                                    '';
                                ?></h2>
                            <p><?= $item['NAME'] ?? '';
                                ?></p>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
    </section>
<?php
endif ?>
