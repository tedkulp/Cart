<?php
$lang['addedit_addtocart_template'] = 'Ajout ou &eacute;dition d&#039;un gabarit Ajouter au panier';
$lang['addedit_mycartform_template'] = 'Ajout ou &eacute;dition d&#039;un gabarit du formulaire Mon panier';
$lang['addedit_viewcartform_template'] = 'Ajout ou &eacute;dition d&#039;un gabarit du formulaire Voir le panier';
$lang['addtocart_destpage'] = 'Page o&ugrave; rediriger l&#039;utilisateur apr&egrave;s l&#039;ajout au panier';
$lang['addtocart_templates'] = 'Gabarit Ajouter au panier';
$lang['add_to_cart'] = 'Ajouter &agrave; mon panier';
$lang['amount'] = 'Montant';
$lang['default_addtocart_template'] = 'Gabarit par d&eacute;faut Ajouter au panier';
$lang['default_mycartform_template'] = 'Gabarit par d&eacute;faut du formulaire Mon panier';
$lang['default_viewcartform_template'] = 'Gabarit par d&eacute;faut du formulaire Voir le panier';
$lang['default_templates'] = 'Gabarits par d&eacute;faut';
$lang['delete'] = 'Supprimer';
$lang['description'] = 'Description&nbsp;';
$lang['empty_cart'] = 'Tout supprimer';
$lang['error_cartpolicy_additem'] = 'Impossible d&#039;ajouter cet &eacute;l&eacute;ment &agrave; votre panier.Veuillez consulter les r&eacute;gles du site web.';
$lang['error_invalidparam'] = 'Un des param&egrave;tres donn&eacute;s a une valeur incorrecte&nbsp;: %s';
$lang['error_missingparam'] = 'Un param&egrave;tre requis est manquant&nbsp;: %s';
$lang['error_nosuchproduct'] = 'Information sur le produit introuvable&nbsp;: %s';
$lang['friendlyname'] = 'Panier';
$lang['help'] = '<h3>Que fait ce module?</h3>
<p>C&#039;est un module simple qui permet de g&eacute;rer un panier de produits. Il vous permet d&#039;ajouter des produits &agrave; votre panier, de les voir et de les supprimer.</p>
<h3>Comment l&#039;utiliser</h3>
<p>Ce module fonctionne en conjonction avec le module Produits, et peut lire les informations des produits de ce module.</p>
<p>Typiquement, un utilisateur ajoutera une balise telle que {Cart product=12345} <em>(o&ugrave; 12345 est l&#039;id de l&#039;entr&eacute;e produit du module Produits)</em> dans une page o&ugrave; dans dans un gabarit d&#039;un autre module, et ceci affichera un bouton &quot;Ajouter au panier&quot;.</p>
<p>Deuxi&egrave;mement, une balise telle que {Cart action=&#039;mycart&#039;} sera plac&eacute;e sur une page ou un gabarit et permettra aux utilisateurs de voir le nombre de produits dans leur panier.</p>
<p>Troisi&egrave;mement, une balise telle que {Cart action=&#039;viewcart&#039;} sera plac&eacute;e dans une page ou un gabarit et permettra aux utilisateurs d&#039;&eacute;diter et de voir les produits qui sont dans leur panier.</p>';
$lang['help_action'] = 'Sp&eacute;cifie le comportement du module. Les valeurs possibles sont &#039;default&#039;,&#039;mycart&#039;, et &#039;viewcart&#039;.<br/><ul><li>default : affiche un formulaire avec un bouton &quot;Ajouter au panier&quot; qui permet d&#039;ajouter un produit sp&eacute;cifique au panier. Ce mode requiert que le param&egrave;tre &quot;product&quot; soit renseign&eacute;.</li><li>mycart : affiche un formulaire avec le nombre de produits dans le panier, et un bouton &quot;Commander&quot;.</li><li>viewcart : Affiche un formulaire avec la liste d&eacute;taill&eacute;e du contenu du panier, y compris le total et permettant de supprimer des produits du panier.</li></ul>';
$lang['help_addtocarttemplate'] = 'Sp&eacute;cifie un gabarit qui n&#039;est pas le gabarit par d&eacute;faut pour l&#039;utilisation du mode &quot;addtocart&quot;.';
$lang['help_hideform'] = 'Applicable uniquement pour le comportement &#039;viewcart&#039;, il indique si le formulaire viewcart doit &ecirc;tre affich&eacute;.';
$lang['help_mycarttemplate'] = 'Sp&eacute;cifie un gabarit non par d&eacute;faut pour l&#039;utiliser avec le mode &#039;mycart&#039;.';
$lang['help_product'] = 'Applicable seulement pour l&#039;action par d&eacute;faut, ce param&egrave;tre sp&eacute;cifie quel produit (par id) devrait &ecirc;tre ajout&eacute; au panier. Typiquement, dans le gabarit du d&eacute;tail du produit du module produits, vous ajouterez {Cart product=$entry->id} pour permettre d&#039;ajouter des articles au panier depuis les pages de d&eacute;tail du produit.';
$lang['help_supplier'] = 'Applicable seulement pour l&#039;action par d&eacute;faut, ce param&egrave;tre sp&eacute;cifie dans quel module fournisseur la requ&ecirc;te sera effectu&eacute;e. Ce param&egrave;tre est r&eacute;gl&eacute; par d&eacute;faut &agrave; &quot;Produits&quot;.';
$lang['help_viewcartpage'] = 'Sp&eacute;cifie une page de destination pour le mode &quot;viewcart&quot;';
$lang['help_viewcarttemplate'] = 'Sp&eacute;cifie un gabarit qui n&#039;est pas le gabarit par d&eacute;faut pour l&#039;utilisation du mode &quot;viewcart&quot;.';
$lang['info_productsummarytemplate'] = 'Ce gabarit est utiliser pour formater l&#039;affichage du r&eacute;sum&eacute; de chaque produit dans le formulaire d&#039;affichage du panier. Il permet de choisir un label pour le produit bas&eacute; sur les attributs, le nom du produit et le prix.';
$lang['lbl_productsummarytemplate'] = 'Gabarit pour sommaire des produits';
$lang['moddescription'] = 'Un module simple de panier';
$lang['mycartform_templates'] = 'Gabarits de formulaire Mon Panier';
$lang['my_cart'] = 'Mon Panier';
$lang['no'] = 'Non';
$lang['none'] = 'Aucun';
$lang['number'] = 'Nombre';
$lang['number_of_items'] = 'Nombre d&#039;articles';
$lang['postinstall'] = 'Le module Panier a &eacute;t&eacute; install&eacute; avec succ&egrave;s';
$lang['postuninstall'] = 'Le module Panier a &eacute;t&eacute; supprim&eacute;';
$lang['preferences'] = 'Pr&eacute;f&eacute;rences';
$lang['price'] = 'Prix';
$lang['product_id'] = 'ID Produit ';
$lang['product_summary'] = 'Gabarit pour sommaire du produit';
$lang['quantity'] = 'Quantit&eacute;';
$lang['really_uninstall'] = '&Ecirc;tes-vous certain de vouloir supprimer ce module?';
$lang['remove'] = 'Supprimer';
$lang['sku'] = 'UGS';
$lang['submit'] = 'Soumettre';
$lang['subtotal'] = 'Sous-total';
$lang['summary'] = 'Sommaire';
$lang['shipping'] = 'Livraison';
$lang['shipping_module'] = 'Module de livraison';
$lang['total'] = 'Total ';
$lang['total_weight'] = 'Poids total';
$lang['unit_price'] = 'Prix unitaire';
$lang['viewcartform_templates'] = 'Gabarits du formulaire Voir le panier';
$lang['warn_default_templates'] = 'Ce formulaire contr&ocirc;le ce qui s&#039;affiche initialement quand vous cliquez sur &quot;Ajout d&#039;un nouveau gabarit&quot; dans l&#039;onglet correspondant. La modification du contenu dans cette zone d&#039;&eacute;dition n&#039;aura pas d&#039;effet imm&eacute;diat sur votre site';
$lang['weight'] = 'Poids';
$lang['yes'] = 'Oui';
$lang['utmz'] = '156861353.1280407408.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1670852478.1280407408.1280421382.1280436222.3';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>