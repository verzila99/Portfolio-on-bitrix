<?php
  
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
  }
  
  /**
   * @global CMain $APPLICATION
   */
  
  //delayed function must return a string
  if (empty($arResult)) {
    return "";
  }
  $res = '<div class="col-md-5 col-sm-6">
    <div class="breadcrumb-menu">
        <ol class="breadcrumb text-right">';
  
  
  $itemSize = count($arResult);
  for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $some = 'some';
    
    $res .= '<li><a'
      . ((isset($arResult[$index]["LINK"]) && ($index != $itemSize - 1))
        ? ' href="' . $arResult[$index]["LINK"] . '" title="'
        : ' title="')
      
      . $title
      . '">'
      . $title
      . '</span>
                      </a>
                  </li>';
  }
  $res .= ' </ol>
    </div>
</div>';
  return $res;
