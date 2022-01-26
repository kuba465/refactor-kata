<?php

namespace App\Items\Abstracts;

use App\Items\Contracts\ItemInterface;

abstract class AbstractItem implements ItemInterface
{
    public $name;
    public $sell_in;
    public $quality;

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}