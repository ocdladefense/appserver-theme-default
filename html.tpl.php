<?php

// This is the template for the default theme which happens to be for OCDLA.....


 $user = current_user();
 $loginMessage = !$user->is_logged_in() ? "Logged in as Guest" : "Hello {$user->getFirstName()}";
 $profileUrl = !$user->is_logged_in() ? "#" : "/user/profile";
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="OCDLA" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="format-detection" content="telephone=no" />

    <link rel="apple-touch-icon" sizes="180x180" href="/pwa-icons-180.png" type="image/png" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="icons" type="image/png" sizes="192x192" href="/pwa-icons-192.png" />
    <link rel="apple-touch-startup-image" href="/apple-launch-750x1334.png" />
    <meta name="theme-color" content="#c4a12e" />
    <link type="text/css" href="/pwa-install.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/c2278a45b9.js" crossorigin="anonymous">
    </script>
    <script src="/pwa-homescreen.js">
    </script>



    <title>OCDLA - Legal Tools & Research</title>

    <?php echo $styles; ?>

    <?php echo $scripts; ?>

</head>

<?php print $content; ?>

</html>