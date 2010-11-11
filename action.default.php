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
// NOTE: CAUTION AT THIS TIME THIS ACTION ASSUMES THE PRODUCTS MODULE IS BEING USED.

if( !isset($params['product']) )
  {
    echo $this->DisplayErrors($this->Lang('error_missingparam','product'));
    return;
  }
$product_id = (int)$params['product'];
if( $product_id <= 0 )
  {
    echo $this->DisplayErrorMessage($this->Lang('error_missingparam','product'));
    return;
  }

// Now see if we can find the product
$supplier_mod = 'Products';
if( isset($params['supplier']) )
  {
    $supplier_mod = trim($params['supplier']);
  }
$product = cg_ecomm::get_product_info($supplier_mod,$product_id);
if( !$product )
  {
    echo $this->DisplayErrorMessage($this->Lang('error_nosuchproduct',$product_id));
    return;
  }
$session_obj = new cge_session($this->GetName().'_add');

$inline = false;
if (isset($params['inline']) && $params['inline'] == '1')
	$inline = true;

// $attribset_list = '';
// if( isset($product['attributes']) )
//   {
//     $attribset_list = $product['attributes'];
//   }

if( isset($params['cart_submit']) )
  {
    $quantity = 1;
    if( isset($params['cart_quantity']) )
      {
	$quantity = (int)$params['cart_quantity'];
      }
    if( $quantity > 0 )
      {
	// Expand the cart from the session
	$this->_expand_cart();

	$attribs = array();
	foreach( $params as $onekey => $onevalue )
	  {
	    if( preg_match('/^cart_attrib_/',$onekey) && $product->count_attributes() )
	      {
		// found an attribute.
		$attribset_id = (int)substr($onekey,strlen('cart_attrib_'));
		$attribute = $product->get_attr_by_id($attribset_id);
		$option = $attribute->get_option_by_id($onevalue);
		$obj = new StdClass;
		$obj->attribset = $attribset_id;
		$obj->attrname = $attribute->get_name();
		$obj->name = $option->get_text();
		$obj->adjustment = $option->get_adjustment();
		$obj->sku = $option->get_sku();

		$attribs[] = $obj;
	      }
	  }

	$sku = $product->get_sku();
	if( count($attribs) == 1 && $attribs[0]->sku != '' )
	  {
	    $sku = $attribs[0]->sku;
	  }

	// Add the item
	$res = $this->_add_cart_item($supplier_mod,$product_id,
				     $sku,$quantity,$attribs);
	
	// And put it back into the cart
	$this->_collapse_cart();
      }

    // handle an error adding something to the cart.
    if( !$res )
      {
	// there was an error
	// so we'll set a small session variable
	// and redirect back to where we started
	$session_obj->put($id.'error','addtocart');
	if( isset($params['cart_returnto']) )
	  {
	    redirect($params['cart_returnto']);
	  }
      }

    $destid = $this->GetPreference('addtocart_destpage',-1);
    if( $destid == -1 )
      {
	$destid = $returnid;
      }
    $this->RedirectContent($destid);
  }


$smarty->clear_assign('cart_error');
if( $session_obj->exists($id.'error') )
  {
    $err = $session_obj->get($id.'error');
    $session_obj->clear($id.'error');
    
    if( $err == 'addtocart' )
      {
	$smarty->assign('cart_error',$this->Lang('error_cartpolicy_additem'));
      }
  }
$smarty->assign('formstart',
		$this->CGCreateFormStart($id,'default',$returnid,
					 array('product'=>$product_id,
					       'cart_returnto'=>cge_url::current_url()), $inline));
$smarty->assign('formend',$this->CreateFormEnd());
$smarty->assign('quantityname',$id.'cart_quantity');
$smarty->assign('submitname',$id.'cart_submit');
$smarty->assign('addtocarttext',$this->Lang('add_to_cart'));

// Get the list of attributes for this cart
if( $product->count_attributes() )
  {
    // there are attributes
    // so create an array of pulldowns, etc for them
    // that can be displayed in the template
    
    $attrib_array = array();
    for( $attr_num = 0; $attr_num < $product->count_attributes(); $attr_num++ )
      {
	$attrib = $product->get_attr_by_idx($attr_num);

	$obj = new StdClass;
	$obj->name = $attrib->get_name();
	$obj->id = $attrib->get_id();
	$tmp = $attrib->get_dropdown_options();
	$tmp = @array_flip($tmp);
	$obj->control = $this->CreateInputDropdown($id,'cart_attrib_'.$attrib->get_id(),$tmp);
	$attrib_array[] = $obj;
      }

    $smarty->assign('attributes',$attrib_array);
    $smarty->assign('attribute_count',count($attrib_array));
  }

$thetemplate = 'addtocart_'.$this->GetPreference('addtocart_dflt');
if( isset($params['addtocarttemplate'] ) )
  {
    $thetemplate = 'addtocart_'.$params['addtocarttemplate'];
  }
echo $this->ProcessTemplateFromDatabase($thetemplate);

$smarty->assign('attribute_count',0);
// EOF
?>