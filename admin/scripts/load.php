<?php

ini_set('display_errors', 1);

define('ABSPATH', __DIR__);
define('ADMIN_PATH', ABSPATH. '/admin');
define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/scripts');

session_start();

require_once ABSPATH.'/getPageInfo.php';
require_once ABSPATH.'/update_page.php';
require_once ABSPATH.'/connect.php';
require_once ABSPATH.'/createuser.php';
require_once ABSPATH.'/deleteuser.php';
require_once ABSPATH.'/edit_account.php';
require_once ABSPATH.'/editsite.php';
require_once ABSPATH.'/editusers.php';
require_once ABSPATH.'/logged_in_logout.php';
require_once ABSPATH.'/login.php';
require_once ABSPATH.'/redirect.php';
require_once ABSPATH.'/uploadfiles.php';
require_once ABSPATH.'/user_connect.php';
require_once ABSPATH.'/user.php';

?>
