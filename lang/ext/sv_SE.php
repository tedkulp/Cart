<?php
$lang['addedit_addtocart_template'] = 'L&auml;ggtill/redigera L&auml;ggtillKundvagnsmall';
$lang['addedit_mycartform_template'] = 'L&auml;ggtill/redigera MinKundvagns formul&auml;rsmall';
$lang['addedit_viewcartform_template'] = 'L&auml;ggtill/redigera VisaKundvagns formul&auml;rsmall';
$lang['addtocart_destpage'] = 'Sida som ska omdirigeras efter &#039;L&auml;gg till i kundvagn&#039;';
$lang['addtocart_templates'] = 'L&auml;ggtill Kundvagnsmallar';
$lang['add_to_cart'] = 'L&auml;gg till i kundvagn';
$lang['amount'] = 'Konto';
$lang['default_addtocart_template'] = 'Standard L&auml;ggtill Kundvagnsmall';
$lang['default_mycartform_template'] = 'Standard MinKundvagns formul&auml;rsmall';
$lang['default_viewcartform_template'] = 'Standard VisaKundvagns formul&auml;rsmall';
$lang['default_templates'] = 'Standardmallar';
$lang['delete'] = 'Radera';
$lang['description'] = 'Beskrivning';
$lang['empty_cart'] = 'Radera Alla Artiklar';
$lang['error_invalidparam'] = 'En leverans parameter har ett felaktigt v&auml;rde: %s';
$lang['error_missingparam'] = 'En n&ouml;dv&auml;ndig parameter saknas: %s';
$lang['error_nosuchproduct'] = 'Kunde inte hitta information om: %s';
$lang['friendlyname'] = 'Kundvagn';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
<p>This module works in conjunction with the Products module and can read product information from that module.</p>
<p>Typically, a user would add a tag like {Cart product=12345} <em>(where 12345 is the product id of a record in the products module)</em> into a page or another module template to display an \&#039;add to cart\&#039; button for that product.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} would be be placed on a page or page template to allow users to see the number of items in the cart.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</lu></ul>';
$lang['help_addtocarttemplate'] = 'Anger en icke standardmall som ska anv&auml;ndas f&ouml;r &#039;l&auml;ggtillkundvagn&#039; -l&auml;ge';
$lang['help_hideform'] = 'Applicable only to the &#039;viewcart&#039; action, this flag indicates wether the viewcart form should be displayed';
$lang['help_mycarttemplate'] = 'Specifera en icke standardmall f&ouml;r att anv&auml;nda i &#039;minkundvagns-l&auml;ge&#039;';
$lang['help_product'] = 'G&auml;ller endast f&ouml;r standard&aring;tg&auml;rden, den h&auml;r parametern anger vilken produkt (med id) som b&ouml;r l&auml;ggas till i korgen. Vanligtvis i produkt-detaljmallen s&aring; skulle du l&auml;gga {Cart product= $entry->id}.';
$lang['help_supplier'] = 'G&auml;ller endast f&ouml;r standard&aring;tg&auml;rden, denna parameter anges som leverant&ouml;rs modul f&ouml;r att s&ouml;ka information. Standard &auml;r &quot;Produkter&quot;';
$lang['help_viewcartpage'] = 'Ange en destination sida f&ouml;r &#039;visakundvagns&#039;-l&auml;ge.';
$lang['help_viewcarttemplate'] = 'Anger en icke standardmall';
$lang['info_productsummarytemplate'] = 'Denna mall anv&auml;nds f&ouml;r att formatera utdatan som anv&auml;nds f&ouml;r varje produktsammanfattning i Kundvagnsl&auml;ge. Detta g&ouml;r det m&ouml;jligt att skr&auml;ddarsy produktetiketten som bygger p&aring; attributer, produktnamn och pris.';
$lang['lbl_productsummarytemplate'] = 'Produkt Sammanfattningsmall';
$lang['moddescription'] = 'En enkel Kundvagnsmodul';
$lang['mycartform_templates'] = 'MinKundvagns formul&auml;rsmallar';
$lang['my_cart'] = 'Min Kundvagn';
$lang['none'] = 'Ingen';
$lang['number'] = 'Antal';
$lang['number_of_items'] = 'Antal varor';
$lang['postinstall'] = 'Installationen av Cart modulen lyckades';
$lang['postuninstall'] = 'Cart modulen &auml;r nu borttagen';
$lang['preferences'] = 'Inst&auml;llningar';
$lang['price'] = 'Pris';
$lang['product_id'] = 'Produkt ID';
$lang['product_summary'] = 'Produkt Summeringsmall';
$lang['quantity'] = 'Kvantitet';
$lang['really_uninstall'] = '&Auml;r du s&auml;ker p&aring; att du vill radera denna modul?';
$lang['sku'] = 'Stock-keeping unit';
$lang['submit'] = 'K&ouml;p';
$lang['subtotal'] = 'Delsumma';
$lang['summary'] = 'Sammanfattning';
$lang['shipping'] = 'Frakt';
$lang['shipping_module'] = 'Fraktmodul';
$lang['total'] = 'Totalt';
$lang['total_weight'] = 'Totalvikt';
$lang['unit_price'] = 'Enhets pris';
$lang['viewcartform_templates'] = 'VisaKundvagns formul&auml;rsmallar';
$lang['warn_default_templates'] = 'Detta formul&auml;r styr vad som visas f&ouml;rst n&auml;r du klickar p&aring; &#039;L&auml;gg till ny mall&#039; i l&auml;mplig flik. Justeringar av detta inneh&aring;llet kommer inte att ha n&aring;gon direkt verkan p&aring; din webbplats.';
$lang['weight'] = 'Vikt';
$lang['utma'] = '156861353.906052642.1267835734.1280855260.1280862441.163';
$lang['utmz'] = '156861353.1280548859.155.12.utmcsr=wiki.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/User_Handbook/Admin_Panel/Content/Global_Content_Blocks';
$lang['qca'] = 'P0-1605183070-1267835733865';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1280862441';
?>