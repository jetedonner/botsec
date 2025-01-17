# botsec - Deny unwanted search-bots
 A PHP script for denying and redirecting unwanted search bots which may be causing a huge traffic on your website. You may use, copy, amend and redistribute this PHP script in all your projects whether it's personal or commercial. The script is licensed under [MIT license](https://opensource.org/license/mit){:target="_blank" rel="noopener"} and freely available for everyone.

This is an example usage of the "botsec.php" script. It'll redirect you to https://google.com if the user-agent of the request is in the array to check.

## Source on GitHub
- [botsec on GitHub](https://github.com/kimhauser/botsec)

## Implementation of the script
* Open the file **botsec.php** and amend the array **$agentsToDeny** in the script with your own search-bots you want to deny
* Also change the **$redirectLocation** variable to a location you want the bots to be redirected to if needed
* Upload or place the script to your webserver where your root or main index.php file (or any other script you want the function to apply) is. 
* Inlcude the botsec.php file like so:

```php
<?php
	require("botsec.php");
?>
```
* That's it. Every request to the website including the **botsec.php** script from a user-agent which is in the **$agentsToDeny** array is now beeing redirected to the URL stated in the **$redirectLocation** variable

## Testing the script
You can test the botsec.php script with your own User-Agents like so:

### Setup BotSec Script
1. Copy the files to a directory of your choice
2. Amend the config.php file and:
	1. Set whether to load agents2ignore from URL or botsec.def.php
	2. Amend the User-Agents array $agentsToDeny in botsec.def.php or at URL-File with you own User-Agents
3. Include botsec.php in your index.php or other startup PHP-scripts that will be loaded for the requests in question

### Test BotSec locally
1. Goto the directory containing the files in a terminal
2. Execute "php -S 127.0.0.1:8888" in the terminal
3. Open the address "127.0.0.1:8888" with your Webbrowser of choice
4. Now you should see the success message
5. With Google Chrome you can amend the User-Agent for the Request like so
	1. Open the developer console of Google Chrome with CMD+Option+J
	2. In the developer console click the three dots in the upper right corner
	3. Click on "More Tools" > "Network Conditions"
	4. In the bottom panel you should see the User-Agent and you can chnge it

## Version history of **BotSec**
- 0.0.1 - 2024-07-29<br>Initial version with user-agents for personal usage
- 0.0.2 - 2024-08-03<br>Exracted user-agent array from **botsec.php** into **botsec.def.php** file for easier Update. Extended demo index.php script (Styling / Layout, Github-Link, Version history)
- 0.0.3 - 2024-08-05<br>Added ability to load user-agents from URL / file like https://server.com/bots2ignore.txt for easier Update
