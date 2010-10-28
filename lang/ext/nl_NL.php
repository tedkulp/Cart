<?php
$lang['addedit_addtocart_template'] = 'Voeg toe/Wijzig AddToCart Formuliersjabloon';
$lang['addedit_mycartform_template'] = 'Voeg toe/Wijzig MyCart Formuliersjabloon';
$lang['addedit_viewcartform_template'] = 'Voeg toe/Wijzig Viewcart Formuliersjabloon';
$lang['addtocart_destpage'] = 'Te openen pagina na Cart toevoeging';
$lang['addtocart_templates'] = 'AddToCart Sjabloon';
$lang['add_to_cart'] = 'Voeg toe aan My Cart';
$lang['amount'] = 'Bedrag';
$lang['default_addtocart_template'] = 'Standaard AddToCart Sjabloon';
$lang['default_mycartform_template'] = 'Standaard MyCart form Sjabloon';
$lang['default_viewcartform_template'] = 'Standaard Viewcart form Sjabloon';
$lang['default_templates'] = 'Standaard Sjablonen';
$lang['delete'] = 'Verwijder';
$lang['description'] = 'Omschrijving';
$lang['empty_cart'] = 'Verwijder Alle Items';
$lang['error_cartpolicy_additem'] = 'Kan dit artikel niet toevoegen aan de winkelwagen. Bekijk de website voorwaarden';
$lang['error_invalidparam'] = 'Ingegeven parameter heeft een ongeldige waarde: %s';
$lang['error_missingparam'] = 'Een benodigde parameter mist: %s';
$lang['error_nosuchproduct'] = 'Geen informatie gevonden voor product: %s';
$lang['friendlyname'] = 'Cart ';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
  <p>This module works in conjunction with the Products module, or any other supplier module as listed and selected in CGEcommerceBase, and can read product information from that module. </p>
  <p>There are multiple cart modules, therefore you must select which (of the installed and available) cart modules you would like to use in the &#039;Cart Settings&#039; tab of CGEcommerceBase.  Then you will use the {cgecomm_form_addtocart} plugin <em>(see the help in CGEcommerceBase)</em> to add an &#039;add to cart&#039; form where you want it.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} could be be placed on a page or page template to allow users to see a brief summary of items in the cart. This is typically used in the header of an e-commerce site.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</lu></ul>';
$lang['help_addtocarttemplate'] = 'Specifies a non default template to use for the &#039;addtocart&#039; mode.';
$lang['help_hideform'] = 'Applicable only to the &#039;viewcart&#039; action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = 'Geeft aan welke niet-standaard sjabloon gebruikt dient te worden.';
$lang['help_product'] = 'Geldt alleen voor de standaard actie, deze parameter bepaalt welk product (via id) moeten worden toegevoegd aan de winkelwagen. Doorgaans wordt in het product detail sjabloon van de producten module, dit toegevoegd {Cart product = $entry->id) om toevoeging van punten aan de winkelwaten van product detail pagina&#039;s.';
$lang['help_supplier'] = 'Alleen toepasbaar in de &quot;default&quot; bewerking, deze parameter benoemt welke bron module informatie verstuurd. Standaard &quot;Products&quot;';
$lang['help_viewcartpage'] = 'Benoem een doelpagina voor de &#039;viewcart&#039; modus.';
$lang['help_viewcarttemplate'] = 'Benoemt een niet standaard sjabloon voor de &#039;viewcart&#039; modus.';
$lang['info_productsummarytemplate'] = 'Dit sjabloon wordt gebruikt om de samenvatting van ieder product in de winkelwagenformulier in te stellen.
Hiermee kunt u een product label maken op basis van atributen, productnaam en de prijs.';
$lang['lbl_productsummarytemplate'] = 'Product Samenvatting Sjabloon';
$lang['moddescription'] = 'Een eenvoudige Cart Module';
$lang['mycartform_templates'] = 'MyCart Formuliersjablonen';
$lang['my_cart'] = 'Mijn winkelwagen ';
$lang['no'] = 'Nee';
$lang['none'] = 'Geen';
$lang['number'] = 'Nummer';
$lang['number_of_items'] = 'Aantal artikelen';
$lang['postinstall'] = 'De Cart module is geinstalleerd';
$lang['postuninstall'] = 'De Cart module is verwijderd';
$lang['preferences'] = 'Voorkeuren';
$lang['price'] = 'Prijs';
$lang['product_id'] = 'Product ID ';
$lang['product_summary'] = 'Product Samenvatting Sjabloon';
$lang['quantity'] = 'Hoeveelheid';
$lang['really_uninstall'] = 'Weet je zeker dat je deze module wilt verwijderen?';
$lang['remove'] = 'Verwijder';
$lang['sku'] = 'SKU ';
$lang['submit'] = 'Verstuur';
$lang['subtotal'] = 'Subtotaal';
$lang['summary'] = 'Samenvatting';
$lang['shipping'] = 'Verzenden';
$lang['shipping_module'] = 'Shipping Module ';
$lang['total'] = 'Totaal';
$lang['total_weight'] = 'Totaal Gewicht';
$lang['unit_price'] = 'Stuksprijs';
$lang['viewcartform_templates'] = 'Viewcart Formuliersjablonen';
$lang['warn_default_templates'] = 'This form controls what is displayed initially when you click &#039;Add New Template&#039; in the appropriate tab.  Adjusting the contents in this edit area will have no immedicate effect on your website.';
$lang['weight'] = 'Gewicht';
$lang['yes'] = 'Ja';
$lang['utma'] = '156861353.1738896039.1278840000.1280305238.1280321680.54';
$lang['utmz'] = '156861353.1280218995.48.5.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/board,13.0.html';
$lang['qca'] = 'P0-854387043-1278840000917';
$lang['utmb'] = '156861353.6.10.1280321680';
$lang['utmc'] = '156861353';
?>