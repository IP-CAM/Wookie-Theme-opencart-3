<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-footer-custom&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;image/catalog/wokiee/skin-furniture/logo-dark.png&quot; alt=&quot;&quot;&gt;
          &lt;/a&gt;
          &lt;!-- /logo --&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- copyright --&gt;
          &lt;div class=&quot;tt-box-copyright&quot;&gt;
            &amp;copy; Wokiee 2019. All Rights Reserved
          &lt;/div&gt;
          &lt;!-- /copyright --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-col-right&quot;&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- payment-list --&gt;
          &lt;ul class=&quot;tt-payment-list&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-Stripe&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-discover&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- /payment-list --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-footer-custom&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;image/catalog/wokiee/skin-furniture/logo-dark.png&quot; alt=&quot;&quot;&gt;
          &lt;/a&gt;
          &lt;!-- /logo --&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- copyright --&gt;
          &lt;div class=&quot;tt-box-copyright&quot;&gt;
            &amp;copy; Wokiee 2019. All Rights Reserved
          &lt;/div&gt;
          &lt;!-- /copyright --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-col-right&quot;&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- payment-list --&gt;
          &lt;ul class=&quot;tt-payment-list&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-Stripe&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-discover&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;page404.html&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- /payment-list --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-promo-fixed&quot;&gt;
    &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;tt-img&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/product/product-01.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-description&quot;&gt;
      &lt;div class=&quot;tt-box-top&quot;&gt;
        &lt;p&gt;
          Someone purchased a
        &lt;/p&gt;
        &lt;p&gt;
          &lt;a href=&quot;#&quot;&gt;
            iPod Classic
          &lt;/a&gt;
        &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-info&quot;&gt;
        14 Minutes ago from  New York, USA
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-promo-fixed&quot;&gt;
    &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;tt-img&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/product/product-01.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-description&quot;&gt;
      &lt;div class=&quot;tt-box-top&quot;&gt;
        &lt;p&gt;
          Someone purchased a
        &lt;/p&gt;
        &lt;p&gt;
          &lt;a href=&quot;#&quot;&gt;
            iPod Classic
          &lt;/a&gt;
        &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-info&quot;&gt;
        14 Minutes ago from  New York, USA
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-collapse open&quot;&gt;
  &lt;h3 class=&quot;tt-collapse-title&quot;&gt;TAGS&lt;/h3&gt;
  &lt;div class=&quot;tt-collapse-content&quot; style=&quot;&quot;&gt;
    &lt;ul class=&quot;tt-list-inline&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dresses&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shirts &amp;amp; Tops&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Polo Shirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sweaters&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blazers&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Vests&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jackets&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Outerwear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Activewear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Pants&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jumpsuits&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shorts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jeans&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Skirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Swimwear&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-collapse open&quot;&gt;
  &lt;h3 class=&quot;tt-collapse-title&quot;&gt;TAGS&lt;/h3&gt;
  &lt;div class=&quot;tt-collapse-content&quot; style=&quot;&quot;&gt;
    &lt;ul class=&quot;tt-list-inline&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dresses&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shirts &amp;amp; Tops&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Polo Shirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sweaters&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blazers&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Vests&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jackets&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Outerwear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Activewear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Pants&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jumpsuits&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shorts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jeans&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Skirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Swimwear&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '10',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-content-aside&quot;&gt;
  &lt;a href=&quot;listing-left-column.html&quot; class=&quot;tt-promo-03&quot;&gt;
    &lt;img src=&quot;image/catalog/wokiee/custom/listing_promo_img_07.jpg&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-content-aside&quot;&gt;
  &lt;a href=&quot;listing-left-column.html&quot; class=&quot;tt-promo-03&quot;&gt;
    &lt;img src=&quot;image/catalog/wokiee/custom/listing_promo_img_07.jpg&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '11',
  ),
  5 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;container-indent nomargin&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row flex-sm-row-reverse&quot;&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;LOUNGE&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;LIGHTING&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-12&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-04.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;TABLES&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;CHAIRS&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent nomargin&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row flex-sm-row-reverse&quot;&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;LOUNGE&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;LIGHTING&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-12&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
              &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-04.jpg&quot; alt=&quot;&quot;&gt;
              &lt;div class=&quot;tt-description&quot;&gt;
                &lt;div class=&quot;tt-description-wrapper&quot;&gt;
                  &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;TABLES&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;CHAIRS&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '2',
  ),
  8 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;container-indent&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row tt-layout-promo-box&quot;&gt;
      &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-05.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;FALL-WINTER CLEARANCE SALES&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;GET UP TO 50% OFF&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-06.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;CHAIRS&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;NEW ARRIVALS&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row tt-layout-promo-box&quot;&gt;
      &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-05.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;FALL-WINTER CLEARANCE SALES&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;GET UP TO 50% OFF&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child hover-type-4&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/skin-furniture/promo/index-promo-img-06.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;CHAIRS&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-large&quot;&gt;&lt;span class=&quot;tt-white-color&quot;&gt;NEW ARRIVALS&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '15',
  ),
); 

$output2 = array();
$output2["custom_module_module"] = $this->config->get('custom_module_module');

if(!is_array($output["custom_module_module"])) $output["custom_module_module"] = array();
if(!is_array($output2["custom_module_module"])) $output2["custom_module_module"] = array();
$output3 = array();
$output3["custom_module_module"] = array_merge($output["custom_module_module"], $output2["custom_module_module"]);

$this->model_setting_setting->editSetting( "custom_module", $output3 );	

?>