<?php

namespace App;

use App\Items\Abstracts\AbstractItem;

final class GildedRose
{
    public function updateQuality(AbstractItem $item)
    {
        $item->updateSellIn();
        $item->updateQuality();
    }
}