<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>


<?php if (!empty($arResult)): ?>
    <div class="footer-nav white-text">
        <nav >
            <ul >
                <?
                foreach ($arResult as $arItem):
                    if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                        continue;
                    }
                    ?>
                    <?
                    if ($arItem["SELECTED"]):?>
                        <li class="mega-parent"><a href="<?= $arItem["LINK"] ?>"
                               class="selected" style="color: #1bb9ec"><?= $arItem["TEXT"]
                                ?></a></li>
                    <?
                    else:?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        </li>
                    <?
                    endif ?>

                <?
                endforeach ?>


            </ul>
        </nav>
    </div>

<?php endif ?>
<!--<li>-->
<!--    <a href="services.html"> Услуги-->
<!--        <span class="indicator"><i class="fa fa-angle-down"></i></span></a>-->
<!--    <ul class="dropdown">-->
<!--        <li>-->
<!--            <a href="services_landing.html">Лендинг</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="services_online_shop.html">Интернет-магазин</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
