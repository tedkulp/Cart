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

# Setup default add to cart template
$fn = cms_join_path(dirname(__FILE__),'templates','orig_addtocart_template.tpl');
if( file_exists($fn) )
  {
    $template = file_get_contents( $fn );
    $this->SetPreference('addtocart_sysdefault_template',$template);
    $this->SetTemplate('addtocart_Sample',$template);
    $this->SetPreference('addtocart_dflt','Sample');
  }

# Setup default mycartform template
$fn = cms_join_path(dirname(__FILE__),'templates','orig_mycartform_template.tpl');
if( file_exists($fn) )
  {
    $template = file_get_contents( $fn );
    $this->SetPreference('mycartform_sysdefault_template',$template);
    $this->SetTemplate('mycartform_Sample',$template);
    $this->SetPreference('mycartform_dflt','Sample');
  }

#Setup default viewcartform template
$fn = cms_join_path(dirname(__FILE__),'templates','orig_viewcartform_template.tpl');
if( file_exists($fn) )
  {
    $template = file_get_contents( $fn );
    $this->SetPreference('viewcartform_sysdefault_template',$template);
    $this->SetTemplate('viewcartform_Sample',$template);
    $this->SetPreference('viewcartform_dflt','Sample');
  }


// EOF
?>