<?
  
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Контакты");
?><?
  $APPLICATION->IncludeComponent(
    "aidar:main.feedback",
    "contacts_form",
    array(
      "EMAIL_TO" => "verzila0003@yandex.ru",
      "EVENT_MESSAGE_ID" => array(),
      "OK_TEXT" => "Спасибо, ваше сообщение принято.",
      "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE"),
      "USE_CAPTCHA" => "N",
      "AJAX_MODE" => "Y"
    )
  ); ?><br>
<br>
<br>
<br>
<br>
<!-- Контакты + ФОС --><br>

<!-- Карта -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map" class="mtb-90">
                </div>
            </div>
        </div>
    </div>
</div>
<br><?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
