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
  function numberToWord(int $number): string
  {
    switch ($number) {
      case 0:
        return 'One';
      case 1:
        return 'Two';
      case 2:
        return 'Three';
      case 3:
        return 'Four';
      default:
        return 'Five';
    }
  }
  
  if (!empty($arResult)) : ?>
      <!-- Описание + картинка -->
      <div class="pb-60">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h3 class="mb-30"><?= $arResult['PROPERTIES']['faq']['NAME'] ?? '';
                        ?></h3>
                      <div class="brand-accordion">
                          <div class="panel-group icon angle-icon"
                               id="accordion"
                               role="tablist" aria-multiselectable="true">
                            <?php
                              if (!empty($arResult['PROPERTIES']['faq']['VALUE']))
                                : ?>
                                <?php
                                foreach ($arResult['PROPERTIES']['faq']['VALUE'] as $key => $value): ?>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab"
                                             id="heading<?=
                                               numberToWord($key);
                                             ?>">
                                            <h4 class="panel-title">
                                                <a role="button"
                                                   data-toggle="collapse"
                                                   data-parent="#accordion"
                                                   href="#collapse<?=
                                                     numberToWord($key);
                                                   ?>"
                                                   aria-expanded="false"
                                                   aria-controls="collapse<?=
                                                     numberToWord($key);
                                                   ?>"
                                                   class="collapsed">
                                                  
                                                  <?= $arResult['PROPERTIES']['faq']['DESCRIPTION'][$key] ?? ''; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?=
                                          numberToWord($key);
                                        ?>"
                                             class="panel-collapse collapse"
                                             role="tabpanel"
                                             aria-labelledby="heading<?=
                                               numberToWord($key); ?>"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                              <?= $value['TEXT'] ?? ''; ?>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php
                                endforeach; ?>
                              <?php
                              endif; ?>


                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <h3 class="mb-30">Этапы разработки</h3>
                      <div class="my-tab">
                          <!-- Nav tabs -->
                        <?php
                          if (!empty
                          (
                          $arResult['PROPERTIES']['development_stages']['VALUE']
                          )): ?>

                              <ul class="custom-tab mb-15" role="tablist">
                                <?php
                                  foreach (
                                    $arResult['PROPERTIES']['development_stages']['DESCRIPTION']
                                    as $key => $item
                                  ):
                                    ?>

                                      <li role="presentation" class="<?=
                                        $key === 0 ? 'active' : ''; ?>">
                                          <a
                                                  href="#<?= explode(
                                                    '|',
                                                    $item
                                                  )[1]; ?>"
                                                  aria-controls="<?= explode(
                                                    '|',
                                                    $item
                                                  )[1]; ?>"
                                                  role="tab"
                                                  data-toggle="tab"><?= explode(
                                              '|',
                                              $item
                                            )[0]; ?>
                                          </a>
                                      </li>
                                  
                                  <?php
                                  endforeach; ?>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                
                                <?php
                                  foreach ($arResult['PROPERTIES']['development_stages']['VALUE'] as $key => $value):
                                    ?>

                                      <div role="tabpanel"
                                           class="tab-pane fade in <?=
                                             $key === 0 ? 'active' : ''; ?>"
                                           id="<?=
                                             explode(
                                               '|',
                                               $arResult['PROPERTIES']['development_stages']['DESCRIPTION'][$key]
                                             )[1];
                                           ?>">
                                          <p><?= $value['TEXT']; ?></p>
                                      </div>
                                  
                                  <?php
                                  endforeach; ?>
                              </div>
                          <?php
                          endif; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
  <?php
  endif; ?>
