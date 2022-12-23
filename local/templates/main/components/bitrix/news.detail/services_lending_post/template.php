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
if (!empty($arResult)) : ?>
    <!-- Описание + картинка -->
    <section class="who-area-are pad-90" id="about_us">
        <div class="container">
            <h2 class="title-1"><?= $arResult['NAME'] ?? ''; ?></h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="who-we">
                        <p><?= $arResult['DETAIL_TEXT'] ?? ''; ?></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-bg">
                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?? '';
                        ?>"
                             alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endif; ?>
