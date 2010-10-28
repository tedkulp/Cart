<?php
$lang['addedit_addtocart_template'] = 'Aggiungere/Modificare Template modulo AggiungiAlCarrello';
$lang['addedit_mycartform_template'] = 'Aggiungere/Modificare Template modulo MioCarrello';
$lang['addedit_viewcartform_template'] = 'Aggiungere/Modificare Template modulo VisualizzaCarrello';
$lang['addtocart_destpage'] = 'Pagina da redirigere dopo aver aggiunto al Carrello';
$lang['addtocart_templates'] = 'Template AggiungiAlCarrello';
$lang['add_to_cart'] = 'Aggiungere al mio Carrello';
$lang['amount'] = 'Ammmontare';
$lang['default_addtocart_template'] = 'Template AggiungiAlCarrello predefinito';
$lang['default_mycartform_template'] = 'Template modulo MioCarrello predefinito';
$lang['default_viewcartform_template'] = 'Template modulo VisualizzaCarrello predefinito';
$lang['default_templates'] = 'Template predefiniti';
$lang['delete'] = 'Cancella';
$lang['description'] = 'Descrizione';
$lang['empty_cart'] = 'Rimuovi tutti gli articoli';
$lang['error_cartpolicy_additem'] = 'Non posso aggiungere questo articolo al carrello. Vedere la policy del sito';
$lang['error_invalidparam'] = 'Un parametro ha un valore incorretto: %s';
$lang['error_missingparam'] = 'Un parametro richiesto &egrave; mancante: %s';
$lang['error_nosuchproduct'] = 'Non posso trovare le informazioni sul prodotto: %s';
$lang['friendlyname'] = 'Carrello';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
  <p>This module works in conjunction with the Products module, or any other supplier module as listed and selected in CGEcommerceBase, and can read product information from that module.</p>
  <p>There are multiple cart modules, therefore you must select which (of the installed and available) cart modules you would like to use in the &#039;Cart Settings&#039; tab of CGEcommerceBase.  Then you will use the {cgecomm_form_addtocart} plugin <em>(see the help in CGEcommerceBase)</em> to add an &#039;add to cart&#039; form where you want it.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} could be be placed on a page or page template to allow users to see a brief summary of items in the cart. This is typically used in the header of an e-commerce site.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifica il comportamento del modulo. Possibili valori sono &#039;default&#039;, &#039;mycart&#039;, e &#039;viewcart&#039;.<br/><ul><li>default: visualizza un form con un bottone &#039;aggiungi al carrello&#039; per permettere di aggiungere uno specifico prodotto al carrello. Questo modo richiede che il parametro &#039;product&#039; sia inserito.</li><li>mycart: visualizza un form con il numbero di articoli nel carrello e un bottone &#039;checkout&#039;.</li><li>viewcart: visualizza un form dettagliato con il contenuto del carrello, incluso il totale corrente e permettendo di cancellare articoli dal carrello.</lu></ul>';
$lang['help_addtocarttemplate'] = 'Specifica un Template non predefinito da usare per il modo &#039;AggiungiAlCarrello&#039;.';
$lang['help_hideform'] = 'Applicabile solo all&#039;azione &#039;viewcart&#039;, questo indica se il form viewcart dovr&agrave; essere visualizzato';
$lang['help_mycarttemplate'] = 'Specifica un template non predefinito da usare col modo &#039;MioCarrello&#039;.';
$lang['help_product'] = 'Applicabile solo per l&#039;azione predefinita, questo parametro specifica quale prodotto (per id) dovrebbe essere aggiunto al carrello.  Tipicamente, nel template dettaglio prodotti del modulo Products, dovreste aggiungere {Cart product=$entry->id} per permettere aggiunta di termini al carrello direttamente dalla pagina dettaglio prodotti.';
$lang['help_supplier'] = 'Applicabile solo all&#039;azione di default, questo parametro specifica quale modulo fornisce informazioni. Per default questo &egrave; &quot;Products&quot;';
$lang['help_viewcartpage'] = 'Specifica una pagina di destinazione per il modo &#039;VisualizzaCarrello&#039;.';
$lang['help_viewcarttemplate'] = 'Specifica un Template non predefinito da usare per il modo &#039;VisualizzaCarrello&#039;.';
$lang['info_productsummarytemplate'] = 'Questo Template &egrave; usato per formattare il sommario di ciascun prodotto nel form di visualizzazione carrellio. Permette la personalizzazione dell&#039;etichetta del prodotto basando su attributi, nome produtto e prezzo.';
$lang['lbl_productsummarytemplate'] = 'Template sommario prodotto';
$lang['moddescription'] = 'Un semplice modulo Carrello';
$lang['mycartform_templates'] = 'Template modulo MioCarrello';
$lang['my_cart'] = 'Mio Carrello';
$lang['no'] = 'No';
$lang['none'] = 'Nessuno';
$lang['number'] = 'Numero';
$lang['number_of_items'] = 'Numero di articoli';
$lang['postinstall'] = 'Il modulo Cart &egrave; stato installato con successo';
$lang['postuninstall'] = 'Il modulo Cart &egrave; stato rimosso';
$lang['preferences'] = 'Preferenze';
$lang['price'] = 'Prezzo';
$lang['product_id'] = 'Prodotto ID';
$lang['product_summary'] = 'Template sommario prodotto';
$lang['quantity'] = 'Quantit&agrave;';
$lang['really_uninstall'] = 'Siete sicuri di voler rimuovere questo modulo?';
$lang['remove'] = 'Rimuovi';
$lang['sku'] = 'SKU ';
$lang['submit'] = 'Invia';
$lang['subtotal'] = 'Subtotale';
$lang['summary'] = 'Sommario';
$lang['shipping'] = 'Spedizione';
$lang['shipping_module'] = 'Modulo di Spedizione';
$lang['total'] = 'Totale';
$lang['total_weight'] = 'Totale pesato';
$lang['unit_price'] = 'Prezzo unitario';
$lang['viewcartform_templates'] = 'Template modulo VisualizzaCarrello';
$lang['warn_default_templates'] = 'Questo modulo controlla cosa &egrave; visualizzato inizialmente quando click su &#039;Aggiungi Nuovo Template&#039; nell&#039;appropriato tab. La regolazione dei contenuti in questa area non avranno subito un effetto immedicato sul sito.';
$lang['weight'] = 'Peso';
$lang['yes'] = 'S&igrave;';
$lang['qca'] = 'P0-250679722-1271187168764';
?>