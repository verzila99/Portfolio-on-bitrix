<?
  
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
  } ?>


<?php
  if (!empty($arResult)): ?>

      <div class="header-main-menu hidden-xs">
          <nav aria-label="navigation" id="primary-menu">
              <ul class="main-menu text-right">
                <?
                  foreach ($arResult as $arItem):
                    
                    ?>
                      <li><a href="<?= $arItem["LINK"]; ?>"
                          
                          <?php
                            if ($arItem["SELECTED"]): ?>
                                class="selected"
                                style="color: #1bb9ec"
                            <?php
                            endif; ?>

                          ><?= $arItem["TEXT"]; ?>

                          </a>
                        
                        <?php
                          if (!empty($arItem['subitems'])): ?>

                              <ul class="dropdown">
                                <?php
                                  foreach ($arItem['subitems'] as $value): ?>

                                      <li>
                                          <a href="<?= $value['LINK']; ?>"><?= $value['TEXT'];
                                            ?></a>
                                      </li>
                                  
                                  <?php
                                  endforeach; ?>
                              </ul>
                          
                          <?php
                          endif; ?>


                      </li>
                  
                  <?
                  endforeach ?>


              </ul>
          </nav>
      </div>
      <div class="mobile-menu-area visible-xs">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mobile-menu">
                          <nav aria-label="navigation" id="dropdown">
                              <ul class="">
                                <?
                                  foreach ($arResult as $arItem):
                                    
                                    ?>
                                      <li><a href="<?= $arItem["LINK"]; ?>"
                                          
                                          <?php
                                            if ($arItem["SELECTED"]): ?>
                                                class="selected"
                                                style="color: #1bb9ec"
                                            <?php
                                            endif; ?>

                                          ><?= $arItem["TEXT"]; ?>

                                          </a>
                                        
                                        <?php
                                          if (!empty($arItem['subitems'])): ?>

                                              <ul>
                                                <?php
                                                  foreach ($arItem['subitems'] as $value): ?>

                                                      <li>
                                                          <a href="<?= $value['LINK']; ?>"><?= $value['TEXT'];
                                                            ?></a>
                                                      </li>
                                                  
                                                  <?php
                                                  endforeach; ?>
                                              </ul>
                                          
                                          <?php
                                          endif; ?>


                                      </li>
                                  
                                  <?
                                  endforeach ?>


                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <?php
  endif ?>
