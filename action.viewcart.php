<?php
#-------------------------------------------------------------------------
# Module: Cart - A simple example frontend form module
# Version: 1.0, calguy1000 <calguy1000@cmsmadesimple.org>
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/skeleton/
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
if( !isset($gCms) ) exit;


$viewcartpage = '';
if (isset($params['viewcartpage']))
  {
    $manager =& $gCms->GetHierarchyManager();
    $node =& $manager->sureGetNodeByAlias($params['viewcartpage']);
    if (isset($node))
      {
	$content =& $node->GetContent();	
	if (isset($content))
	  {
	    $viewcartpage = $content->Id();
	  }
      }
    else
      {
	$node =& $manager->sureGetNodeById($params['viewcartpage']);
	if (isset($node))
	  {
	    $viewcartpage = $params['viewcartpage'];
	  }
      }
  }
$destpage = $returnid;
if( $viewcartpage != '' ) 
  {
    $destpage = $viewcartpage;
  }

// Expand the cart
$items = $this->GetItems();
if( isset($params['cart_empty_cart']) )
  {
    $this->EraseCart();
    $this->RedirectContent($returnid);
  }
else if( isset($params['cart_adjust']) )
  {
    // adjust the quantity
    $idx = 0;
    foreach( $params as $key => $value )
      {
	if( preg_match( '/cart_quantity_/', $key ) )
	  {
	    $idx = (int)substr($key,14);
	    $items[$idx]->set_quantity($value);
	  }
      }


    // remove any zero quantity items
    // or flagged for removal.
    $tmp = array();
    for( $i = 0; $i < count($items); $i++ )
      {
	$item =& $items[$i];
	if( $item->get_quantity() == 0 ) continue;
	if( isset($params['cart_remove_'.$i]) ) continue;
	$tmp[] = $item;
      }
    $this->SetItems($tmp);

    $this->RedirectContent($returnid);
  }


$products =& $this->GetModuleInstance('Products');    
$smarty->assign('carttotal',$this->GetTotal());
$smarty->assign('cartweight',$this->GetTotalWeight());
$cartobjs = array();
$idx = 0;
$this->_calculate_cart_metadata(1); // will expand the cart if necessary
$config =& $gCms->GetConfig();
$items = $this->GetItems();
foreach( $items as $oneitem )
{
  // convert the cart item to a stdclass object using some trickery.
  $obj = cge_array::to_object($oneitem->to_array());

  $obj->file_location = $config['uploads_url'].'/'.$products->GetName().'/'.
    'product_'.$obj->product_id;
  $flds = $products->GetFieldDefsForProduct( $obj->product_id );
  $obj->flds = array();
  for( $i = 0; $i < count($flds); $i++ )
    {
      if( $flds[$i]->type == 'image' )
	{
	  $tmp = cms_join_path($config['uploads_path'],$products->GetName(),
			       'product_'.$obj->product_id,
			       'thumb_'.$flds[$i]->value);
	  if( @file_exists($tmp) )
	    {
	      $flds[$i]->thumbnail = 'thumb_'.$flds[$i]->value;
	    }
	}
      $obj->flds[$flds[$i]->name] = $obj;
    }

  if( $oneitem->get_source() == 'Products' )
    {
      $obj->categories = $products->GetCategoriesForProduct( $obj->product_id );
    }

  if( $oneitem->allow_quantity_adjust() )
    {
      // this item allows adjusting the quantity.
      $obj->quantity_box = $this->CreateInputText($id,'cart_quantity_'.$idx,   
						  $obj->quantity,3,3);
    }

  $obj->remove_box = $this->CreateInputCheckbox($id,'cart_remove_'.$idx,1);
						  
  $cartobjs[] = $obj;
  $idx++;
}
$smarty->assign('cartitems',$cartobjs);


// stop here
$smarty->assign('subtotal_text',$this->Lang('subtotal'));
$smarty->assign('pricetext',$this->Lang('price'));
$smarty->assign('quantitytext',$this->Lang('quantity'));
$smarty->assign('total_text',$this->Lang('total'));
$smarty->assign('total_weight_text',$this->Lang('total_weight'));
$smarty->assign('currencysymbol',$products->GetPreference('products_currencysymbol'));
$smarty->assign('weightunits',$products->GetPreference('products_weightunits'));
if( !isset($params['hideform']) )
  {
    $smarty->assign('formstart',$this->CGCreateFormStart($id,'viewcart',$destpage));
    $smarty->assign('formend',$this->CreateFormEnd());
    $smarty->assign('submit_name',$id.'cart_adjust');
    $smarty->assign('submit_text',$this->Lang('submit'));
  }

$thetemplate = 'viewcartform_'.$this->GetPreference('viewcartform_dflt');
if( isset($params['viewcarttemplate'] ) )
  {
    $thetemplate = 'viewcartform_'.$params['viewcarttemplate'];
  }
echo $this->ProcessTemplateFromDatabase($thetemplate);

// EOF
?>