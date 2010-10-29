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

$current_version = $oldversion;
$dict = NewDataDictionary($db);
$taboptarray = array('mysql' => 'TYPE=MyISAM');


switch($current_version)
  {
  case '1.0':
  case '1.0.1':
  case '1.1':
    $newname = str_replace('.','_','upgrade_to_'.$this->GetVersion());

    // Add new default addtocart template
    $fn = cms_join_path(dirname(__FILE__),'templates','orig_addtocart_template.tpl');
    if( file_exists($fn) )
      {
	$template = file_get_contents( $fn );
	$this->SetTemplate('addtocart_'.$newname,$template);
	$this->SetPreference('addtocart_dflt',$newname);
      }

    // Add new default mycartform template
    $fn = cms_join_path(dirname(__FILE__),'templates','orig_mycartform_template.tpl');
    if( file_exists($fn) )
      {
	$template = file_get_contents( $fn );
	$this->SetTemplate('mycartform_'.$newname,$template);
	$this->SetPreference('mycartform_dflt',$newname);
      }

    // Add new default viewcartform template
    $fn = cms_join_path(dirname(__FILE__),'templates','orig_viewcartform_template.tpl');
    if( file_exists($fn) )
      {
	$template = file_get_contents( $fn );
	$this->SetTemplate('viewcartform_'.$newname,$template);
	$this->SetPreference('viewcartform_dflt',$newname);
      }

  case '1.3':
  case '1.3.1':
    // Setup product summary template
    $fn = cms_join_path(dirname(__FILE__),'templates','orig_product_summary_template.tpl');
    if( file_exists($fn) )
      {
	$template = file_get_contents($fn);
	$this->SetTemplate('productsummary',$template);
      }

  case '1.7.2':
	$this->CreateEvent('SetUnitPrice');

  }

// EOF
?>