<?php
/* --------------------------------------------------------------------

  Chevereto
  http://chevereto.com/

  @version	2.6.0
  @author	Rodolfo Berríos A. <http://rodolfoberrios.com/>
			<inbox@rodolfoberrios.com>

  Copyright (c) Rodolfo Berrios <inbox@rodolfoberrios.com>
  
  Licensed under the MIT license
  http://opensource.org/licenses/MIT

  --------------------------------------------------------------------- */

define('access', 'admin');
define('SKIP_MAINTENANCE', true);

/*** Load Chevereto ***/
if(!@include_once('../includes/chevereto.php')) die('Can\'t find includes/chevereto.php');

?>