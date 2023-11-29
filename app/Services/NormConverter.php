<?php

namespace App\Services;

use function implode;
use function str_split;

class NormConverter {
    public function normConverter($norm): string
    {
        $formattedNumber = str_pad($norm, 8, '0', STR_PAD_LEFT);
        return vsprintf('%s-%s-%s-%s', str_split($formattedNumber, 2));
    }
}
