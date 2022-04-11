<?php

namespace App\Components\Spacecraft;

use App\Components\ComponentArrayInterface;
use Illuminate\Support\Collection;

class ListComponent implements ComponentArrayInterface
{
    private Collection $spacecrafts;

    /**
     * @param Collection $spacecrafts
     */
    public function __construct(Collection $spacecrafts)
    {
        $this->spacecrafts = $spacecrafts;
    }


    public function toArray(): array
    {
        $data = ['data' => []];
        foreach ($this->spacecrafts as $spacecraft) {
            $data['data'][] = [
                'id' => $spacecraft->id,
                'name' => $spacecraft->name,
                'status' => $spacecraft->status,
            ];
        }
        return $data;
    }
}