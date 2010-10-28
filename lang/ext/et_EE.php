<?php
$lang['addedit_addtocart_template'] = 'Lisa/Muuda AddToCart mall';
$lang['addedit_mycartform_template'] = 'Lisa/Muuda MyCart vormi mall';
$lang['addedit_viewcartform_template'] = 'Lisa/Muuda Viewcart vormi mall';
$lang['addtocart_destpage'] = 'Lehek&uuml;lg, kuhu suunata peale ostukorvi lisamist';
$lang['addtocart_templates'] = 'AddToCart mallid';
$lang['add_to_cart'] = 'Lisa ostukorvi';
$lang['amount'] = 'Kogus';
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
$lang['default_addtocart_template'] = 'Vaikimisi AddToCart mall';
$lang['default_mycartform_template'] = 'Vaikimisi MyCart vormi mall';
$lang['default_viewcartform_template'] = 'Vaikimisi Viewcart vormi mall';
$lang['default_templates'] = 'Vaikimisi mallid';
$lang['delete'] = 'Kustuta';
$lang['description'] = 'Kirjeldus';
$lang['error_invalidparam'] = 'Esitatud parameetril on vale v&auml;&auml;rtus: %s';
$lang['error_missingparam'] = 'N&otilde;utud parameeter on puudu: %s';
$lang['error_nosuchproduct'] = 'Ei leidnud informatsiooni toote kohta: %s';
$lang['friendlyname'] = 'Ostukorv';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
<p>This module works in conjunction with the Products module and can read product information from that module.</p>
<p>Typically, a user would add a tag like {Cart product=12345} <em>(where 12345 is the product id of a record in the products module)</em> into a page or another module template to display an \&#039;add to cart\&#039; button for that product.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} would be be placed on a page or page template to allow users to see the number of items in the cart.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</li></ul>';
$lang['help_addtocarttemplate'] = 'Specifies a non default template to use for the &#039;addtocart&#039; mode.';
$lang['help_hideform'] = 'Applicable only to the &#039;viewcart&#039; action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = 'Specifies a non default template to use for the  &#039;mycart&#039; mode.';
$lang['help_product'] = 'Applicable only for the default action, this parameter specifies which product (by id) should be added to the cart.  Typically, in the product detail template of the products module, you would add {Cart product=$entry->id} to allow adding items to the cart from product detail pages.';
$lang['help_viewcartpage'] = 'Specify a destination page for the &#039;viewcart&#039; mode.';
$lang['help_viewcarttemplate'] = 'Specifies a non default template to use for the &#039;viewcart&#039; mode.';
$lang['info_productsummarytemplate'] = 'This template is used to format the output used for each product summary in the view cart form.  It allows customizing the product label based on the attributes, product name, and price.';
$lang['lbl_productsummarytemplate'] = 'Toote kokkuv&otilde;tte mall';
$lang['moddescription'] = 'Lihtne ostukorvi moodul';
$lang['mycartform_templates'] = 'MyCart vormi mallid';
$lang['my_cart'] = 'Minu ostukorv';
$lang['none'] = 'Pole';
$lang['number'] = 'Number';
$lang['number_of_items'] = 'Esemeid ostukorvis';
$lang['postinstall'] = 'Ostukorvi moodul on edukalt paigaldatud';
$lang['postuninstall'] = 'Ostukorvi moodul on eemaldatud';
$lang['preferences'] = 'Eelistused';
$lang['price'] = 'Hind';
$lang['product_id'] = 'Toote ID';
$lang['product_summary'] = 'Toote kokkuv&otilde;tte mall';
$lang['quantity'] = 'Kogus';
$lang['really_uninstall'] = 'Oled sa kindel, et soovid eemaldada selle mooduli?';
$lang['submit'] = 'Saada';
$lang['subtotal'] = 'Vahesumma';
$lang['shipping'] = 'Saatmine';
$lang['shipping_module'] = 'Saatmise moodul';
$lang['total'] = 'Kokku';
$lang['total_weight'] = 'Kaal kokku';
$lang['unit_price'] = '&Uuml;hiku hind';
$lang['viewcartform_templates'] = 'Viewcart vormi mallid';
$lang['warn_default_templates'] = 'This form controls what is displayed initially when you click &#039;Add New Template&#039; in the appropriate tab.  Adjusting the contents in this edit area will have no immedicate effect on your website.';
$lang['weight'] = 'Kaal';
$lang['utma'] = '156861353.3215545266732019000.1241091787.1258544952.1258633878.189';
$lang['utmz'] = '156861353.1257873337.180.32.utmccn=(organic)|utmcsr=google|utmctr=how to secure cmsms|utmcmd=organic';
$lang['qca'] = '1240683615-58409973-79915303';
$lang['utmb'] = '156861353.1.10.1258633878';
$lang['utmc'] = '156861353';
?>