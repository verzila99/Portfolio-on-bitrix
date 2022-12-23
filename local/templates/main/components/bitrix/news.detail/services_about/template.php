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
    <!-- Текстовый блок + скилы -->
    <section class="who-area-are bg-color pad-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="who-we">
                        <h2 class="title-1"><?= $arResult['PROPERTIES']['title']['VALUE'] ?? '';
                            ?></h2>
                        <p><?= $arResult['PROPERTIES']['details']['VALUE']['TEXT'] ??
                                '';
                            ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="our-skill">
                        <h2 class="title-1">Skills</h2>
                        <div class="progress-list">
                            <?php
                            if (!empty($arResult['PROPERTIES']['skills']['VALUE'])): ?>
                                <?php
                                foreach ($arResult['PROPERTIES']['skills']['VALUE'] as $key => $value): ?>

                                    <div class="progress">
                                        <div
                                                class="lead"><?= $value;
                                            ?></div>
                                        <div class="progress-bar"
                                             role="progressbar"
                                             aria-valuenow="<?=
                                             $arResult['PROPERTIES']['skills']['DESCRIPTION'][$key]; ?>"
                                             aria-valuemin="0"
                                             aria-valuemax="100"
                                             style="width: <?=
                                             $arResult['PROPERTIES']['skills']['DESCRIPTION'][$key]; ?>%;">
                                            <span><?=
                                                $arResult['PROPERTIES']['skills']['DESCRIPTION'][$key]; ?>%</span>
                                        </div>
                                    </div>
                                <?php
                                endforeach; ?>

                            <?php
                            endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif; ?>
