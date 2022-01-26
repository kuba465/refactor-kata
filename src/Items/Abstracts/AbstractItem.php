<?php

namespace App\Items\Abstracts;

abstract class AbstractItem
{
    public $name;
    public $sell_in;
    public $quality;
    protected $maxQuality = 50;
    protected $increase = false;

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function updateQuality(bool $updateQualityTwice = true): void
    {
        if ($this->quality > 0 && !$this->increase) {
            $this->quality--;
        } elseif ($this->quality < $this->maxQuality && $this->increase) {
            $this->quality++;
        }
        
        if ($this->sell_in < 0 && $updateQualityTwice) {
            $this->updateQuality(false);
        }
    }

    public function updateSellIn(): void
    {
        $this->sell_in--;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}