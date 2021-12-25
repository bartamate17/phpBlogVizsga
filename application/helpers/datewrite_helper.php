<?php

if (!function_exists('month')) {

    function month($monthDate)
    {
        if ($monthDate >= 1 && $monthDate <= 12) {
            $monthDateArray = [
                'Január',
                'Február',
                'Március',
                'Április',
                'Május',
                'Június',
                'Július',
                'Augusztus',
                'Szeptember',
                'Október',
                'November',
                'December'
            ];

            return $monthDateArray[$monthDate - 1];
        }
        return '-';
    }
}
