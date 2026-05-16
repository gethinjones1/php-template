<?php

namespace gethin;

class Average
{
    /**
     * Calculate the mean average
     * @param array<int, Number> $numbers Array of numbers
     * @return float Mean average
     */
    public function mean(array $numbers): float
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Calculate the median average
     * @param array<int, Number> $numbers Array of numbers
     * @return float|int Median average
     */
    public function median(array $numbers): float|int
    {
        sort($numbers);
        $size = count($numbers);

        if($size % 2 && array_key_exists(intval($size / 2), $numbers)) {
           return floatval($numbers[intval($size / 2)]);
        }
        
        return $this->mean(
            array_slice($numbers, intval($size / 2) - 1, 2)
        );
    }
}
