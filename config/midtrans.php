<?php
return
 [
    'server_key' => env('MIDTRANS_KEY_SERVER'),
    'client_key' => env('MIDTRANS_KEY_CLIENT'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
 ];
?>