{* mycart form template *}
{$numitemstext}:&nbsp;{$cart_itemcount}<br/>
{$pricetext}:&nbsp;{$currency_symbol}{$cart_totalprice:number_format:2}&nbsp;
{if isset($submitname)}
  {$formstart}
  <input type="submit" name="{$submitname}" value="{$checkouttext}"/>
  {$formend}
{/if}