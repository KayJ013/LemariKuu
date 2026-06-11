<?php

$wardrobe = [
    [
        "nama" => "Orange T-Shirt",
        "gambar" => "images/top1.png",
        "category" => "tops",
        "color" => "warm",
        "style" => "casual",
        "has_edit" => true
    ],
    [
        "nama" => "Black Pants",
        "gambar" => "images/pants1.png",
        "category" => "bottoms",
        "color" => "neutral",
        "style" => "sporty",
        "has_edit" => false
    ],
    [
        "nama" => "Brown Hoodie",
        "gambar" => "images/hoodie1.png",
        "category" => "outerwears",
        "color" => "earth",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "nama" => "Blue Shirt",
        "gambar" => "images/shirt1.png",
        "category" => "tops",
        "color" => "cool",
        "style" => "formal",
        "has_edit" => false
    ],
    [
        "nama" => "Silver Watch",
        "gambar" => "images/watch1.png",
        "category" => "accessories",
        "color" => "neutral",
        "style" => "formal",
        "has_edit" => false
    ],
    [
        "nama" => "Gold Necklace",
        "gambar" => "images/necklace1.png",
        "category" => "accessories",
        "color" => "warm",
        "style" => "vintage",
        "has_edit" => false
    ],
    [
        "nama" => "Khaki Shorts",
        "gambar" => "images/pants2.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "nama" => "Navy Blazer",
        "gambar" => "images/blazer1.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "business",
        "has_edit" => false
    ],
    [
        "nama" => "Bomber Jacket",
        "gambar" => "images/jacket1.png",
        "category" => "outerwears",
        "color" => "neutral",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "nama" => "Denim Jacket",
        "gambar" => "images/jacket2.png",
        "category" => "outerwears",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "nama" => "Khaki Chinos",
        "gambar" => "images/pants4.png",
        "category" => "bottoms",
        "color" => "earth",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "nama" => "Blue Jeans",
        "gambar" => "images/pants3.png",
        "category" => "bottoms",
        "color" => "cool",
        "style" => "streetwear",
        "has_edit" => false
    ],
    [
        "nama" => "White T-Shirt",
        "gambar" => "images/top2.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => false
    ],
    [
        "nama" => "Black T-Shirt",
        "gambar" => "images/top3.png",
        "category" => "tops",
        "color" => "neutral",
        "style" => "casual",
        "has_edit" => false
    ],

];

echo json_encode($wardrobe, JSON_PRETTY_PRINT);
?>