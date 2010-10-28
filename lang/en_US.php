<?php

# A
$lang['addedit_addtocart_template'] = 'Add/Edit AddToCart Template';
$lang['addedit_mycartform_template'] = 'Add/Edit MyCart Form Template';
$lang['addedit_viewcartform_template'] = 'Add/Edit Viewcart Form Template';
$lang['addtocart_destpage'] = 'Page To Redirect To after add to cart';
$lang['addtocart_templates'] = 'AddToCart Templates';
$lang['add_to_cart'] = 'Add To My Cart';
$lang['amount'] = 'Amount';

# C

# D
$lang['default_addtocart_template'] = 'Default AddToCart Template';
$lang['default_mycartform_template'] = 'Default MyCart form Template';
$lang['default_viewcartform_template'] = 'Default Viewcart form Template';
$lang['default_templates'] = 'Default Templates';
$lang['delete'] = 'Delete';
$lang['description'] = 'Description';

# E
$lang['empty_cart'] = 'Remove All Items';
$lang['error_cartpolicy_additem'] = 'Cannot add this item to the cart. See the websites cart policy';
$lang['error_invalidparam'] = 'A supplied parameter has an incorrect value: %s';
$lang['error_missingparam'] = 'A required parameter is missing: %s';
$lang['error_nosuchproduct'] = 'Could not find information on the product: %s';

# F
$lang['friendlyname'] = 'Cart';

# H
$lang['help'] = <<<EOT
<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
  <p>This module works in conjunction with the Products module, or any other supplier module as listed and selected in CGEcommerceBase, and can read product information from that module.</p>
  <p>There are multiple cart modules, therefore you must select which (of the installed and available) cart modules you would like to use in the 'Cart Settings' tab of CGEcommerceBase.  Then you will use the {cgecomm_form_addtocart} plugin <em>(see the help in CGEcommerceBase)</em> to add an 'add to cart' form where you want it.</p>
<p>Secondly, a tag like {Cart action='mycart'} could be be placed on a page or page template to allow users to see a brief summary of items in the cart. This is typically used in the header of an e-commerce site.</p>
<p>Thirdly, a tag like {Cart action='viewcart'} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>
EOT;

$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are \'default\',\'mycart\', and \'viewcart\'.<br/><ul><li>default: displays a form with an \'add to cart\' button to allow adding a specific product to the cart.  This mode requires the \'product\' parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a \'checkout\' button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</li></ul>';
$lang['help_addtocarttemplate'] = 'Specifies a non default template to use for the \'addtocart\' mode.';
$lang['help_hideform'] = 'Applicable only to the \'viewcart\' action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = 'Specifies a non default template to use for the  \'mycart\' mode.';
$lang['help_product'] = 'Applicable only for the default action, this parameter specifies which product (by id) should be added to the cart.  Typically, in the product detail template of the products module, you would add {Cart product=$entry->id} to allow adding items to the cart from product detail pages.';
$lang['help_supplier'] = 'Applicable only to the default action, this parameter specifies which supplier module to query information to.  By default this is &quot;Products&quot;';
$lang['help_viewcartpage'] = 'Specify a destination page for the \'viewcart\' mode.';
$lang['help_viewcarttemplate'] = 'Specifies a non default template to use for the \'viewcart\' mode.';

# I
$lang['info_productsummarytemplate'] = 'This template is used to format the output used for each product summary in the view cart form.  It allows customizing the product label based on the attributes, product name, and price.';

# L
$lang['lbl_productsummarytemplate'] = 'Product Summary Template';

# M
$lang['moddescription'] = 'A Simple Cart Module';
$lang['mycartform_templates'] = 'MyCart Form Templates';
$lang['my_cart'] = 'My Cart';

# N
$lang['no'] = 'No';
$lang['none'] = 'None';
$lang['number'] = 'Number';
$lang['number_of_items'] = 'Number of items';

# P
$lang['postinstall'] = 'The Cart module has successfully been installed';
$lang['postuninstall'] = 'The Cart module has been removed';
$lang['preferences'] = 'Preferences';
$lang['price'] = 'Price';
$lang['product_id'] = 'Product ID';
$lang['product_summary'] = 'Product Summary Template';

# Q
$lang['quantity'] = 'Quantity';

# R
$lang['really_uninstall'] = 'Are you sure you want to remove this module?';
$lang['remove'] = 'Remove';

# S
$lang['sku'] = 'SKU';
$lang['submit'] = 'Submit';
$lang['subtotal'] = 'Subtotal';
$lang['summary'] = 'Summary';
$lang['shipping'] = 'Shipping';
$lang['shipping_module'] = 'Shipping Module';

# T
$lang['total'] = 'Total';
$lang['total_weight'] = 'Total Weight';

# U
$lang['unit_price'] = 'Unit Price';

# V
$lang['viewcartform_templates'] = 'Viewcart Form Templates';

# W
$lang['warn_default_templates'] = 'This form controls what is displayed initially when you click \'Add New Template\' in the appropriate tab.  Adjusting the contents in this edit area will have no immedicate effect on your website.';
$lang['weight'] = 'Weight';

# X

# Y
$lang['yes'] = 'Yes';

# Z
?>
