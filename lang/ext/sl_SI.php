<?php
$lang['addedit_addtocart_template'] = 'Dodaj/uredi predlogo za Dodaj v voziček';
$lang['addedit_mycartform_template'] = 'Dodaj/uredi predlogo obrazca Moj Voziček';
$lang['addedit_viewcartform_template'] = 'Dodaj/uredi predlogo obrazca Prikaz vozička';
$lang['addtocart_destpage'] = 'Stran za preusmeritev po dodajanju v voziček';
$lang['addtocart_templates'] = 'Dodaj v voziček predloge';
$lang['add_to_cart'] = 'Dodaj v voziček';
$lang['amount'] = 'Količina';
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
  <li>Version 1.4 - Febrruary 2009<br/>
    <ul>
      <li>Add a template for controlling the summary view output</li>
    </ul>
  </li> 
</ul>';
$lang['default_addtocart_template'] = 'Privzeta predloga za Dodaj v voziček';
$lang['default_mycartform_template'] = 'Privzeta predloga obrazca Moj voziček';
$lang['default_viewcartform_template'] = 'Privzeta predloga obrazca Prikaz vozička';
$lang['default_templates'] = 'Privzete predloge';
$lang['delete'] = 'Izbri&scaron;i';
$lang['description'] = 'Opis';
$lang['error_invalidparam'] = 'Podan parameter ima napačno vrednost: %s';
$lang['error_missingparam'] = 'Manjkajoč obvezen parameter: %s';
$lang['error_nosuchproduct'] = 'Ne najdem informacij o izdelku: %s';
$lang['friendlyname'] = 'Voziček';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
<p>This module works in conjunction with the Products module and can read product information from that module.</p>
<p>Typically, a user would add a tag like {Cart product=12345} <em>(where 12345 is the product id of a record in the products module)</em> into a page or another module template to display an \&#039;add to cart\&#039; button for that product.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} would be be placed on a page or page template to allow users to see the number of items in the cart.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</li></ul>';
$lang['help_addtocarttemplate'] = 'Določuje neprivzeto predlogo za uporabo pri načinu &#039;dodaj v voziček&#039;';
$lang['help_hideform'] = 'Se nana&scaron;a na akcijo &#039;prikaz vozička&#039; - ta možnost označuje ali bo prikazan obrazec prikaz vozička';
$lang['help_mycarttemplate'] = 'Določuje neprivzeto predlogo za uporabo pri načinu &#039;moj voziček&#039;';
$lang['help_product'] = 'Applicable only for the default action, this parameter specifies which product (by id) should be added to the cart.  Typically, in the product detail template of the products module, you would add {Cart product=$entry->id} to allow adding items to the cart from product detail pages.';
$lang['help_viewcartpage'] = 'Določite stran za način &#039;prikaz vozička&#039;';
$lang['help_viewcarttemplate'] = 'Določuje neprivzeto predlogo za uporabo pri načinu &#039;prikaz vozička&#039;';
$lang['info_productsummarytemplate'] = 'Ta predloga se uporablja za formatiranje izpisa pri povzetku posameznega produkta v obrazcu &#039;prikaz vozička&#039;. Omogoča prilagoditev izdelka glede na atribute, ime in ceno.';
$lang['lbl_productsummarytemplate'] = 'Predloga povzetka izdelka';
$lang['moddescription'] = 'Preprost modul za nakupovalni voziček';
$lang['mycartform_templates'] = 'Predloge obrazca Moj voziček';
$lang['my_cart'] = 'Moj voziček';
$lang['none'] = 'Noben';
$lang['number'] = '&Scaron;tevilo';
$lang['number_of_items'] = '&Scaron;tevilo izdelkov';
$lang['postinstall'] = 'Modul Nakupovalni voziček je bil uspe&scaron;no name&scaron;čen';
$lang['postuninstall'] = 'Modul Nakupovalni voziček je bil odstranjen';
$lang['preferences'] = 'Nastavitve';
$lang['price'] = 'Cena';
$lang['product_id'] = 'ID produkta';
$lang['product_summary'] = 'Predloga povzetka izdelka';
$lang['quantity'] = 'Količina';
$lang['really_uninstall'] = 'Ste prepričani, da želite odstraniti ta modul?';
$lang['submit'] = 'Po&scaron;lji';
$lang['subtotal'] = 'Skupaj';
$lang['shipping'] = 'Dostava';
$lang['shipping_module'] = 'Modul za dostavo';
$lang['total'] = 'Za plačilo';
$lang['total_weight'] = 'Skupna teža';
$lang['unit_price'] = 'Cena na enoto';
$lang['viewcartform_templates'] = 'Predloga obrazca Prikaz vozička';
$lang['warn_default_templates'] = 'Obrazec nadzoruje kaj bo prikazano, ko kliknete &#039;Dodaj novo predlogo&#039; v ustreznem zavihku. Prilagajanje vsebin v tem polju ne bo imelo nobenih neposrednih učinkov na va&scaron;o spletno stran.';
$lang['weight'] = 'Teža';
$lang['utma'] = '156861353.982997797.1241023107.1241025774.1241028275.3';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1241023107.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>