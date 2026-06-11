<?php
// Set header agar browser tahu ini adalah file JSON murni
header('Content-Type: application/json');

$wardrobe = [
    [
        "name" => "Orange T-Shirt",
        "image" => "images/top1.png",
        "category" => "tops",
        "color" => "warm",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "name" => "Black Pants",
        "image" => "images/pants1.png",
        "category" => "bottoms",
        "color" => "neutral",
        "style" => "sporty",
        "has_edit" => true
    ],
    [
        "name" => "Brown Hoodie",
        "image" => "images/hoodie1.png",
        "category" => "outerwears",
        "color" => "earth",
        "style" => "streetwear",
        "has_edit" => true
    ],
    [
        "name" => "Blue Shirt",
        "image" => "images/shirt1.png",
        "category" => "tops",
        "color" => "cool",
        "style" => "formal",
        "has_edit" => true
    ],
    [
        "name" => "Silver Watch",
        "image" => "images/watch1.png",
        "category" => "accessories",
        "color" => "neutral",
        "style" => "formal",
        "has_edit" => true
    ],
    [
        "name" => "Gold Necklace",
        "image" => "images/necklace1.png",
        "category" => "accessories",
        "color" => "warm",
        "style" => "vintage",
        "has_edit" => true
    ],
    [
        "name" => "Khaki Shorts",
        "image" => "images/pants2.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "name" => "Navy Blazer",
        "image" => "images/blazer1.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "business",
        "has_edit" => true
    ],
    [
        "name" => "Bomber Jacket",
        "image" => "images/jacket1.png",
        "category" => "outerwears",
        "color" => "neutral",
        "style" => "streetwear",
        "has_edit" => true
    ],
    [
        "name" => "Denim Jacket",
        "image" => "images/jacket2.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => true
    ],
    [
        "name" => "Khaki Chinos",
        "image" => "images/pants4.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "name" => "Blue Jeans",
        "image" => "images/pants3.png",
        "category" => "bottoms",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => true
    ],
    [
        "name" => "White T-Shirt",
        "image" => "images/top2.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "name" => "Black T-Shirt",
        "image" => "images/top3.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "name" => "White Shirt",
        "image" => "images/shirt2.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "formal",
        "has_edit" => true
    ],
    [
        "name" => "Black Hat",
        "image" => "images/hat1.png",
        "category" => "accessories",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => true
    ]
];

echo json_encode($wardrobe, JSON_PRETTY_PRINT);
?>