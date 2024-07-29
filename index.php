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
   <h1>SUCCESS - You are likely no bot, you may pass!</h1>
   <div style="border: 1px solid lightgrey; box-shadow: -5px 5px 5px lightgrey; border-radius: 5px; padding: 10px;">
      This is an example usage of the "botsec.php" script. It'll redirect you to <a href="<?= $redirectLocation ?>" target="_blank"><?= $redirectLocation ?></a> if the user-agent of the request is one of the following:
      <ul>
         <?php
            foreach ($agentsToDeny as $item) {
         ?>
            <li><?= $item ?></li>
         <?php
            }
         ?>
      </ul>
      <br>
      <h3>Testing the script</h3>
      You can test the <?= $botsecScript ?> script with your own User-Agents like so:
      <ol>
         <li>Copy the files to a directory of your choice</li>
         <li>Amend the User-Agents array $agentsToDeny in <?= $botsecScript ?> with you own</li>
         <li>Goto the directory containing the files in a terminal</li>
         <li>Execute "php -S 127.0.0.1:8888" in the terminal</li>
         <li>Open the address "127.0.0.1:8888" with your Webbrowser of choice</li>
         <li>Now you should see the success message</li>
         <li>With Google Chrome you can amend the User-Agent for the Request like so
            <ol>
               <li>Open the developer console of Google Chrome with CMD+Option+J</li>
               <li>In the developer console click the three dots in the upper right corner</li>
               <li>Click on "More Tools" > "Network Conditions"</li>
               <li>In the bottom panel you should see the User-Agent and you can chnge it</li>
            </ol>
         </li>

      </ol>
   </div>
   <footer style="padding: 10px;">
      &copy; 1991 - <?= date("Y") ?> by <a href="https://kimhauser.ch" target="_blank">DaVe inc.</a> (<a href="mailto:kim@kimhauser.ch">Kim David Hauser - kim@kimhauser.ch</a> - <a href="https://kimhauser.ch" target="_blank">kimhauser.ch</a>)
   </footer>
</body>
</html>