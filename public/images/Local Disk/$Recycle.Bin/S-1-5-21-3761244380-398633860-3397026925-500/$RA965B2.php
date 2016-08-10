<?php
/**
 * Get an api_key and secret from facebook and fill in this content.
 * save the file to app/Config/facebook.php
 */
return  array(
    'gws_server' => env('GWS_SERVER'),
    'gws_port' => env('GWS_PORT'),
    'app_id' => env('GWS_APP_ID'),
    'auth_key' => env('GWS_AUTH_KEY'),
    'timeout' => 3600,
    'private_key_file' => env('GWS_PRIVATE_KEY'),
    'clientIp' => env('GWS_CLIENT_IP')
);