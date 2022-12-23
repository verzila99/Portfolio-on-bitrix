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


    <!-- Услуги -->
    <section id="pricing" class="pricing-area bg-color pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center mb-70">
                    <h2>Разработка сайта</h2>
                    <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в
                        форме ниже и мы свяжемся с вами!</p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($arResult['ITEMS'] as $item): ?>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single-pricing text-center mb-30">
                            <div class="pricing-head">
                                <h2 class="pricing-title text-uppercase">
                                    <?= $item['NAME'] ?? '';
                                    ?></h2>
                                <span><?= $item['PREVIEW_TEXT'] ?? '';
                                    ?></span>
                            </div>
                            <div class="pricing-plan-price <?= $item['PROPERTIES']['bgcolor']['VALUE'] ?? ''; ?>">
                                <span><span>от </span><?=
                                        $item['DETAIL_TEXT'] ?? '';
                                    ?><span> ₽</span></span>
                            </div>
                            <div class="pricing-plan-list">
                                <ul>
                                    <?php
                                    if (!empty
                                    (
                                    $item['PROPERTIES']['attributes']['VALUE']
                                    )
                                    ): ?>
                                        <?php
                                        foreach (
                                            $item['PROPERTIES']['attributes']['VALUE']
                                            as
                                            $value
                                        ): ?>

                                            <li><?= $value ?? ''; ?></li>
                                        <?php
                                        endforeach; ?>
                                    <?php
                                    endif; ?>

                                </ul>
                            </div>
                            <div class="get-started">
                                <a href="services_landing.html"
                                   class="btn <?= $item['PROPERTIES']['bgcolor']['VALUE'] ?? ''; ?>
">Узнать
                                    больше</a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach; ?>

            </div>
        </div>
    </section>
<?php
endif ?>
