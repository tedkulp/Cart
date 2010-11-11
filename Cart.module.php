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


$cgextensions = cms_join_path($gCms->config['root_path'],'modules',
			      'CGEcommerceBase','CGEcommerceBase.module.php');
if( !is_readable( $cgextensions ) )
{
  echo '<h1><font color="red">ERROR: The CGEcommerceBase module could not be found.</font></h1>';
  return;
}
require_once($cgextensions);

class Cart extends CGEcommerceBase
{
  private $_items;
  private $_calculated;
  private $_subtotal;
  private $_weight;
  private $_numitems;


  /*---------------------------------------------------------
   Cart()
   contstuctor
   ---------------------------------------------------------*/
  public function __construct()
  {
    parent::__construct();

    $this->_items = array();
    $this->_calculated = 0;
    $this->_subtotal = 0;
    $this->_weight = 0;
    $this->_numitems = 0;
  }
  

  /*---------------------------------------------------------
   GetName()
   ---------------------------------------------------------*/
  public function GetName()
  {
    return 'Cart';
  }


  /*---------------------------------------------------------
   GetFriendlyName()
   ---------------------------------------------------------*/
  public function GetFriendlyName()
  {
    return $this->Lang('friendlyname');
  }

	
  /*---------------------------------------------------------
   GetVersion()
   ---------------------------------------------------------*/
  public function GetVersion()
  {
    return '1.7.3';
  }


  /*---------------------------------------------------------
   GetHelp()
   ---------------------------------------------------------*/
  public function GetHelp()
  {
    return $this->Lang('help');
  }


  /*---------------------------------------------------------
   GetAuthor()
   ---------------------------------------------------------*/
  public function GetAuthor()
  {
    return 'calguy1000';
  }


  /*---------------------------------------------------------
   GetAuthorEmail()
   ---------------------------------------------------------*/
  public function GetAuthorEmail()
  {
    return 'calguy1000@cmsmadesimple.org';
  }


  /*---------------------------------------------------------
   GetChangeLog()
   ---------------------------------------------------------*/
  public function GetChangeLog()
  {
    return @file_get_contents(dirname(__FILE__).'/changelog.inc');
  }
  
  /*---------------------------------------------------------
   IsPluginModule()
   ---------------------------------------------------------*/
  public function IsPluginModule()
  {
    return true;
  }


  /*---------------------------------------------------------
   HasAdmin()
   ---------------------------------------------------------*/
  public function HasAdmin()
  {
    return true;
  }


  /*---------------------------------------------------------
   GetAdminSection()
   ---------------------------------------------------------*/
  public function GetAdminSection()
  {
    global $CMS_VERSION;
    if( version_compare($CMS_VERSION,'1.8','<') ) return 'extensions';
    return 'ecommerce';
  }


  /*---------------------------------------------------------
   GetAdminDescription()
   ---------------------------------------------------------*/
  public function GetAdminDescription()
  {
    return $this->Lang('moddescription');
  }


  /*---------------------------------------------------------
   VisibleToAdminUser()
   ---------------------------------------------------------*/
  public function VisibleToAdminUser()
  {
    return $this->CheckPermission('Modify Templates') ||
      $this->CheckPermission('Modify Site Preferences');
  }


  /*---------------------------------------------------------
   GetDependencies()
   ---------------------------------------------------------*/
  public function GetDependencies()
  {
    return array('CGExtensions'=>'1.19',
		 'CGEcommerceBase'=>'1.2',
		 'Products'=>'2.8.3');
  }


  /*---------------------------------------------------------
   AllowAutoInstall()
   ---------------------------------------------------------*/
  public function AllowAutoInstall()
  {
	return FALSE;
  }


  /*---------------------------------------------------------
   AllowAutoUpgrade()
   ---------------------------------------------------------*/
  public function AllowAutoUpgrade()
  {
	return FALSE;
  }


  /*---------------------------------------------------------
   MinimumCMSVersion()
   ---------------------------------------------------------*/
  public function MinimumCMSVersion()
  {
    return "1.7.1";
  }
	
	
  /*---------------------------------------------------------
   SetParameters()
   ---------------------------------------------------------*/
  public function SetParameters()
  {
    $this->RegisterModulePlugin();
    $this->RestrictUnknownParams();

    $this->CreateParameter('addtocarttemplate','',$this->Lang('help_addtocarttemplate'));
    $this->SetParameterType('addtocarttemplate',CLEAN_STRING);

    $this->CreateParameter('mycarttemplate','',$this->Lang('help_mycarttemplate'));
    $this->SetParameterType('mycarttemplate',CLEAN_STRING);

    $this->CreateParameter('supplier','Products',$this->Lang('help_supplier'));
    $this->SetParameterType('supplier',CLEAN_STRING);

    $this->CreateParameter('product','',$this->Lang('help_product'));
    $this->SetParameterType('product',CLEAN_INT);

    $this->CreateParameter('inline','0',$this->Lang('help_inline'));
    $this->SetParameterType('inline',CLEAN_INT);

    $this->CreateParameter('viewcarttemplate','',$this->Lang('help_viewcarttemplate'));
    $this->SetParameterType('viewcarttemplate',CLEAN_STRING);

    $this->CreateParameter('viewcartpage','',$this->Lang('help_viewcartpage'));
    $this->SetParameterType('viewcartpage',CLEAN_STRING);

    $this->CreateParameter('hideform','0',$this->Lang('help_hideform'));
    $this->SetParameterType('hideform',CLEAN_INT);

    $this->CreateParameter('action','default',$this->Lang('help_action'));
    $this->SetParameterType(CLEAN_REGEXP.'/cart_.*/',CLEAN_STRING);
  }


