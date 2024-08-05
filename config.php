<?php
/**
 * @package    Web-Security
 *
 * @copyright  (C) 1991 - 2024 DaVe Inc. <https://kimhauser.ch>
 * @license    MIT License <https://opensource.org/license/mit>
 */

$redirectLocation = "https://www.google.com/";
$agent = "NOTSET";

$loadFromURL = true;

// $urlBots2ignore = 'https://botsec.kimhauser.ch/bots2ignore.txt';
$urlBots2ignore = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]/bots2ignore.txt";
$botsecDefinitionScript = "botsec.def.php";

if(!$loadFromURL){
   require($botsecDefinitionScript);
}


?>