<?php
$lang['addedit_addtocart_template'] = 'Legg til/rediger LeggIHandlekurv mal';
$lang['addedit_mycartform_template'] = 'Legg til/rediger MinHandlekurv skjemamal';
$lang['addedit_viewcartform_template'] = 'Legg til/rediger Vis-handlekurv skjemamal';
$lang['addtocart_destpage'] = 'Side &aring; videresende til etter at en har lagt til noe i handlekurven';
$lang['addtocart_templates'] = 'LeggIHandlekurv maler';
$lang['add_to_cart'] = 'Legg i min handlekurv';
$lang['amount'] = 'Mengde';
$lang['default_addtocart_template'] = 'Standard LeggIHandlekurv mal';
$lang['default_mycartform_template'] = 'Standard MinHandlekurv skjemamal';
$lang['default_viewcartform_template'] = 'Standard VisHandlekurv skjema mal';
$lang['default_templates'] = 'Standard maler';
$lang['delete'] = 'Slett';
$lang['description'] = 'Beskrivelse';
$lang['empty_cart'] = 'Fjern alle artikler';
$lang['error_cartpolicy_additem'] = 'Kan ikke legge denne produktet i handlekurven. Se i nettstedets handlekurv regler';
$lang['error_invalidparam'] = 'En oppgitt parameter har en ugyldig verdi: %s';
$lang['error_missingparam'] = 'En n&oslash;dvendig parameter mangler: %s';
$lang['error_nosuchproduct'] = 'Kunne ikke finne informasjon for produktet: %s';
$lang['friendlyname'] = 'Handlekurv';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
  <p>This module works in conjunction with the Products module, or any other supplier module as listed and selected in CGEcommerceBase, and can read product information from that module.</p>
  <p>There are multiple cart modules, therefore you must select which (of the installed and available) cart modules you would like to use in the &#039;Cart Settings&#039; tab of CGEcommerceBase.  Then you will use the {cgecomm_form_addtocart} plugin <em>(see the help in CGEcommerceBase)</em> to add an &#039;add to cart&#039; form where you want it.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} could be be placed on a page or page template to allow users to see a brief summary of items in the cart. This is typically used in the header of an e-commerce site.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart. </lu></ul>';
$lang['help_addtocarttemplate'] = 'Spesifiserer en ikke standard mal &aring; bli benyttet i &#039;addtocart&#039; modus.';
$lang['help_hideform'] = 'Gjelder kun &quot;viewcart&quot; handlingen. Denne innstillingen forteller hvorvidt viewcartskjemaet skal vises.';
$lang['help_mycarttemplate'] = 'Spesifiserer en mal (som ikke er standard) &aring; benytte for &#039;mycart&#039; modus.';
$lang['help_product'] = 'Gjelder kun for standard handlingen. Denne parameter spesifiserer hvilket produkt (etter id) som skal legges til handlekurven. I produktdetaljmal for products-modulen, vil du typisk legge inn {Cart product=$entry->id} for &aring; tillate &aring; legge artikler til handlekurven fra sider for produktdetaljer.';
$lang['help_supplier'] = 'Gjelder kun for standard handlingen. Denne parameter spesifiserer hvilken leverand&oslash;rmodul &aring; sp&oslash;rre informasjon fra. Som standard er dette &quot;Products&quot;';
$lang['help_viewcartpage'] = 'Spesifiser en m&aring;lside for &#039;viewcart&#039; modusen.';
$lang['help_viewcarttemplate'] = 'Spesifiser en ikke standard mal &aring; benytte i &#039;viewcart&#039; modus.';
$lang['info_productsummarytemplate'] = 'Denne malen benyttes for &aring; formatere visningen som benyttes for hver produktsammendrag i vis-handlekurvskjemaet. Den tillater tilpasning av produktetiketten basert p&aring; attributter, produktnavn og pris.';
$lang['lbl_productsummarytemplate'] = 'Produktsammendragsmal';
$lang['moddescription'] = 'En enkel Handlekurv modul';
$lang['mycartform_templates'] = 'MinHandlekurv skjemamaler';
$lang['my_cart'] = 'Min Handlekurv';
$lang['no'] = 'Nei';
$lang['none'] = 'Ingen';
$lang['number'] = 'Antall';
$lang['number_of_items'] = 'Antall produkter';
$lang['postinstall'] = 'Handlekurv modulen har blitt installert';
$lang['postuninstall'] = 'Handlekurv modulen har blitt fjernet';
$lang['preferences'] = 'Innstillinger';
$lang['price'] = 'Pris';
$lang['product_id'] = 'ProduktID';
$lang['product_summary'] = 'Produktsammendragsmal';
$lang['quantity'] = 'Antall';
$lang['really_uninstall'] = 'Er du virkelig sikker p&aring; du vil avinstallere denne modulen?';
$lang['remove'] = 'Fjern';
$lang['sku'] = 'Prod.nr.';
$lang['submit'] = 'Utf&oslash;r';
$lang['subtotal'] = 'Delsum';
$lang['summary'] = 'Sammendrag';
$lang['shipping'] = 'Forsendelse';
$lang['shipping_module'] = 'Forsendelse modul';
$lang['total'] = 'Sum';
$lang['total_weight'] = 'Total vekt';
$lang['unit_price'] = 'Enhetspris';
$lang['viewcartform_templates'] = 'VisHandlekurv skjemamaler';
$lang['warn_default_templates'] = 'Skjemakontrollene som blir vist innledningsvis n&aring;r du klikker &#039;Legg til ny mal&#039; i den aktuelle fliken. &Aring; endre innholdet i dette omr&aring;det vil ikke ha noen umiddelbar virkning p&aring; ditt nettsted.';
$lang['weight'] = 'Vekt';
$lang['yes'] = 'Ja';
$lang['utmz'] = '156861353.1279922282.3039.70.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php';
$lang['utma'] = '156861353.179052623084110100.1210423577.1280440939.1280442901.3072';
$lang['qca'] = '1210971690-27308073-81952832';
$lang['utmb'] = '156861353.2.10.1280442901';
$lang['utmc'] = '156861353';
?>