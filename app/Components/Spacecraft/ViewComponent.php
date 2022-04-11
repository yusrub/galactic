<?php

namespace App\Components\Spacecraft;

use App\Components\ComponentArrayInterface;
use App\Models\Spacecraft;

class ViewComponent implements ComponentArrayInterface
{
    private Spacecraft $spacecraft;

    /**
     * @param Spacecraft $spacecraft
     */
    public function __construct(Spacecraft $spacecraft)
    {
        $this->spacecraft = $spacecraft;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->spacecraft->id,
            'name' => $this->spacecraft->name,
            'class' => $this->spacecraft->class,
            'crew' => $this->spacecraft->crew,
            'image' => $this->spacecraft->image,
            'value' => $this->spacecraft->value,
            'status' => $this->spacecraft->status,
            'armament' => $this->spacecraft->armament,
        ];
    }
}