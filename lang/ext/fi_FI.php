<?php
$lang['addedit_addtocart_template'] = 'Add/Edit AddToCart Template';
$lang['addedit_mycartform_template'] = 'Add/Edit MyCart Form Template';
$lang['addedit_viewcartform_template'] = 'Add/Edit Viewcart Form Template';
$lang['addtocart_destpage'] = 'Page To Redirect To after add to cart';
$lang['addtocart_templates'] = 'AddToCart Templates';
$lang['add_to_cart'] = 'Lis&auml;&auml; koriin';
$lang['amount'] = 'M&auml;&auml;r&auml;';
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
$lang['default_addtocart_template'] = 'Default AddToCart Template';
$lang['default_mycartform_template'] = 'Default MyCart form Template';
$lang['default_viewcartform_template'] = 'Default Viewcart form Template';
$lang['default_templates'] = 'Oletuspohjat';
$lang['delete'] = 'Poista';
$lang['description'] = 'Kuvaus';
$lang['error_invalidparam'] = 'A supplied parameter has an incorrect value: %s';
$lang['error_missingparam'] = 'A required parameter is missing: %s';
$lang['error_nosuchproduct'] = 'Could not find information on the product: %s';
$lang['friendlyname'] = 'Ostoskori';
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
$lang['lbl_productsummarytemplate'] = 'Product Summary Template';
$lang['moddescription'] = 'Yksinkertainen ostoskorimoduuli';
$lang['mycartform_templates'] = 'MyCart Form Templates';
$lang['my_cart'] = 'Ostoskorini';
$lang['none'] = 'Ei yht&auml;&auml;n';
$lang['number'] = 'M&auml;&auml;r&auml;';
$lang['number_of_items'] = 'Tuotteiden lukum&auml;&auml;r&auml;';
$lang['postinstall'] = 'Cart-moduuli onnistuneesti asennettu';
$lang['postuninstall'] = 'Cart-moduuli poistettu';
$lang['preferences'] = 'Asetukset';
$lang['price'] = 'Hinta';
$lang['product_id'] = 'Tuotekoodi';
$lang['product_summary'] = 'Tuoteyhteenvedon pohja';
$lang['quantity'] = 'M&auml;&auml;r&auml;';
$lang['really_uninstall'] = 'Haluatko varmasti poistaa moduulin?';
$lang['submit'] = 'L&auml;het&auml;';
$lang['subtotal'] = 'V&auml;lisumma';
$lang['shipping'] = 'Toimitus';
$lang['shipping_module'] = 'Toimitusmoduuli';
$lang['total'] = 'Yhteens&auml;';
$lang['total_weight'] = 'Kokonaispaino';
$lang['unit_price'] = 'Yksikk&ouml;hinta';
$lang['viewcartform_templates'] = 'Viewcart Form Templates';
$lang['warn_default_templates'] = 'This form controls what is displayed initially when you click &#039;Add New Template&#039; in the appropriate tab.  Adjusting the contents in this edit area will have no immedicate effect on your website.';
$lang['weight'] = 'Paino';
$lang['utma'] = '156861353.434072160.1262770183.1262770183.1262770183.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1262770183.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>