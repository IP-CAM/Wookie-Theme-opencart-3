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
      1 => '&lt;div class=&quot;tt-footer-custom tt-color-scheme-04&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;index.html&quot;&gt;
              &lt;img class=&quot;f-visible-mobile loading&quot; src=&quot;image/catalog/wokiee/custom/logo.png&quot; alt=&quot;&quot; data-was-processed=&quot;true&quot;&gt;
              &lt;img class=&quot;f-visible-desctope loading&quot; src=&quot;image/catalog/wokiee/custom/logo-white.png&quot; alt=&quot;&quot; data-was-processed=&quot;true&quot;&gt;
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
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-Stripe2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-discover2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- /payment-list --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-footer-custom tt-color-scheme-04&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;index.html&quot;&gt;
              &lt;img class=&quot;f-visible-mobile loading&quot; src=&quot;image/catalog/wokiee/custom/logo.png&quot; alt=&quot;&quot; data-was-processed=&quot;true&quot;&gt;
              &lt;img class=&quot;f-visible-desctope loading&quot; src=&quot;image/catalog/wokiee/custom/logo-white.png&quot; alt=&quot;&quot; data-was-processed=&quot;true&quot;&gt;
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
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-Stripe2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-discover2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
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
      1 => '  &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
      &lt;div class=&quot;tt-block-title&quot;&gt;
        &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://www.instagram.com/wokieeshop/&quot;&gt;@ FOLLOW&lt;/a&gt; US ON&lt;/h2&gt;
        &lt;div class=&quot;tt-description&quot;&gt;INSTAGRAM&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div id=&quot;instafeed&quot; class=&quot;instafeed-fluid&quot;
          data-accessToken=&quot;8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f&quot;
          data-clientId=&quot;dd095157744c4bd0a67181fc4906e5b6&quot;
          data-userId=&quot;8626857013&quot;
          data-limitImg=&quot;6&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
      $language_id => ' &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt;
      &lt;div class=&quot;tt-block-title&quot;&gt;
        &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://www.instagram.com/wokieeshop/&quot;&gt;@ FOLLOW&lt;/a&gt; US ON&lt;/h2&gt;
        &lt;div class=&quot;tt-description&quot;&gt;INSTAGRAM&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div id=&quot;instafeed&quot; class=&quot;instafeed-fluid&quot;
          data-accessToken=&quot;8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f&quot;
          data-clientId=&quot;dd095157744c4bd0a67181fc4906e5b6&quot;
          data-userId=&quot;8626857013&quot;
          data-limitImg=&quot;6&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '9',
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
      1 => '&lt;div class=&quot;tt-promo-fixed&quot;&gt;
    &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;tt-img&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-14.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
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
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-14.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
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
  6 => 
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
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;WOMEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;MEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;SHOES&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent nomargin&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;WOMEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;MEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-4&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index07-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;SHOES&lt;/div&gt;
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
  7 => 
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
      1 => '&lt;header&gt;
&lt;div class=&quot;tt-color-scheme-01&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-header-row tt-top-row&quot;&gt;
        &lt;div class=&quot;tt-col-left&quot;&gt;
          &lt;div class=&quot;tt-box-info&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;i class=&quot;icon-f-93&quot;&gt;&lt;/i&gt;&lt;a href=&quot;tel:+77723457885&quot;&gt;+777 2345 7885&lt;/a&gt;; &lt;a href=&quot;tel:+77723457886&quot;&gt;+777 2345 7886&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class=&quot;icon-f-92&quot;&gt;&lt;/i&gt;7 DAYS A WEEK FROM 10 AM TO 6 PM &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-right ml-auto&quot;&gt;
          &lt;ul class=&quot;tt-social-icon&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-64&quot; target=&quot;_blank&quot; href=&quot;http://www.facebook.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-h-58&quot; target=&quot;_blank&quot; href=&quot;http://www.twitter.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-66&quot; target=&quot;_blank&quot; href=&quot;http://www.google.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-67&quot; target=&quot;_blank&quot; href=&quot;http://www.instagram.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-70&quot; target=&quot;_blank&quot; href=&quot;#&quot;&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;',
      $language_id => '&lt;header&gt;
