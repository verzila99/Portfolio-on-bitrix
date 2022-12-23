<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О НАС");
$APPLICATION->SetPageProperty('TITLE', 'O Нас|Company');
$APPLICATION->SetPageProperty('description', 'информация о нас');
$APPLICATION->SetPageProperty('keywords', 'about');
?>
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?php
            $APPLICATION->IncludeComponent(
                "bitrix:main.include", "", [
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_title"

                ]
            ); ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <p><?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include", "", [
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "about_text"

                            ]
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include", "", [
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_image"

                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