  /*---------------------------------------------------------
   InstallPostMessage()
   ---------------------------------------------------------*/
  public function InstallPostMessage()
  {
    return $this->Lang('postinstall');
  }


  /*---------------------------------------------------------
   UninstallPostMessage()
   ---------------------------------------------------------*/
  public function UninstallPostMessage()
  {
    return $this->Lang('postuninstall');
  }


  /*---------------------------------------------------------
   UninstallPreMessage()
   ---------------------------------------------------------*/
  public function UninstallPreMessage()
  {
    return $this->Lang('really_uninstall');
  }	


  /*---------------------------------------------------------
   EraseCart()
   ---------------------------------------------------------*/
  public function EraseCart($adddata = '')
  {
    if( isset($_SESSION['cgcart']) )
      {
	cg_ecomm_cart::on_cart_adjusted('before',$adddata);
	unset($_SESSION['cgcart']);
	cg_ecomm_cart::on_cart_adjusted('after',$adddata);
      }
  }


  /*---------------------------------------------------------
   _calculate_cart_metadata()
   Calculate and store (temporarily) any cart metadata
   ---------------------------------------------------------*/
  protected function _calculate_cart_metadata($force = 0)
  {
    global $gCms;
    $smarty =& $gCms->GetSmarty();
    class_exists('cg_ecomm_productinfo'); // force the product info stuff to be loaded.

    if( $this->_calculated == 1 ) return;
    if( count($this->_items) == 0 || $force == 1)
      {
	$this->_expand_cart();
      }
    
    $products =& $this->GetModuleInstance('Products');
    $smarty->assign('currencysymbol',$products->GetPreference('products_currencysymbol'));
    $smarty->assign('weightunits',$products->GetPreference('products_weightunits'));

    $this->_weight = 0;
    $this->_subtotal = 0;
    $this->_numitems = 0;
    for( $i = 0; $i < count($this->_items); $i++ )
      {
	$obj =& $this->_items[$i];

	// calculate unit price, accounting for adjustments.
	$itemprice = $obj->get_base_price();
	foreach( $obj->get_attributes() as $oneattribobj )
	  {
	    $itemprice += $oneattribobj->adjustment;
	  }
	$this->SendEvent('SetUnitPrice', array('obj' => &$obj, 'item_price' => &$itemprice));
	$obj->set_unit_price($itemprice);

	// adjust metadata.
	$this->_subtotal += $obj->get_unit_price() * $obj->get_quantity();
	$this->_weight += $obj->get_unit_weight() * $obj->get_quantity();
	$this->_numitems += $obj->get_quantity();
      }

    $this->_calculated = 1;
  }


  /*---------------------------------------------------------
   GetBasketItems()
   Return the contents of the named basket.
   ---------------------------------------------------------*/
  public function &GetBasketItems($name,$feu_uid = -1)
  {
    return $this->GetItems();
  }


  /*---------------------------------------------------------
   GetBasketDetails()
   Return the shipping information for a particular basket.
   ---------------------------------------------------------*/
  public function GetBasketDetails($name,$feu_uid = -1)
  {
    $this->_calculate_cart_metadata();
    $result = array();
    $result['dest_first_name'] = '-- not entered --'; // what's this for?
    $result['subtotal'] = $this->_subtotal;
    $result['weight'] = $this->_weight;
    return $result;
  }


  /*---------------------------------------------------------
   GetBasketNames()
   Return an array of basket names
   ---------------------------------------------------------*/
  public function GetBasketNames($feu_uid='')
  {
    // this module does not support naming baskets.
    return array('shipping');
  }


  /*---------------------------------------------------------
   GetNumBaskets()
   Return the number of baskets currently created
   ---------------------------------------------------------*/
  public function GetNumBaskets()
  {
    // this module only supports one basket
    return 1;
  }


  /*---------------------------------------------------------
   GetNumItems()
   Return the number of entries in the cart (not including quantities)
   ---------------------------------------------------------*/
  public function GetNumItems()
  {
    $this->_calculate_cart_metadata();
    return count($this->_items);
  }


