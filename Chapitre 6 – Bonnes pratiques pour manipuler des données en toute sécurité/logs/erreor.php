<?php
file_put_contents('logs/errors.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
?>