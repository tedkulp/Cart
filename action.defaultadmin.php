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

echo $this->StartTabHeaders();
if( $this->CheckPermission('Modify Temmplates') )
  {
    echo $this->SetTabHeader('addtocart',$this->Lang('addtocart_templates'));
    echo $this->SetTabHeader('mycartform',$this->Lang('mycartform_templates'));
    echo $this->SetTabHeader('viewcartform',$this->Lang('viewcartform_templates'));
    echo $this->SetTabHeader('defaulttemplates',$this->Lang('default_templates'));
  }
if( $this->CheckPermission('Modify Site Preferences') )
  {
    echo $this->SetTabHeader('preferences',$this->Lang('preferences'));
  }
echo $this->EndTabHeaders();

echo $this->StartTabContent();
if( $this->CheckPermission('Modify Temmplates') )
  {
    echo $this->StartTab('addtocart');
    include(dirname(__FILE__).'/function.admin_addtocart_tab.php');
    echo $this->EndTab();

    echo $this->StartTab('mycartform');
    include(dirname(__FILE__).'/function.admin_mycartform_tab.php');
    echo $this->EndTab();

    echo $this->StartTab('viewcartform');
    include(dirname(__FILE__).'/function.admin_viewcartform_tab.php');
    echo $this->EndTab();

    echo $this->StartTab('defaulttemplates');
    include(dirname(__FILE__).'/function.admin_defaulttemplates_tab.php');
    echo $this->EndTab();
  }
if( $this->CheckPermission('Modify Site Preferences') )
  {
    echo $this->StartTab('preferences');
    include(dirname(__FILE__).'/function.admin_preferences_tab.php');
    echo $this->EndTab();
  }
echo $this->EndTabContent();
// EOF
?>