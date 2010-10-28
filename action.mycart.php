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
if( $viewcartpage != '' ) 
  {
    $returnid = $viewcartpage;
  }

// Expand the cart
$itemcount = 0;
$carttotal = 0;
$this->_expand_cart();
$items = $this->GetItems();
for( $i = 0; $i < count($items); $i++ )
  {
    $obj =& $items[$i];
    $itemcount += $obj->get_quantity();
    $carttotal += $obj->get_quantity() * $obj->get_unit_price();
  }


if( isset($params['cart_submit']) && $itemcount > 0)
  {
    $this->Redirect($id,'viewcart',$returnid,$params);
  }

$smarty->assign('pricetext',$this->Lang('price'));
$smarty->assign('cart_itemcount',$itemcount);
$smarty->assign('cart_totalprice',$carttotal);
$smarty->assign('carttotal',$carttotal);
$smarty->assign('numitemstext',$this->Lang('number_of_items'));
$smarty->assign('currency_symbol',cg_ecomm::get_currency_symbol());
$smarty->assign('weight_units',cg_ecomm::get_weight_units());
if( $itemcount > 0 ) {
  $smarty->assign('formstart',$this->CGCreateFormStart($id,'mycart',$returnid,$params));
  $smarty->assign('formend',$this->CreateFormEnd());
  $smarty->assign('submitname',$id.'cart_submit');
  $smarty->assign('checkouttext',$this->Lang('my_cart'));
}

$thetemplate = 'mycartform_'.$this->GetPreference('mycartform_dflt');
if( isset($params['mycarttemplate'] ) )
  {
    $thetemplate = 'mycartform_'.$params['mycarttemplate'];
  }
echo $this->ProcessTemplateFromDatabase($thetemplate);


// EOF
?>
