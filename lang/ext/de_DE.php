<?php
$lang['addedit_addtocart_template'] = '&bdquo;Zum Warenkorb hinzuf&uuml;gen&ldquo;-Vorlage hinzuf&uuml;gen/bearbeiten';
$lang['addedit_mycartform_template'] = '&bdquo;Mein Warenkorb&ldquo;-Vorlage hinzuf&uuml;gen/bearbeiten';
$lang['addedit_viewcartform_template'] = '&bdquo;Warenkorb anzeigen&ldquo;-Vorlage hinzuf&uuml;gen/bearbeiten';
$lang['addtocart_destpage'] = 'Seite, auf die nach dem Hinzuf&uuml;gen in den Warenkorb weiter geleitet werden soll';
$lang['addtocart_templates'] = '&bdquo;Zum Warenkorb hinzuf&uuml;gen&ldquo;-Vorlagen';
$lang['add_to_cart'] = 'In den Warenkorb';
$lang['amount'] = 'Anzahl';
$lang['default_addtocart_template'] = 'Standardvorlage f&uuml;r &bdquo;Zum Warenkorb hinzuf&uuml;gen&ldquo;';
$lang['default_mycartform_template'] = 'Standardvorlage f&uuml;r &bdquo;Mein Warenkorb&ldquo;';
$lang['default_viewcartform_template'] = 'Standardvorlage f&uuml;r &bdquo;Warenkorb anzeigen&ldquo;';
$lang['default_templates'] = 'Standardvorlagen';
$lang['delete'] = 'L&ouml;schen';
$lang['description'] = 'Beschreibung';
$lang['empty_cart'] = 'Alle Eintr&auml;ge entfernen';
$lang['error_cartpolicy_additem'] = 'Dieser Artikel kann nicht hinzugef&uuml;gt werden. Bitte konsultieren sie die Warenkorbrichtlinien dieser Website.';
$lang['error_invalidparam'] = 'Ein angegebener Parameter hat einen ung&uuml;ltigen Wert: %s';
$lang['error_missingparam'] = 'Ein ben&ouml;tigter Parameter fehlt: %s';
$lang['error_nosuchproduct'] = 'Konnte keine Information zum Produkt %s finden';
$lang['friendlyname'] = 'Warenkorb';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Dies ist ein einfaches Modul, um einen Warenkorb f&uuml;r Produkte zu verwalten. So k&ouml;nnen Produkte in den Warenkorb gelegt, angezeigt und auch wieder gel&ouml;scht werden.</p>
<h3>Wie wird es verwendet?</h3>
<p>Dieses Modul arbeitet  mit dem Products-Modul oder anderen in CGEcommerceBase aufgelisteteten/angezeigten Modulen zusammen und kann Produktinformationen aus diesen Modulen verarbeiten.</p>
<p>Es gibt eine ganze Reihe von Warenkorb-Modulen. Diese m&uuml;ssen installiert und in der Registerkarte &quot;Warenkorb-Einstellungen&quot; von CGEcommerce ausgew&auml;hlt sein. Dann k&ouml;nnen Sie das Plugin {cgecomm_form_addtocart} verwenden<em>(schauen Sie in die Hilfe des CGEcommerceBase-Moduls)</em>, um ein Formular &#039;Zum Warenkorb hinzuf&uuml;gen&#039; an der gew&uuml;nschten Stelle zu platzieren.</p>
<p>Zweitens kann ein Tag <em>{Cart action=&#039;mycart&#039;}</em> in eine Seite oder eine Vorlage eingef&uuml;gt werden, um den Benutzern die im Warenkorb befindlichen Artikel anzuzeigen. Dies wird typischerweise im Kopfbereich eines Onlineshops verwendet.</p>
<p>Drittens kann der Tag <em>{Cart action=&#039;viewcart&#039;}</em> in eine Seite oder eine Vorlage eingef&uuml;gt werden, um Benutzern zu erm&ouml;glichen, die Artikel im Warenkorb anzuzeigen und/oder zu bearbeiten.</p>';
$lang['help_action'] = '<p>Bestimmt das Standardverhalten des Moduls. M&ouml;gliche Werte sind &bdquo;default&ldquo;,&bdquo;mycart&ldquo; und &bdquo;viewcart&ldquo;.</p>
<ul>
    <li>default: zeigt ein Formular mit &bdquo;In den Warenkorb&ldquo;-Knopf, um das Hinzuf&uuml;gen eines Produktes in den Warenkorb zu erm&ouml;glichen</li>
    <li>mycart: zeigt ein Formular, das die Anzahl der Artikel im Warenkorb und einen &bdquo;Kaufen&ldquo;-Knopf anzeigt</li>
    <li>viewcart: zeigt ein Formular mit detailliertem Inhalt des Warenkorbs an, einen derzeitigen Gesamtbetrag und bietet die M&ouml;glichkeit, Artikel wieder aus dem Warenkorb zu entfernen</li>
</ul>';
$lang['help_addtocarttemplate'] = 'Legt eine andere Vorlage als die Standardvorlage f&uuml;r den Modus &bdquo;Zum Warenkorb hinzuf&uuml;gen&ldquo; fest';
$lang['help_hideform'] = 'Diese Angabe gilt nur f&uuml;r die Option &bdquo;Warenkorb anzeigen&ldquo; und zeigt an, ob das &bdquo;Warenkorb anzeigen&ldquo;-Formular dargestellt werden soll.';
$lang['help_mycarttemplate'] = 'Legt eine andere Vorlage als die Standardvorlage f&uuml;r den &bdquo;Mein Warenkorb&ldquo;-Modus fest';
$lang['help_product'] = 'Dieser Parameter gilt nur bei der Standardaktion und bestimmt, welches Produkt (nach ID) dem Warenkorb hinzugef&uuml;gt werden sollte. &Uuml;blicherweise wird in der Produktdetailvorlage des Produktverwaltungsmoduls der Code <em>{Cart product=$entry->id}</em> eingef&uuml;gt, um das Hinzuf&uuml;gen von Artikeln auf der Produktdetailseite zu erm&ouml;glichen.';
$lang['help_supplier'] = 'Kann nur mit der default-Aktion verwendet werden, dieser Parameter legt fest,die Informationen abgefragt werden. Voreingestellt ist &quot;Products&quot;';
$lang['help_viewcartpage'] = 'Legt eine Zielseite f&uuml;r den Modus &bdquo;Warenkorb anzeigen&ldquo; fest.';
$lang['help_viewcarttemplate'] = 'Legt eine andere Vorlage als die Standardvorlage f&uuml;r den Modus &bdquo;Warenkorb anzeigen&ldquo; fest';
$lang['info_productsummarytemplate'] = 'Diese Vorlage wird f&uuml;r die Formatierung der Ausgabe von jeder Produkt-Zusammenfassung in dem Formular f&uuml;r den Warenkorb verwendet. Es erlaubt das Anpassen der Produkt-Bezeichnungen basierend auf den Attributen, dem Produktname und dem Preis.';
$lang['lbl_productsummarytemplate'] = 'Produkt-Zusammenfassungsvorlage';
$lang['moddescription'] = 'Ein einfaches Warenkorb-Modul';
$lang['mycartform_templates'] = '&bdquo;Mein Warenkorb&ldquo;-Vorlagen';
$lang['my_cart'] = 'Mein Warenkorb';
$lang['none'] = 'Keine Vorgabe';
$lang['number'] = 'Anzahl';
$lang['number_of_items'] = 'Artikel im Warenkorb';
$lang['postinstall'] = 'Das Warenkorb-Modul wurde installiert';
$lang['postuninstall'] = 'Das Warenkorb-Modul wurde entfernt';
$lang['preferences'] = 'Einstellungen';
$lang['price'] = 'Preis';
$lang['product_id'] = 'Produkt-ID';
$lang['product_summary'] = 'Produktzusammenfassungsvorlage';
$lang['quantity'] = 'Menge';
$lang['really_uninstall'] = 'Wollen Sie wirklich dieses Modul entfernen?';
$lang['sku'] = 'Art.-Nr.';
$lang['submit'] = 'Absenden';
$lang['subtotal'] = 'Zwischensumme';
$lang['summary'] = 'Gesamt';
$lang['shipping'] = 'Versand';
$lang['shipping_module'] = 'Versand-Modul';
$lang['total'] = 'Gesamt';
$lang['total_weight'] = 'Gesamtgewicht';
$lang['unit_price'] = 'St&uuml;ckpreis';
$lang['viewcartform_templates'] = '&bdquo;Warenkorb anzeigen&ldquo;-Vorlagen';
$lang['warn_default_templates'] = 'Mit diesem Formular wird festgelegt, welche Inhalte voreingestellt eingef&uuml;gt werden, wenn man &bdquo;Eine neue Vorlage hinzuf&uuml;gen&ldquo; in der entsprechenden Registerkarte ausw&auml;hlt. Das Ver&auml;ndern der Inhalte in diesem Textfeld hat keine unmittelbaren Auswirkungen auf die Website.';
$lang['weight'] = 'Gewicht';
$lang['qca'] = 'P0-1186224688-1274538998273';
$lang['utmz'] = '156861353.1274538998.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.2095199688.1274538998.1276290366.1276298674.4';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>