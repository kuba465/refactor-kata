<?php

namespace App\Items;

use App\Items\Abstracts\AbstractItem;

final class BackstageItem extends AbstractItem
{
    protected $increase = true;
    private $daysConditions = [10, 5];

    public function updateQuality(bool $updateQualityTwice = true): void
    {
        if ($this->sell_in < 0) {
            $this->quality = 0;
        } else {
            parent::updateQuality(false);
            foreach ($this->daysConditions as $daysCondition) {
                if ($this->sell_in < $daysCondition) {
                    parent::updateQuality(false);
                }
            }
        }
    }
}