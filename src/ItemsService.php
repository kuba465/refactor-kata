<?php

namespace App;

use App\Items\Abstracts\AbstractItem;
use App\Items\AgedBrieItem;
use App\Items\BackstageItem;
use App\Items\BasicItem;
use App\Items\SulfurasItem;

class ItemsService
{
    public function getItem(string $name, int $sellIn, int $quality): AbstractItem
    {
        switch ($name) {
            case 'Sulfuras, Hand of Ragnaros':
                return new SulfurasItem($name, $sellIn, $quality);
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new BackstageItem($name, $sellIn, $quality);
            case 'Aged Brie':
                return new AgedBrieItem($name, $sellIn, $quality);
            default:
                return new BasicItem($name, $sellIn, $quality);
        }
    }
}