<?php

function normalizeRow(array $row): array
{
    $newRow = [];
    foreach ($row as $key => $value) {
        // convert to camelCase
        $key = str_replace('_', ' ', $key);
        $key = ucwords($key);
        $key = str_replace(' ', '', $key);
        $key = lcfirst($key);
        $newRow[$key] = $value;


        // date format for key ending with_At
        if (str_ends_with($key, 'At') && $value !== null) {
            $date = new DateTime($value);
            $newRow[$key] = $date;
        }

        // date format key beginning with is or has
        if (str_starts_with($key, 'is') || str_starts_with($key, 'has')) {
            $newRow[$key] = (bool)$value;
        }
    }
    return $newRow;
}

echo '<pre>';
var_dump(normalizeRow([
    'id' => '5',
    'name' => 'toto',
    'author_id' => '3',
    'created_at' => '2025-10-06 09:45:00',
    'updated_at' => null,
    'is_published' => '1',
    'has_image' => '0',
    'is_duplicate' => null,
]));
echo '</pre>';
