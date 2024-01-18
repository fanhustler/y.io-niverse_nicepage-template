<?php $skip_min_height = false; ?><section class="u-align-center u-clearfix u-section-1" id="sec-6560">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
    <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-items-per-page="6">
      <div class="has-categories u-list-control"><!--products_categories_filter-->
        <?php
            ob_start(); ?><div class="u-categories u-categories-listbox"><!--products_categories_filter_select-->
          <select class="u-border-grey-30 u-input u-select-categories">
            {categories_filters}
            
            
            
            
            
            
          </select><!--/products_categories_filter_select-->
          <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
        </div><?php
            $categories_template = ob_get_clean();
            ob_start(); ?><option value="{categories_filters_value}">{categories_filters_content}</option><?php
            $categories_filter_option = ob_get_clean();
            echo get_categories_filter_html( 
              array(
                      'template' => $categories_template,
                      'itemTemplate' => $categories_filter_option,
                      'cmsTemplate' => 'npShop',
              )
      ); ?><!--/products_categories_filter-->
      </div>
      <div class="u-repeater u-repeater-1"><?php global $npProductsData; $countItems = $npProductsData['countItems'];
            foreach ($npProductsData['products'] as $current_index => $product) {
            $templateOrder = $current_index % $countItems;
            ?><?php if ($templateOrder == 0) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-1" src="<?php echo get_template_directory_uri(); ?>/images/d754debf.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-1">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Women's Shoes<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-1" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$20.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$17.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-1 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php if ($templateOrder == 1) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-2" src="<?php echo get_template_directory_uri(); ?>/images/53c4c417.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-2">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Men's T-Shirt<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-2" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$300.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$245.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-2 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php if ($templateOrder == 2) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-3" src="<?php echo get_template_directory_uri(); ?>/images/6537f30a.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-3">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Summer Hat<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-3" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$25.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$19.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-3 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php if ($templateOrder == 3) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-4">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-4" src="<?php echo get_template_directory_uri(); ?>/images/776587db.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-4">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Leather Gloves<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-4" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$25.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$20.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-4 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php if ($templateOrder == 4) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-5">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-5" src="<?php echo get_template_directory_uri(); ?>/images/6f461f60.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-5">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Flip Flops<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-5" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$10.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$7.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-5 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php if ($templateOrder == 5) { ?><!--product_item-->
        <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-6">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><!--product_image-->
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-6" src="<?php echo get_template_directory_uri(); ?>/images/caac4e54.svg"><!--/product_image--><!--product_title-->
            <h4 class="u-product-control u-text u-text-6">
              <a class="u-product-title-link" href="#"><!--product_title_content-->Girl Skirt<!--/product_title_content--></a>
            </h4><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-6" data-add-zero-cents="true">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-old-price"><!--product_old_price_content-->$175.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content-->$150.00<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
            <a href="#sec-32a3" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-6 u-dialog-link u-payment-button" data-product-id=""><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
          </div>
        </div><!--/product_item--><?php } ?><?php } ?>
      </div>
      <div class="u-list-control"></div>
    </div><!--/products-->
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>