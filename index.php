<?php
/**
 * @package    Web-Security
 *
 * @copyright  (C) 1991 - 2024 DaVe Inc. <https://kimhauser.ch>
 * @license    MIT License <https://opensource.org/license/mit>
 */
   $botsecScript = "botsec.php";
   require($botsecScript);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>BotSec Demo - Example usage of the <?= $botsecScript ?> script</title>
</head>
<body>
   <div style="border: 1px solid lightgrey; box-shadow: -5px 5px 5px lightgrey; border-radius: 5px; padding: 35px; margin: 35px; padding-top: 15px;">
      <center><h1>SUCCESS - You are likely no bot, you may pass!</h1></center>
      <hr>
      This is an example usage of the <strong>"<?= $botsecScript ?>"</strong> script. It'll redirect you to <strong><a href="<?= $redirectLocation ?>" target="_blank"><?= $redirectLocation ?></a></strong> if the user-agent of the request is in the array defined in the file called <strong>"<?= $botsecDefinitionScript ?>"</strong> or defined in the url / file <strong>"<?= $urlBots2ignore ?>"</strong> - depends on your setting in the <strong>config.php</strong> file - and so one of the following strings:
      <ul>
         <?php
            foreach ($agentsToDeny as $item) {
         ?>
            <li><?= $item ?></li>
         <?php
            }
         ?>
      </ul>
      <hr>
      <h3>Testing the script</h3>
      You can test the <?= $botsecScript ?> script with your own User-Agents like so:
      <h4>Setup the BotSec script:</h4>
      <ol>
         <li>Copy the files to a directory of your choice</li>
         <li>Amend the config.php file and:
            <ul>
               <li>Set whether to load agents2ignore from URL or <?= $botsecDefinitionScript ?></li>
               <li>Amend the <?= $botsecDefinitionScript ?> or the <?= $urlBots2ignore ?> with you own agents</li>
               <li>Set the URL to redirect request from ignored user agents to</li>
            </ul>
         </li>
         <li>Include <?= $botsecScript ?> in your <strong>index.php</strong> or other startup PHP-scripts that will be loaded for the requests in question</li>
         <!-- <li>Amend the User-Agents array $agentsToDeny in <?= $botsecDefinitionScript ?> with you own agents</li> -->
      </ol>
      <h4>Start Test-Server locally:</h4>
      <ol>
         <li>Goto the directory containing the files in a terminal</li>
         <li>Execute "php -S 127.0.0.1:8888" in the terminal</li>
         <li>Open the address "127.0.0.1:8888" with your Webbrowser of choice</li>
         <li>Now you should see the success message</li>
         <li>With Google Chrome you can amend the User-Agent for the Request like so
            <ol>
               <li>Open the developer console of Google Chrome with CMD+Option+J (macOS)</li>
               <li>In the developer console click the three dots in the upper right corner</li>
               <li>Click on "More Tools" > "Network Conditions"</li>
               <li>In the bottom panel you should see the User-Agent and you can change it to a custom agent</li>
            </ol>
         </li>
      </ol>
      <hr>
      <h3>Github repo of <strong>"<?= $botsecScript ?>"</strong> script</h3>
      <ul>
         <li><a href="https://github.com/jetedonner/botsec" target="_blank">https://github.com/jetedonner/botsec</a></li>
      </ul>
      <hr>
      <h3>Version history of <strong>BotSec</strong></h3>
      <ul>
         <li>0.0.1 - 2024-07-29<br>Initial version with user-agents for personal usage</li>
         <li>0.0.2 - 2024-08-03<br>Exracted user-agent array from <strong>"<?= $botsecScript ?>"</strong> into <strong>"<?= $botsecDefinitionScript ?>"</strong> file for easier Update. Extended demo index.php script (Styling / Layout, Github-Link, Version history)</li>
         <li>0.0.3 - 2024-08-05<br>Added ability to load user-agents from URL / file like <strong>"<?= $urlBots2ignore ?>"</strong> for easier Update.</li>
      </ul>
      <hr>
      <footer style="padding: 10px;">
         <center>
            &copy; 1991 - <?= date("Y") ?> by <a href="https://kimhauser.ch" target="_blank">DaVe inc.</a> (<a href="mailto:kim@kimhauser.ch">Kim David Hauser - kim@kimhauser.ch</a> - <a href="https://kimhauser.ch" target="_blank">kimhauser.ch</a>)
         </center>
      </footer>
   </div>
</body>
</html>