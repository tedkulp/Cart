rtform template *}
<table class="pagetable" cellspacing="0">
  <thead>
     <tr>
        <th>{$mod->Lang('number')}</th>
        <th>{$mod->Lang('product_id')}</th>
        <th>{$mod->Lang('description')}</th>
        <th>{$mod->Lang('quantity')}</th>
        <th>{$mod->Lang('unit_price')}</th> 
        <th>{$mod->Lang('weight')}</th>
        <th>{$mod->Lang('amount')}</th>
     </tr>
  </thead>
  <tbody>
  {foreach from=$cartitems item='oneitem' name='loop'}
    {cycle values="row1,row2" assign='rowclass'}
    <tr class="{$rowclass}" onmouseover="this.className='{$rowclass}hover';" onmouseout="this.className='{$rowclass}';">
        <td>{$smarty.foreach.loop.index}</td>
        <td>{$oneitem->product_id}</td>
        <td>{$oneitem->summary}</td>
        <td>{$oneitem->quantity}</td>
        <td>{$oneitem->unit_price|number_format:2}</td>
        <td>{$oneitem->weight}</td>
       <td>{$currencysymbol}{$oneitem->quantity*$oneitem->unit_price|number_format:2}</td>
    </tr>
  {/foreach}
  <tr>
     <td colspan="5"><span style="text-align: right;">{$mod->Lang('subtotal')}</td>
     <td>{$cartweight|number_format:2}{$weightunits}</td>
     <td>{$currencysymbol}{$cartsubtotal|number_format:2}</td>
  </tr>
  {foreach from=$carttaxes key='name' item='amt'}
    {if !empty($name)}
      <tr>
        <td colspan="5"><span style="text-align: right;">{$name}</td>
        <td> </td>
        <td>{$currencysymbol}{$amt|number_format:2}</td>
     </tr>
    {/if}
  {/foreach}
  <tr>
    <td colspan="5"><span style="text-align: right;">{$mod->Lang('total')}</td>
    <td> </td>
    <td>{$currencysymbol}{$carttotal|number_format:2}</td>
  </tr>
   </tbody>
</table>

