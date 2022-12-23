<?
  
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
  }
  /**
   * Bitrix vars
   *
   * @var array $arParams
   * @var array $arResult
   * @var CBitrixComponentTemplate $this
   * @global CMain $APPLICATION
   * @global CUser $USER
   */
?>
<div class="contact-form pt-90 pb-30">
    <div class="container">


        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Нужен классный сайт?</h2>
                <p>
                    Оставьте заявку в форме ниже и мы всё сделаем!
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="contact-info">
                    <address>
                        <ul>
                            <li><i aria-hidden="true"
                                   class="fa fa-map-marker brand-color"></i>
                                <div class="address">
                                    Мы находимся по адресу:
                                    <hr>
                                    <p>
                                        г. Тюмень, ул. Республики 94, офис 23
                                    </p>
                                </div>
                            </li>
                            <li><i aria-hidden="true"
                                   class="fa fa-phone brand-color"></i>
                                <div class="phone">
                                    <p>
                                        8-123-456-7899
                                    </p>
                                </div>
                            </li>
                            <li><i class="fa fa-envelope brand-color"></i>
                                <div class="mail">
                                    <p>
                                        <a href="mailto:#">wecoders@wecodres.com</a>
                                    </p>
                                </div>
                            </li>
                            <li></li>
                        </ul>
                    </address>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <form id="contact-form" class="default-form"
                          action="<?= POST_FORM_ACTION_URI ?>"
                          method="post">
                      
                      <?= bitrix_sessid_post() ?>
                        <div class="col-md-4 col-sm-6">
                            <input name="user_name" type="text"
                                   placeholder="Имя"
                                   value="<?= $arResult["AUTHOR_NAME"] ?>">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <input name="user_email" type="email"
                                   placeholder="Email*"
                                   value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <input name="user_phone" type="text"
                                   placeholder="Телефон" value="<?=
                              $arResult["AUTHOR_PHONE"] ?>">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea name="message" cols="30" rows="10"
                                      placeholder="Сообщение"></textarea>
                          <?
                            if (!empty($arResult["ERROR_MESSAGE"])) {
                              foreach ($arResult["ERROR_MESSAGE"] as $v) {
                                echo "<div class=\"text-danger\">" . $v . "</div>";
                              }
                            }
                            if ($arResult["OK_MESSAGE"] <> '') {
                              ?>
                                <div class="text-success"><?= $arResult["OK_MESSAGE"]
                              ?></div><?
                            }
                          ?>
                            <input type="submit"
                                   name="submit"
                                   value="<?= GetMessage(
                                     "MFT_SUBMIT"
                                   ) ?>"
                                   class="btn mt-30">
                        </div>
                      <?
                        if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                            <div class="mf-captcha">
                                <div class="mf-text"><?= GetMessage(
                                    "MFT_CAPTCHA"
                                  ) ?></div>
                                <input type="hidden" name="captcha_sid"
                                       value="<?= $arResult["capCode"] ?>">
                                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>"
                                     width="180" height="40" alt="CAPTCHA">
                                <div class="mf-text"><?= GetMessage(
                                    "MFT_CAPTCHA_CODE"
                                  ) ?><span
                                            class="mf-req">*</span></div>
                                <input type="text" name="captcha_word" size="30"
                                       maxlength="50"
                                       value="">
                            </div>
                        <?
                        endif; ?>

                        <input type="hidden" name="PARAMS_HASH"
                               value="<?= $arResult["PARAMS_HASH"] ?>">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
