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
if (!empty($arResult['ITEMS'])) : ?>
    <div id="Container">
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

            <div
                    class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?=
                        $item['SECTIONS_CODES'] ?? '' ?>">
                <div class="portfolio-wrapper portfolio-title">
                    <div class="portfolio-img">
                        <?php
                        if ($item['PREVIEW_PICTURE']['SRC']): ?>
                            <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link"
                                       href="<?= $item['PREVIEW_PICTURE']['SRC'] ?>">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>

                        <?php
                        endif; ?>

                    </div>
                    <div class="portfolio-heading pd-15">
                        <h4 class="mb-10">
                            <a href="<?= $item['DETAIL_PAGE_URL']
                            ?>">
                                <?= $item['NAME'] ?? '' ?>
                            </a>
                        </h4>
                        <h5 class="m-0"><?= $item['SECTION_NAME'] ?? '' ?></h5>
                    </div>
                </div>
            </div>
        <?php
        endforeach; ?>
    </div>
<?php
endif ?>
