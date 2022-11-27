<?php

$environment = false;
$api_url = $environment ?
'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

$server_key = $environment ?
'' : 'SB-Mid-server-IxqUS-6FtPDOli9YRw5_20XV';

?>