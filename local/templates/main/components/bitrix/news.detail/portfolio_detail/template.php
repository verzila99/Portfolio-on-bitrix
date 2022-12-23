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

    <div class="single-portfolio-area pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="portfolio-details">
                        <h3><?= $arResult['NAME'] ?? ''
                            ?></h3>
                        <?php
                        if (!empty
                        (
                        $arResult['PROPERTIES']['description']['VALUE']
                        )):
                            ?>
                            <?php
                            foreach ($arResult['PROPERTIES']['description']['VALUE'] as $key => $value): ?>
                                <span class="text-colort-blue">
                                    <?= $arResult['PROPERTIES']['description']['DESCRIPTION'][$key] ?? ''; ?>
                                </span>
                                <p><?= $value['TEXT'] ?? '' ?></p>

                            <?php
                            endforeach; ?>
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portfolio-meta">
                        <ul>
                            <?php
                            if
                            ($arResult['PROPERTIES']['add_info']['VALUE']): ?>

                                <?php
                                foreach ($arResult['PROPERTIES']['add_info']['VALUE'] as $key => $value): ?>

                                    <li><span>
                                        <b><?= $value ?? ''; ?></b>
                                    </span> <?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][$key] ?? ''; ?>
                                    </li>
                                <?php
                                endforeach; ?>

                            <?php
                            endif; ?>


                        </ul>
                        <?php
                        if ($arResult['PROPERTIES']['link']['VALUE']): ?>

                            <a href="<?= $arResult['PROPERTIES']['link']['VALUE'] ?? ''; ?>"
                               class="btn mt-30">
                                <?= $arResult['PROPERTIES']['link']['DESCRIPTION']; ?>
                            </a>
                        <?php
                        endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Фотогалерея -->
    <?php
    if (!empty($arResult['PROPERTIES']['gallery']['VALUE'])): ?>


        <div class="img-gallery-area pt-30 pb-60">
            <div class="container">
                <div class="row">

                    <?php
                    foreach (
                        $arResult['PROPERTIES']['photos'] as
                        $image
                    ): ?>
                        <div class="col-md-6 col-sm-4">
                            <div class="img-gallery hover-bg-opacity mb-30">
                                <a class="image-link"
                                   href="<?= $image['src']; ?>">
                                    <img src="<?= $image['src']; ?>"
                                         alt=""/></a>
                            </div>
                        </div>

                    <?php
                    endforeach; ?>

                </div>
            </div>
        </div>
    <?php
    endif; ?>
<?php
else: ?>
    <h2 style="color: red">"Элемент не найден!</h2>
<?php
endif; ?>
