<?php

return array(
    'product/([0-9]+)'  => 'product/view/$1', // Роут для товаров. контроллер product акшен product
    ''                  => 'site/index', //вызов контроллера site акшена index
);