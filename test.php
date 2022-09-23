<?php
ob_start();
echo phpinfo();
$info = ob_end_clean();
?>