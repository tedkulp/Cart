<?php
$lang['addedit_addtocart_template'] = 'Pridať/Upraviť &scaron;abl&oacute;nu pre pridanie do ko&scaron;&iacute;ka';
$lang['addedit_mycartform_template'] = 'Pridať/upraviť  &scaron;abl&oacute;nu pre v&yacute;pis obsahu ko&scaron;&iacute;ka';
$lang['addedit_viewcartform_template'] = 'Pridať/upraviť &scaron;abl&oacute;nu pre zobrazenie ko&scaron;&iacute;ka';
$lang['addtocart_destpage'] = 'Str&aacute;nka pre presmerovanie po pridan&iacute; do ko&scaron;&iacute;ka';
$lang['addtocart_templates'] = '&Scaron;ablon&aacute; pre pridanie do ko&scaron;&iacute;ka';
$lang['add_to_cart'] = 'Pridať do ko&scaron;&iacute;ka';
$lang['amount'] = 'Množstvo';
$lang['changelog'] = '<ul>
  <li>Version 1.0 - April 2008<br/>
      Initial Release
  </li>
  <li>Version 1.0.1 - August 2008<br/>
      Add a summaary field to the smarty data available for each item
      Now Require CMS 1.3.1
      Now Require CGExtensions 1.9
  </li> 
  <li>Version 1.1 - August 2008<br/>
      Add support for shipping modules that require shipping info.
  </li> 
  <li>Version 1.1.1 - October 2008<br/>
      Minor help changes.
  </li> 
  <li>Version 1.3 - December 2008<br/>
    <ul>
      <li>Remove all references to tax and shipping modules.</li>
      <li>Vastly expand the cart module api.</li>
      <li>Simplify default templates.</li>
    </ul>
  </li> 
  <li>Version 1.3.1 - January 2009<br/>
    <ul>
      <li>Bug fixes.</li>
      <li>Now display the total number of items in the cart, not just the number of rows.</li>
    </ul>
  <li>Version 1.4.1 - May 2009<br/>
    <ul>
      <li>Add a template for controlling the summary view output</li>
      <li>Fix serialization stuff</li>
    </ul>
  <li>Version 1.4.2 - May 2009<br/>
    <ul>
      <li>Bump minimum cms version to 1.5.3</li>
      <li>Fix issue with setting quantity to 0</li>
    </ul>
  </li> 
