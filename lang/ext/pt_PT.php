<?php
$lang['addedit_addtocart_template'] = 'Adicionar/Editar Template Adicionar ao Carrinho';
$lang['addedit_mycartform_template'] = 'Adicionar/Editar Formul&aacute;rio Template O Meu Carrinho ';
$lang['addedit_viewcartform_template'] = 'Adicionar/Editar Formul&aacute;rio Visualizar Carrinho';
$lang['addtocart_destpage'] = 'P&aacute;gina Para Redirecionar, Para depois acrescentar ao carrinho';
$lang['addtocart_templates'] = 'Templates Adicionar ao Carrinho';
$lang['add_to_cart'] = 'Adicionar ao Meu Carrinho';
$lang['amount'] = 'Valor';
$lang['default_addtocart_template'] = 'Template Padr&atilde;o Adicionar ao Meu Carrinho';
$lang['default_mycartform_template'] = 'Template Padr&atilde;o Formul&aacute;rio  Meu Carrinho';
$lang['default_viewcartform_template'] = 'Template Padr&atilde;o Formul&aacute;rio Visualizar Carrinho';
$lang['default_templates'] = 'Templates Padr&atilde;o';
$lang['delete'] = 'Eliminar';
$lang['description'] = 'Descri&ccedil;&atilde;o';
$lang['empty_cart'] = 'Remover todos os Items';
$lang['error_invalidparam'] = 'Um par&acirc;metro obrigat&oacute;rio tem um valor incorreto: %s';
$lang['error_missingparam'] = 'Um par&acirc;metro obrigat&oacute;rio est&aacute; em falta: %s';
$lang['error_nosuchproduct'] = 'N&atilde;o foi poss&iacute;vel encontrar informa&ccedil;&otilde;es sobre o produto: %s';
$lang['friendlyname'] = 'Carrinho';
$lang['help'] = '<h3>What does it do?</h3>
<p>This is a simple module to allow maintaining a shopping cart of products.  It allows you to add products to your cart, view them, and delete them.</p>
<h3>How Do I use It</h3>
  <p>This module works in conjunction with the Products module, or any other supplier module as listed and selected in CGEcommerceBase, and can read product information from that module.</p>
  <p>There are multiple cart modules, therefore you must select which (of the installed and available) cart modules you would like to use in the &#039;Cart Settings&#039; tab of CGEcommerceBase.  Then you will use the {cgecomm_form_addtocart} plugin <em>(see the help in CGEcommerceBase)</em> to add an &#039;add to cart&#039; form where you want it.</p>
<p>Secondly, a tag like {Cart action=&#039;mycart&#039;} could be be placed on a page or page template to allow users to see a brief summary of items in the cart. This is typically used in the header of an e-commerce site.</p>
<p>Thirdly, a tag like {Cart action=&#039;viewcart&#039;} would be placed on a page or page template to allow users to edit and preview the items in their cart.</p>';
$lang['help_action'] = 'Specifies the behaviour of the module.  Possible values are &#039;default&#039;,&#039;mycart&#039;, and &#039;viewcart&#039;.<br/><ul><li>default: displays a form with an &#039;add to cart&#039; button to allow adding a specific product to the cart.  This mode requires the &#039;product&#039; parameter be supplied.</li><li>mycart: Displays a form that displays the number of items in the cart, and a &#039;checkout&#039; button.</li><li>viewcart: Displays a detailed form of the contents of the cart, including a current total, and allows deleting items from the cart.</li></ul>';
$lang['help_addtocarttemplate'] = 'Especifica um template n&atilde;o padr&atilde;o a ser usada para o &#039;addtocart&#039;.';
$lang['help_hideform'] = 'Aplic&aacute;vel apenas a &#039;viewcart &laquo;ac&ccedil;&atilde;o, esta flag  indica as condi&ccedil;&otilde;es de tempo que deve ser exibido no formul&aacute;rio viewcart  ';
$lang['help_mycarttemplate'] = 'Especifica um modelo n&atilde;o padr&atilde;o para o uso do modo &quot;mycart&quot;';
$lang['help_product'] = 'Aplic&aacute;vel somente para a ac&ccedil;&atilde;o padr&atilde;o, este par&acirc;metro especifica cada produto (por id) dever&atilde;o ser adicionados ao carrinho. Normalmente, o produto detalhe no modelo de produtos, poder&aacute; acrescentar 	
{Cart product=$entry->id} para permitir adicionar itens ao carrinho nas p&aacute;ginas de produtos detalhes.';
$lang['help_supplier'] = 'Applicable only to the default action, this parameter specifies which supplier module to query information to.  By default this is &quot;Products&quot; ';
$lang['help_viewcartpage'] = 'Especifique um destino para a p&aacute;gina &#039;viewcart&#039; .';
$lang['help_viewcarttemplate'] = 'Especifica um template n&atilde;o padr&atilde;o a ser usada para o &#039;viewcart&#039;.';
$lang['info_productsummarytemplate'] = 'Este template &eacute; usado para formatar a sa&iacute;da utilizada para cada produto sum&aacute;rio, na op&ccedil;&atilde;o carrinho formul&aacute;rio. Permite personalizar label do produto baseado na atributos, nome do produto, e pre&ccedil;o.';
$lang['lbl_productsummarytemplate'] = 'Producto Sum&aacute;rio Template';
$lang['moddescription'] = 'Um simples m&oacute;dulo de Carrinho ';
$lang['mycartform_templates'] = 'Templates Formul&aacute;rio O meu Carrinho';
$lang['my_cart'] = 'O meu carrinho';
$lang['none'] = 'Nenhum';
$lang['number'] = 'Numero';
$lang['number_of_items'] = 'N&uacute;mero de items';
$lang['postinstall'] = 'O m&oacute;dulo Carrinho foi instalado com sucesso';
$lang['postuninstall'] = 'O m&oacute;dulo Carrinho foi desinstalado';
$lang['preferences'] = 'Prefer&ecirc;ncias';
$lang['price'] = 'Pre&ccedil;o';
$lang['product_id'] = 'Produto ID';
$lang['product_summary'] = 'Producto Sum&aacute;rio Template';
$lang['quantity'] = 'Quantidade';
$lang['really_uninstall'] = 'Tem certeza de que deseja remover este m&oacute;dulo?';
$lang['sku'] = 'SKU ';
$lang['submit'] = 'Submeter';
$lang['subtotal'] = 'Sub-total';
$lang['summary'] = 'Sum&aacute;rio';
$lang['shipping'] = 'Expedi&ccedil;&atilde;o';
$lang['shipping_module'] = 'M&oacute;dulo Expedi&ccedil;&atilde;o';
$lang['total'] = 'Valor Total';
$lang['total_weight'] = 'Peso Total ';
$lang['unit_price'] = 'Pre&ccedil;o Unit&aacute;rio';
$lang['viewcartform_templates'] = 'Templates Formul&aacute;rio Ver Carrinho';
$lang['warn_default_templates'] = 'Este formul&aacute;rio controla o que &eacute; apresentado inicialmente quando clicar em &quot;Adicionar Novo Template&quot; na Aba apropriada. Ajustando o conte&uacute;do desta &aacute;rea n&atilde;o ter&aacute; qualquer efeito imediato sobre seu site.';
$lang['weight'] = 'Peso';
$lang['utma'] = '156861353.979735442.1272325796.1274034453.1274130619.21';
$lang['utmz'] = '156861353.1273059649.13.4.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/files/69';
$lang['qca'] = 'P0-1983650401-1272325796645';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>