# ![Logo](https://i.imgur.com/N5LMocb.png) Insta Responder ![Logo2](https://i.imgur.com/62O2XaY.png)
Instagram Direct Message Auto Responder with DialogFlow!
## What does InstaResponder do?
Main features:
- Auto reply DMs.
- Connect your IG inbox with DialogFlow.
And much more to develop...
## Installation
### Using Composer
```sh
composer require mgp25/instagram-php
composer require juanmicl/dummiesflow
```
### I don't have Composer
You can download it [here](https://getcomposer.org/download/).
#### _Warning about moving data to a different server_
_Composer checks your system's capabilities and selects libraries based on your **current** machine (where you are running the `composer` command). So if you run Composer on machine `A` to install this library, it will check machine `A`'s capabilities and will install libraries appropriate for that machine (such as installing the PHP 7+ versions of various libraries). If you then move your whole installation to machine `B` instead, it **will not work** unless machine `B` has the **exact** same capabilities (same or higher PHP version and PHP extensions)! Therefore, you should **always** run the Composer-command on your intended target machine instead of your local machine._
## Config and Run
1º Open [core/config.php](https://github.com/juanmicl/InstaResponder/blob/master/core/config.php) and edit IG config.

2º fill "agentName", you can find it here:

![1](https://i.imgur.com/MxcgCAA.png)

*you need to enable "Web Demo" feature

3º Open your terminal/console and run
```sh
php bot.php
```
## Legal
This code is in no way affiliated with, authorized, maintained, sponsored or endorsed by Google or any of its affiliates or subsidiaries. This is an independent and unofficial API. Use at your own risk.

## Credits
Thanks to mgp25 for instagram-php api!
