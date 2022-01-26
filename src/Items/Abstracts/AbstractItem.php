<?php

namespace App\Items\Abstracts;

abstract class AbstractItem
{
    public $name;
    public $sellIn;
    public $quality;
    protected $maxQuality = 50;
    protected $increase = false;

    public function __construct(string $name, int $sellIn, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function updateQuality(bool $updateQualityTwice = true): void
    {
        if ($this->quality > 0 && !$this->increase) {
            $this->quality--;
        } elseif ($this->quality < $this->maxQuality && $this->increase) {
            $this->quality++;
        }
        
        if ($this->sellIn < 0 && $updateQualityTwice) {
            $this->updateQuality(false);
        }
    }

    public function updateSellIn(): void
    {
        $this->sellIn--;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }
}