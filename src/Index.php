<?php

namespace Ry\RyWp;

/**
 * @className ； Index
 * @Auth : 麋鹿@ANNIANZU
 * @Email : 3258581571
 * @date ；2022/04/15 10:40
 */
class Index
{
    public function index()
    {
        return 'wp';
    }
}

$app  = new Index();
echo $app->index();