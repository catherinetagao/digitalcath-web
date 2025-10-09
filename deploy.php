<?php
$output = shell_exec('cd /home/u136544683/domains/balbuena.io/public_html/digitalcath-web && git pull origin main 2>&1 && php artisan migrate --force && php artisan config:cache');
echo "<pre>$output</pre>";
?>
