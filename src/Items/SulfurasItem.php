<?php

namespace App\Items;

use App\Items\Abstracts\AbstractItem;

final class SulfurasItem extends AbstractItem
{
    public function updateQuality(bool $updateQualityTwice = true): void
    {
        $this->quality = 80;
    }

    public function updateSellIn(): void
    {
    }
}