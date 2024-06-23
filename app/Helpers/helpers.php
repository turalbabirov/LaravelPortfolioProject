<?php

use Carbon\Carbon;

if (! function_exists('formatDate')) {
    function formatDate($date)
    {
        return Carbon::parse($date)->format('j F Y');
    }
}

if (! function_exists('freelanceStatus')) {
    function freelanceStatus($freelance)
    {
        return $freelance ? 'Available' : 'Not Available';
    }
}

if (! function_exists('sequentialProgressBar')) {
    function sequentialProgressBar()
    {
        static $colorIndex = 0;

        // Bootstrap arka plan renkleri listesi
        $bgColors = [
            'bg-info', 'bg-success', 'bg-warning', 'bg-danger', 'bg-secondary',
             'bg-light', 'bg-dark', 'bg-primary'
        ];

        // Mevcut renkü
        $color = $bgColors[$colorIndex];

        // Bir sonraki renkün indeksini güncelle
        $colorIndex = ($colorIndex + 1) % count($bgColors);

        // HTML içeriği oluşturma
        $html = '<div class="progress">';
        $html .= '<div class="progress-bar ' . $color . '" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>';
        $html .= '</div>';

        return $html;
    }
}

if (!function_exists('getYilFromTarih')) {
    function getYilFromTarih($tarih)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $tarih)->year;
    }
}
