<?php
/**
 * @package    Web-Security
 *
 * @copyright  (C) 1991 - 2024 DaVe Inc. <https://kimhauser.ch>
 * @license    MIT License <https://opensource.org/license/mit>
 */

require("config.php");

if(isset($_SERVER['HTTP_USER_AGENT'])){
   $agent = $_SERVER['HTTP_USER_AGENT'];
}

if($loadFromURL){
   $handle = fopen($urlBots2ignore, 'r');
   $lines = [];

   if ($handle) {
      $commentStarted = false;
       while (($line = fgets($handle)) !== false) {
            $line = trim($line);
            if (str_starts_with($line, "/*")) {
               $commentStarted = true;
            }else if ($commentStarted && str_starts_with($line, "*/")) {
               $commentStarted = false;
            }else if (!str_starts_with($line, "//") && !$commentStarted ) {
               $lines[] = $line;
            }
       }
       fclose($handle);
   }

   $agentsToDeny = $lines;
}
// print($agent);

if(in_array($agent, $agentsToDeny)){ //preg_match('/^Googlebot/i',$agent)){
   http_response_code(301);
   header("HTTP/1.1 302 Moved Temporary");
   header("Location: $redirectLocation");
   exit;
}
?>