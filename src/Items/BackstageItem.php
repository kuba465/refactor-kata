<?php

namespace App\Items;

use App\Items\Abstracts\AbstractItem;

final class BackstageItem extends AbstractItem
{
    protected $increase = true;
    private $daysConditions = [10, 5];

    public function updateQuality(bool $updateQualityTwice = true): void
    {
        if ($this->sellIn < 0) {
            $this->quality = 0;
            return;
        }

        parent::updateQuality(false);
        foreach ($this->daysConditions as $daysCondition) {
            if ($this->sellIn < $daysCondition) {
                parent::updateQuality(false);
            }
        }
    }
}