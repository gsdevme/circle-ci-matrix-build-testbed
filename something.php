<?php

echo 'Symfony Env: ' . (getenv('SYMFONY_ENV') ?: 'not set') . PHP_EOL; 
echo 'PHP Version: ' . phpversion() . PHP_EOL;

return 0;