&lt;div class=&quot;tt-color-scheme-01&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-header-row tt-top-row&quot;&gt;
        &lt;div class=&quot;tt-col-left&quot;&gt;
          &lt;div class=&quot;tt-box-info&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;i class=&quot;icon-f-93&quot;&gt;&lt;/i&gt;&lt;a href=&quot;tel:+77723457885&quot;&gt;+777 2345 7885&lt;/a&gt;; &lt;a href=&quot;tel:+77723457886&quot;&gt;+777 2345 7886&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class=&quot;icon-f-92&quot;&gt;&lt;/i&gt;7 DAYS A WEEK FROM 10 AM TO 6 PM &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-right ml-auto&quot;&gt;
          &lt;ul class=&quot;tt-social-icon&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-64&quot; target=&quot;_blank&quot; href=&quot;http://www.facebook.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-h-58&quot; target=&quot;_blank&quot; href=&quot;http://www.twitter.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-66&quot; target=&quot;_blank&quot; href=&quot;http://www.google.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-67&quot; target=&quot;_blank&quot; href=&quot;http://www.instagram.com/&quot;&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;icon-g-70&quot; target=&quot;_blank&quot; href=&quot;#&quot;&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
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
    &lt;div class=&quot;tt-block-title&quot;&gt;
      &lt;h2 class=&quot;tt-title&quot;&gt;DISPLAY YOUR LOOKBOOK&lt;/h2&gt;
      &lt;div class=&quot;tt-description&quot;&gt;AS GRID + SLIDER&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-carousel-lookbook arrow-location-center row tt-dots-absolute slick-animated-show-js&quot;&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-17.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 30%; left: 50%;&quot; data-top=&quot;30&quot; data-left=&quot;50&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 61%; left: 48%;&quot; data-top=&quot;61&quot; data-left=&quot;48&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-07.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 34%; left: 57%;&quot; data-top=&quot;34&quot; data-left=&quot;57&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 78%; left: 44%;&quot; data-top=&quot;78&quot; data-left=&quot;44&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-18.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 22%; left: 27%;&quot; data-top=&quot;22&quot; data-left=&quot;27&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 34%; left: 58%;&quot; data-top=&quot;34&quot; data-left=&quot;58&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-16.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 55%; left: 70%;&quot; data-top=&quot;55&quot; data-left=&quot;70&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 25%; left: 41%;&quot; data-top=&quot;25&quot; data-left=&quot;41&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-19.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 27%; left: 47%;&quot; data-top=&quot;27&quot; data-left=&quot;47&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 69%; left: 41%;&quot; data-top=&quot;69&quot; data-left=&quot;41&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-09.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 29%; left: 47%;&quot; data-top=&quot;29&quot; data-left=&quot;47&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;tt-block-title&quot;&gt;
      &lt;h2 class=&quot;tt-title&quot;&gt;DISPLAY YOUR LOOKBOOK&lt;/h2&gt;
      &lt;div class=&quot;tt-description&quot;&gt;AS GRID + SLIDER&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-carousel-lookbook arrow-location-center row tt-dots-absolute slick-animated-show-js&quot;&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-17.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 30%; left: 50%;&quot; data-top=&quot;30&quot; data-left=&quot;50&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 61%; left: 48%;&quot; data-top=&quot;61&quot; data-left=&quot;48&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-07.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 34%; left: 57%;&quot; data-top=&quot;34&quot; data-left=&quot;57&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 78%; left: 44%;&quot; data-top=&quot;78&quot; data-left=&quot;44&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-18.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 22%; left: 27%;&quot; data-top=&quot;22&quot; data-left=&quot;27&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 34%; left: 58%;&quot; data-top=&quot;34&quot; data-left=&quot;58&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-16.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 55%; left: 70%;&quot; data-top=&quot;55&quot; data-left=&quot;70&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 25%; left: 41%;&quot; data-top=&quot;25&quot; data-left=&quot;41&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-19.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 27%; left: 47%;&quot; data-top=&quot;27&quot; data-left=&quot;47&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 69%; left: 41%;&quot; data-top=&quot;69&quot; data-left=&quot;41&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;div class=&quot;tt-lookbook&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/lookbook/lookbook-09.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-hotspot&quot; style=&quot;top: 29%; left: 47%;&quot; data-top=&quot;29&quot; data-left=&quot;47&quot;&gt;
            &lt;div class=&quot;tt-btn&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;tt-content-parent&quot;&gt;
              &lt;div class=&quot;tt-hotspot-content&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;tt-btn-close&quot;&gt;&lt;/a&gt;
                &lt;div class=&quot;tt-img&quot;&gt;
                  &lt;a href=&quot;product.html&quot;&gt;&lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-01-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class=&quot;tt-description&quot;&gt;
                  &lt;h2 class=&quot;tt-title&quot;&gt;&lt;a href=&quot;product.html&quot;&gt;Denim Boyfriend Trucker Jacket1&lt;/a&gt;&lt;/h2&gt;
                  &lt;div class=&quot;tt-price&quot;&gt;$124&lt;/div&gt;
                  &lt;a href=&quot;product.html&quot; class=&quot;btn&quot;&gt;ADD TO CART&lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '5',
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