  /*---------------------------------------------------------
   GetSubTotal()
   Get the subtotal of the cost of all of the items in the cart
   taking into account quantities, and any price adjustments
   but not including any taxes or shipping costs.
   ---------------------------------------------------------*/
  public function GetTotal()
  {
    $this->_calculate_cart_metadata();
    return $this->_subtotal;
  }
  

  /*---------------------------------------------------------
   GetTotalWeight()
   get the total weight of the order
   unit of weight is determined by the products module
   ---------------------------------------------------------*/
  public function GetTotalWeight()
  {
    $this->_calculate_cart_metadata();
    return $this->_weight;
  }


  protected function _expand_cart()
  {
    $this->_items = array();
    if( !isset($_SESSION['cgcart']) ) return;

    $this->_items = unserialize(base64_decode($_SESSION['cgcart']));
    $this->_calculated = 0;
    $this->_subtotal = 0;
    $this->_weight = 0;
    $this->_numitems = 0;
  }


  protected function _collapse_cart($items = array())
  {
    if( count($items) == 0 )
      {
	$items =& $this->_items;
      }

    $data = base64_encode(serialize($items));
    $_SESSION['cgcart'] = $data;
  }  


  // this should go in a base module class.
  public function AddCartItem(&$obj,$basket_name = '')
  {
    if( !$obj instanceof cg_ecomm_cartitem ) return FALSE;

    $this->_expand_cart();

    $res = cg_ecomm::check_cartitem_valid($this->_items,$obj);
    if( !$res ) return FALSE;
	
    // here we should check the policy on adding quantities or 
    // adding a new item.
    $added = false;
    for( $i = 0; $i < count($this->_items); $i++ )
      {
	$one =& $this->_items[$i];
	if( ($one->get_product_id() != $obj->get_product_id()) || 
	    ($obj->get_source() != $obj->get_source()) ) continue;
	if( count($one->get_attributes()) == 0 && count($obj->get_attributes()) == 0 )
	  {
	    // increase the quantity
	    $added = true;
	    $one->set_quantity($one->get_quantity()+$obj->get_quantity());
	    break;
	  }
      }
    if( !$added )
      {
	$this->_items[] = $obj;
      }
    
    $this->_calculated = 0;
    $this->_collapse_cart();
    
    // note this could be done by having a cart base class
    // or by letting the cg_ecomm stuff handle all the cart stuff
    cg_ecomm_cart::on_cart_item_added($obj);
    return TRUE;
  }


  // todo: remove me.
  protected function _add_cart_item($source,$product_id,$sku,$quantity,$sel_attributes = array())
  {
    if( !is_array($sel_attributes) ) return FALSE;
    if( count($sel_attributes) ) 
      {
	for( $i = 0; $i < count($sel_attributes); $i++ )
	  {
	    if( !is_object($sel_attributes[$i]) ) return FALSE;
	  }
      }

    // build the new cartitem object.
    // cart item object contains information about the product
    // and selected attributes, but does not contain all of the product information
    $obj = new cg_ecomm_cartitem($sku,$product_id,$quantity);
    $obj->set_attributes($sel_attributes);
    if( is_numeric($product_id) )
      {
	$product = cg_ecomm::get_product_info($source,$product_id);

	$obj->set_type($product->get_type());
	$obj->set_source($source);
	$obj->set_product_id($product_id);
	$obj->set_unit_weight($product->get_weight());
	$obj->set_base_price($product->get_price());
	$obj->set_summary(cg_ecomm::calculate_cartitem_summary($product,$sel_attributes));
	if( $tmp = $product->get_subscription() )
	  {
	    // we don't need to do this here
	    // could get subscription info from product later
	    // however if at some time we are going to allow the user to 
	    // select subscription options we would need to do something here anyways.
	    $obj->set_subscription($tmp);
	  }
      }

    // and add it.
    $res = $this->AddCartItem($obj);
    return $res;
  }


  public function &GetItems()
  {
    $this->_calculate_cart_metadata();
    return $this->_items;
  }


  public function SetItems($items)
  {
    if( is_array($items) )
      {
	cg_ecomm_cart::on_cart_adjusted('before');
	$this->_items = $items;
	$this->_calculated = 0;
	$this->_collapse_cart();
	cg_ecomm_cart::on_cart_adjusted('after');
      }
  }

  /*---------------------------------------------------------
   IsCartModule()
   ---------------------------------------------------------*/
  public function IsCartModule()
  {
    return true;
  }


  /*---------------------------------------------------------
   SupporsShippingInfo()
   ---------------------------------------------------------*/
  public function SupportsShippingInfo()
  {
    return FALSE;
  }


  /*---------------------------------------------------------
   SupporsShippingInfo()
   ---------------------------------------------------------*/
  public function get_addtocart_form($params)
  {
    @ob_start();
    $this->DoActionBase('default','test',$params);
    $tmp = @ob_get_contents();
    @ob_end_clean();
    return $tmp;
  }


} // class