</ul>';
$lang['default_addtocart_template'] = 'Prednastaven&aacute; &scaron;abl&oacute;na pre pridanie do ko&scaron;&iacute;ka';
$lang['default_mycartform_template'] = 'Prednastaven&aacute; &scaron;abl&oacute;na pre v&yacute;pis obsahu ko&scaron;&iacute;ka';
$lang['default_viewcartform_template'] = 'Prednastaven&aacute; &scaron;abl&oacute;na pre zobrazenie obsahu ko&scaron;&iacute;ka';
$lang['default_templates'] = 'Prednastaven&eacute; &scaron;abl&oacute;ny ';
$lang['delete'] = 'Odstr&aacute;niť';
$lang['description'] = 'Popis';
$lang['error_invalidparam'] = 'Vložen&yacute; parameter nem&aacute; spr&aacute;vnu hodnotu: %s';
$lang['error_missingparam'] = 'Ch&yacute;baj&uacute; povinn&eacute; parametre: %s';
$lang['error_nosuchproduct'] = 'Nem&ocirc;žem n&aacute;jsť inform&aacute;cie o produkte %s';
$lang['friendlyname'] = 'Ko&scaron;&iacute;k';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
<p>This module works in conjunction with the Products module and can read product information from that module.</p>
<p>Typically, a user would add a tag like {Cart product=12345} <em>(where 12345 is the product id of a record in the products module)</em> into a page or another module template to display an \&#039;add to cart\&#039; button for that product.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} would be be placed on a page or page template to allow users to see the number of items in the cart.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</lu></ul>';
$lang['help_addtocarttemplate'] = '&Scaron;pecifikujte neprednastaven&uacute; &scaron;abl&oacute;nu pre m&oacute;d pridania do ko&scaron;&iacute;ka.';
$lang['help_hideform'] = 'Applicable only to the &#039;viewcart&#039; action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = '&Scaron;pecifikujte neprednastaven&uacute; &scaron;abl&oacute;nu pre m&oacute;d moj ko&scaron;&iacute;k.';
$lang['help_product'] = 'Applicable only for the default action, this parameter specifies whch product (by id) should be added to the cart.  Typically, in the product detail template of the products module, you would add {Cart product=$entry->id} to allow adding items to the cart from product detail pages.';
$lang['help_viewcartpage'] = 'Specify a destination page for the &#039;viewcart&#039; mode.';
$lang['help_viewcarttemplate'] = 'Specifies a non default template to use for the &#039;viewcart&#039; mode.';
$lang['info_productsummarytemplate'] = 'T&aacute;to &scaron;abl&oacute;na umožn&iacute; upraviť obsah produktov pri zobrazen&iacute; ko&scaron;&iacute;ka. Povoľuje nastavenie poposuku atrib&uacute;tov, n&aacute;zvu produktu a ceny.';
$lang['lbl_productsummarytemplate'] = '&Scaron;abl&oacute;na prehľadu produktov';
$lang['moddescription'] = 'Jednoduch&yacute; n&aacute;kupn&yacute; ko&scaron;&iacute;k';
$lang['mycartform_templates'] = '&Scaron;abl&oacute;na formul&aacute;ra pre moj ko&scaron;&iacute;k';
$lang['my_cart'] = 'Moj ko&scaron;&iacute;k';
$lang['none'] = 'Bez';
$lang['number'] = 'Počet';
$lang['number_of_items'] = 'Počet položiek';
$lang['postinstall'] = 'Modul ko&scaron;&iacute;ka bol &uacute;spe&scaron;ne nain&scaron;talovan&yacute;';
$lang['postuninstall'] = 'Modul ko&scaron;&iacute;ka bol odstr&aacute;nen&yacute;';
$lang['preferences'] = 'Nastavenia';
$lang['price'] = 'Cena';
$lang['product_id'] = 'Produkt ID';
$lang['product_summary'] = '&Scaron;abl&oacute;na prehľadu produktov';
$lang['quantity'] = 'Počet';
$lang['really_uninstall'] = 'Ste si ist&yacute;, že chcete odstr&aacute;niť tento modul';
$lang['submit'] = 'Odoslať';
$lang['subtotal'] = 'Medzis&uacute;čet';
$lang['shipping'] = 'Doprava';
$lang['shipping_module'] = 'Modul pre dopravu';
$lang['total'] = 'Spolu';
$lang['total_weight'] = 'Celkov&aacute; hmotnosť';
$lang['unit_price'] = 'Cena';
$lang['viewcartform_templates'] = '&Scaron;abl&oacute;na formul&aacute;ra pre zobrazenie ko&scaron;&iacute;ka';
$lang['warn_default_templates'] = 'Tento formul&aacute;r definuje &scaron;abl&oacute;ny, ktor&eacute; bud&uacute; použ&iacute;van&eacute; pri každej založke/tabe po kliknut&iacute; na &amp;quot;Nov&aacute; &scaron;abl&oacute;na&amp;quot;. Zmeny nebud&uacute; mať žiadny vplyv na už vygenerovan&eacute; &scaron;abl&oacute;ny.';
$lang['weight'] = 'V&aacute;ha';
$lang['utma'] = '156861353.1262346118.1255805318.1257599213.1257604175.18';
$lang['utmz'] = '156861353.1257604175.18.17.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['qca'] = 'P0-1154349044-1255805318049';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1257604175';
?>