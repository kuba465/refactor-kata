<?php

namespace App\Items;

use App\Items\Abstracts\AbstractItem;

final class BackstageItem extends AbstractItem
{
    protected $increase = true;
    private $daysConditions = [11, 6];

    public function updateQuality(): void
    {
        parent::updateQuality();
        foreach ($this->daysConditions as $daysCondition) {
            if ($this->sell_in < $daysCondition) {
                parent::updateQuality();
            }
        }
    }
}