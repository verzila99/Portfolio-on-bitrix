<?
  
  require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
  $APPLICATION->SetTitle("Портфолио");
  
  $arDefaultUrlTemplates404 = [
    'list' => 'index.php',
    'element' => '#ELEMENT_ID#.php',
  ];
?>

<?
  $APPLICATION->IncludeComponent(
    "bitrix:news",
    "portfolio",
    array(
      "ADD_ELEMENT_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
      "AJAX_MODE" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "BROWSER_TITLE" => "-",
      "CACHE_FILTER" => "N",
      "CACHE_GROUPS" => "N",
      "CACHE_TIME" => "36000000",
      "CACHE_TYPE" => "N",
      "CHECK_DATES" => "Y",
      "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
      "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
      "DETAIL_DISPLAY_TOP_PAGER" => "N",
      "DETAIL_FIELD_CODE" => array(
        0 => "ID",
        1 => "CODE",
        2 => "XML_ID",
        3 => "NAME",
        4 => "TAGS",
        5 => "SORT",
        6 => "PREVIEW_TEXT",
        7 => "gallery",
        8 => "",
      ),
      "DETAIL_PAGER_SHOW_ALL" => "N",
      "DETAIL_PAGER_TEMPLATE" => "",
      "DETAIL_PAGER_TITLE" => "Страница",
      "DETAIL_PROPERTY_CODE" => array(
        0 => "add_info",
        1 => "detail_text",
        2 => "description",
        3 => "link",
        4 => "gallery",
        5 => "",
      ),
      "DETAIL_SET_CANONICAL_URL" => "N",
      "DISPLAY_BOTTOM_PAGER" => "N",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "N",
      "DISPLAY_PREVIEW_TEXT" => "N",
      "DISPLAY_TOP_PAGER" => "N",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "4",
      "IBLOCK_TYPE" => "Content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
      "LIST_FIELD_CODE" => array(
        0 => "IBLOCK_NAME",
        1 => "",
      ),
      "LIST_PROPERTY_CODE" => array(
        0 => "",
        1 => "",
      ),
      "MESSAGE_404" => "",
      "META_DESCRIPTION" => "-",
      "META_KEYWORDS" => "-",
      "NEWS_COUNT" => "30",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_TEMPLATE" => ".default",
      "PAGER_TITLE" => "Новости",
      "PREVIEW_TRUNCATE_LEN" => "",
      "SEF_FOLDER" => "/portfolio/",
      "SEF_MODE" => "Y",
      "SET_LAST_MODIFIED" => "N",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "Y",
      "SHOW_404" => "Y",
      "SORT_BY1" => "SORT",
      "SORT_BY2" => "ACTIVE_FROM",
      "SORT_ORDER1" => "ASC",
      "SORT_ORDER2" => "ASC",
      "STRICT_SECTION_CHECK" => "N",
      "USE_CATEGORIES" => "N",
      "USE_FILTER" => "N",
      "USE_PERMISSIONS" => "N",
      "USE_RATING" => "N",
      "USE_REVIEW" => "N",
      "USE_RSS" => "N",
      "USE_SEARCH" => "N",
      "USE_SHARE" => "N",
      "COMPONENT_TEMPLATE" => "portfolio",
      "SEF_URL_TEMPLATES" => array(
        "news" => "/",
        "section" => "#SECTION_CODE#/",
        "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
      )
    ),
    false
  ); ?>
<br><?php
  require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
