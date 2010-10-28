{* add to cart template *}
{if isset($cart_error)}
{cgerror}{$cart_error}{/cgerror}
{/if}

{$formstart}
<input type="text" name="{$quantityname}" value="1" size="2" maxlength="2"/>
{if isset($attribute_count) && $attribute_count gt 0}&nbsp;
  {foreach from=$attributes item='attrib'}
    {$attrib->name}: {$attrib->control}
  {/foreach}
{/if}
<input type="submit" name="{$submitname}" value="{$addtocarttext}"/>
{$formend}