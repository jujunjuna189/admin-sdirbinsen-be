<?php

function recommendItems($model, $comparingColumns, $id, $limit)
{
    $item = $model::find($id);

    if (!$item) {
        return null;
    }

    $comparingValues = [];
    foreach ($comparingColumns as $column) {
        $comparingValues[] = $item->$column;
    }

    $query = $model::where('id', '!=', $id);

    foreach ($comparingColumns as $column) {
        $query->orderByRaw("($column = ?) DESC", [$item->$column]);
    }

    $recommendedItems = $query->limit($limit)->get();

    return $recommendedItems;
}

// How to use
// $comparingColumns = ['title', 'category', 'description'];
// $materialRecommended = recommendItems(Materials::class, $comparingColumns, $id, $limit);
