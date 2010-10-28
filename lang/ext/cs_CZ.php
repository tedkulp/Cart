<?php
$lang['addedit_addtocart_template'] = 'Přidat/Upravit &scaron;ablonu pro přid&aacute;v&aacute;n&iacute; do n&aacute;kupn&iacute;ho ko&scaron;&iacute;ku';
$lang['addedit_mycartform_template'] = 'Přidat/Upravit &scaron;ablonu n&aacute;kupn&iacute;ho ko&scaron;&iacute;ku uživatele';
$lang['addedit_viewcartform_template'] = 'Přidat/Upravit &scaron;ablonu formul&aacute;ře pro prohl&iacute;žen&iacute; ko&scaron;&iacute;ku';
$lang['addtocart_destpage'] = 'Str&aacute;nka, na kterou bude uživatel přesměrov&aacute;n po přid&aacute;n&iacute; do ko&scaron;&iacute;ku';
$lang['addtocart_templates'] = '&Scaron;ablony pro přid&aacute;v&aacute;n&iacute; do ko&scaron;&iacute;ku';
$lang['add_to_cart'] = 'Přidat do ko&scaron;&iacute;ku';
$lang['amount'] = 'Množstv&iacute;';
$lang['changelog'] = '<ul>
  <li>Version 1.0 - April 2008<br/>
      Initial Release
  </li>
</ul>';
$lang['default_addtocart_template'] = 'V&yacute;choz&iacute; &scaron;ablona pro přid&aacute;v&aacute;n&iacute; do ko&scaron;&iacute;ku';
$lang['default_mycartform_template'] = 'V&yacute;choz&iacute; &scaron;ablona formul&aacute;ře ko&scaron;&iacute;ku uživatele';
$lang['default_viewcartform_template'] = 'V&yacute;choz&iacute; &scaron;ablona formul&aacute;ře pro prohl&iacute;žen&iacute; ko&scaron;&iacute;ku';
$lang['default_templates'] = 'V&yacute;choz&iacute; &scaron;ablony';
$lang['delete'] = 'Smazat';
$lang['description'] = 'Popisek';
$lang['error_invalidparam'] = 'Zadan&yacute; parametr m&aacute; neplatnou hodnotu: %s';
$lang['error_missingparam'] = 'Vyžadovan&yacute; parametr chyb&iacute;: %s';
$lang['error_nosuchproduct'] = 'Nebyly nalezeny informace o produktu %s';
$lang['friendlyname'] = 'Ko&scaron;&iacute;k';
$lang['help'] = '<h3>Co tento modul děl&aacute;?</h3>
<p>Tento jednoduch&yacute; modul umožňuje použ&iacute;v&aacute;n&iacute; n&aacute;kupn&iacute;ho ko&scaron;&iacute;ku produktů. Umožňuje přid&aacute;vat produkty do ko&scaron;&iacute;ku, prohl&iacute;žet je a mazat je.</p>
<h3>How Do I use It</h3>
<p>This module works in conjunction with the Products module and can read product information from that module.</p>
<p>Typically, a user would add a tag like {Cart product=12345} <em>(where 12345 is the product id of a record in the products module)</em> into a page or another module template to display an \&#039;add to cart\&#039; button for that product.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} would be be placed on a page or page template to allow users to see the number of items in the cart.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</lu></ul>';
$lang['help_addtocarttemplate'] = 'Specifies a non default template to use for the &#039;addtocart&#039; mode.';
$lang['help_hideform'] = 'Applicable only to the &#039;viewcart&#039; action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = 'Specifies a non default template to use for the  &#039;mycart&#039; mode.';
$lang['help_product'] = 'Applicable only for the default action, this parameter specifies which product (by id) should be added to the cart.  Typically, in the product detail template of the products module, you would add {Cart product=$entry->id} to allow adding items to the cart from product detail pages.';
$lang['help_viewcartpage'] = 'Specify a destination page for the &#039;viewcart&#039; mode.';
$lang['help_viewcarttemplate'] = 'Specifies a non default template to use for the &#039;viewcart&#039; mode.';
$lang['moddescription'] = 'Jednoduch&yacute; modul simuluj&iacute;c&iacute; n&aacute;kupn&iacute; ko&scaron;&iacute;k';
$lang['mycartform_templates'] = 'MyCart Form Templates';
$lang['my_cart'] = 'Můj ko&scaron;&iacute;k';
$lang['none'] = 'Ž&aacute;dn&yacute;';
$lang['number'] = 'Počet';
$lang['number_of_items'] = 'Počet položek';
$lang['postinstall'] = 'Modul Ko&scaron;&iacute;k byl &uacute;spě&scaron;ně nainstalov&aacute;n';
$lang['postuninstall'] = 'Modul Ko&scaron;&iacute;k byl &uacute;spě&scaron;ně odebr&aacute;n';
$lang['preferences'] = 'Nastaven&iacute;';
$lang['price'] = 'Cena';
$lang['product_id'] = 'ID produktu';
$lang['quantity'] = 'Počet';
$lang['really_uninstall'] = 'Opravdu chcete odebrat tento modul?';
$lang['submit'] = 'Vložit';
$lang['subtotal'] = 'D&iacute;lč&iacute; součet';
$lang['shipping'] = 'Dod&aacute;n&iacute;';
$lang['shipping_module'] = 'Modul Dod&aacute;n&iacute;';
$lang['total'] = 'Celkem';
$lang['total_weight'] = 'Celkov&aacute; v&aacute;ha';
$lang['unit_price'] = 'Cena za kus';
$lang['viewcartform_templates'] = 'Viewcart Form Templates';
$lang['warn_default_templates'] = 'This form controls what is displayed initially when you click &#039;Add New Template&#039; in the appropriate tab.  Adjusting the contents in this edit area will have no immedicate effect on your website.';
$lang['weight'] = 'Hmotnost';
$lang['utma'] = '156861353.3942757334971909600.1216740199.1228206596.1228255876.75';
$lang['utmz'] = '156861353.1227737289.72.29.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cms made simple';
$lang['utmb'] = '156861353.1.10.1228255876';
$lang['utmc'] = '156861353';
?>