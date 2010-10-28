{* viewcartform template *}
<div class="viewcartform">
{* if the smarty variable orders_simpleviewcart is not set, 
   then don't provide a form for adjusting quantities 
*}
{if !isset($cartitems) || count($cartitems) == 0 }
  Your cart is empty
{else}

{if isset($formstart) && !isset($orders_simpleviewcart)}{$formstart}{/if}
{foreach from=$cartitems item='oneitem'}
<div class="cartitem">
  <div class="itemsku">
     {$Cart->Lang('sku')}: {$oneitem->sku}
  </div>
  <div class="itemdesc">
     {$Cart->Lang('summary')}: {$oneitem->summary}
  </div>
  <div class="itemquantity">
     {$quantitytext}: {$oneitem->quantity}
  </div>
  <div class="itemprice">
     {$pricetext}: 
     {if $oneitem->type != 1}
       {$oneitem->quantity}
     {else}
       {if isset($oneitem->quantity_box)}
         {$oneitem->quantity_box}
       {/if}
     {/if}&nbsp;@&nbsp;{$currencysymbol}{$oneitem->unit_price|number_format:2}
     {if isset($oneitem->remove_box)}{$oneitem->remove_box}&nbsp;{$Cart->Lang('remove')}{/if}
  </div>
</div>
{/foreach}

<div class="totals">
  {$total_weight_text}: {$cartweight|number_format:2}{$weightunits}<br/>
  {$total_text}: {$currencysymbol}{$carttotal|number_format:2}
  {if isset($formstart) && !isset($orders_simpleviewcart)}
  <input type="submit" name="{$submit_name}" value="{$submit_text}"/>
  <input type="submit" name="{$actionid}cart_empty_cart" value="{$Cart->Lang('empty_cart')}"/>
  {/if}
</div>
{if isset($formstart) && !isset($orders_simpleviewcart)}{$formend}{/if}
{/if}
<!-- viewcartform --></div>
