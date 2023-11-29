<?php

return [
    'enabled' => env('VITE_ENABLED', false),
    'vite_bin' => env('VITE_BIN', base_path('node_modules/vite/bin/vite')),
    'manifest_path' => public_path('mix-manifest.json'),
    'out_path' => public_path(),
    'assets_path' => public_path(),
    'host' => env('VITE_HOST', 'localhost'),
    'port' => env('VITE_PORT', 3000),
    'open' => env('VITE_OPEN', false),
];