<?php
require_once __DIR__ . '/../vendor/autoload.php';


use \App\Core\Core as Core;
use \App\Helpers\Format as Format;
use \App\Libs\Session as Session;
use \App\Libs\Database as Database;
use \App\Libs\Controller as Controller;

include_once __DIR__ . "/../app/Configs/config.php";
include_once __DIR__ . "/../app/Configs/database.php";
include "../app/Helpers/redirect.php";
include "../app/Helpers/url.php";
include "../app/Helpers/assets.php";
include "../app/Helpers/dd.php";
include "../app/Helpers/flash_session.php";
$core = Session::init();
$core = new Core();
