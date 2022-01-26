<?php

namespace App;

use App\Items\Abstracts\AbstractItem;
use App\Items\BasicItem;

class ItemsService
{
    public function getItem(string $name, int $sellIn, int $quality): AbstractItem
    {
        switch ($name) {
            default:
                return new BasicItem($name, $sellIn, $quality);
        }
    }
}