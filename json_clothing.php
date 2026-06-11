<?php

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
        "has_edit" => false
    ],
    [
        "name" => "Brown Hoodie",
        "image" => "images/hoodie1.png",
        "category" => "outerwears",
        "color" => "earth",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "name" => "Blue Shirt",
        "image" => "images/shirt1.png",
        "category" => "tops",
        "color" => "cool",
        "style" => "formal",
        "has_edit" => false
    ],
    [
        "name" => "Silver Watch",
        "image" => "images/watch1.png",
        "category" => "accessories",
        "color" => "neutral",
        "style" => "formal",
        "has_edit" => false
    ],
    [
        "name" => "Gold Necklace",
        "image" => "images/necklace1.png",
        "category" => "accessories",
        "color" => "warm",
        "style" => "vintage",
        "has_edit" => false
    ],
    [
        "name" => "Khaki Shorts",
        "image" => "images/pants2.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "name" => "Navy Blazer",
        "image" => "images/blazer1.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "business",
        "has_edit" => false
    ],
    [
        "name" => "Bomber Jacket",
        "image" => "images/jacket1.png",
        "category" => "outerwears",
        "color" => "neutral",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "name" => "Denim Jacket",
        "image" => "images/jacket2.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "name" => "Khaki Chinos",
        "image" => "images/pants4.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "name" => "Blue Jeans",
        "image" => "images/pants3.png",
        "category" => "bottoms",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "name" => "White T-Shirt",
        "image" => "images/top2.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "name" => "Black T-Shirt",
        "image" => "images/top3.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "name" => "White Shirt",
        "image" => "images/shirt2.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "formal",
        "has_edit" => false
    ],
    [
        "name" => "Black Hat",
        "image" => "images/hat1.png",
        "category" => "accessories",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => false
    ],

];

echo json_encode($wardrobe, JSON_PRETTY_PRINT);
?>