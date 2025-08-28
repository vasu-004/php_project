<?php
$products = [
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/399844/01/sv01/fnd/IND/fmt/png/Court-Shatter-Low-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/399844/02/sv01/fnd/IND/fmt/png/Court-Shatter-Low-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/399844/03/sv01/fnd/IND/fmt/png/Court-Shatter-Low-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/398846/01/sv01/fnd/IND/fmt/png/Speedcat-OG-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/311124/02/sv01/fnd/IND/fmt/png/Questblitz-Mid-Men's-Running-Shoes",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/311368/03/sv01/fnd/IND/fmt/png/Electron-2.0-Sport-Men's-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Court Shatter Low Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/401121/01/sv01/fnd/IND/fmt/png/Softride-Pro-24-V-Slides",
    "colors" => "6 COLORS",
    "name" => "Speedcat OG Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ],
  [
    "discount" => "-45%",
    "img" => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_350,h_350/global/402692/07/sv01/fnd/IND/fmt/png/Palermo-Sneakers",
    "colors" => "6 COLORS",
    "name" => "Palermo Sneakers",
    "price" => "₹3,299",
    "old_price" => "₹5,999"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUMA</title>
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body { margin: 0; font-family: Arial, sans-serif; background: #fff; color: #000; }
    .navbar { background: #000; color: #fff; display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; flex-wrap: wrap; }
    .navbar .logo { font-size: 22px; font-weight: bold; color: #fff; }
    .navbar ul { list-style: none; display: flex; gap: 20px; flex-wrap: wrap; padding: 0; margin: 10px 0 0; }
    .navbar ul li { display: inline-block; color: #fff; cursor: pointer; font-size: 14px; }
    .icons { display: flex; align-items: center; gap: 15px; font-size: 18px; }
    .icons i { cursor: pointer; color: #fff; transition: 0.3s; }
    .icons i:hover { color: #f00; }
    .filters-sort { display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; border-bottom: 1px solid #ddd; flex-wrap: wrap; gap: 10px; }
    .filters-sort button, .filters-sort select { padding: 8px 12px; border: 1px solid #aaa; background: #fff; cursor: pointer; }
    .product-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; padding: 20px; }
    .product-card { border: 1px solid #f1f1f1; padding: 15px; text-align: center; background: #fff; transition: 0.3s; cursor: pointer; position: relative; }
    .product-card:hover { box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .discount { background: #b22222; color: #fff; font-size: 12px; padding: 3px 6px; position: absolute; top: 10px; left: 10px; }
    .product-card img { max-width: 100%; height: 200px; object-fit: contain; }
    .colors { font-size: 12px; color: #555; margin: 5px 0; }
    .product-name { font-weight: bold; margin: 10px 0 5px; font-size: 14px; }
    .price { font-size: 16px; color: #c00; font-weight: bold; }
    .old-price { text-decoration: line-through; font-size: 14px; color: #777; margin-left: 5px; }
    @media (max-width: 1024px) { .product-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 768px) { .product-grid { grid-template-columns: repeat(2, 1fr); } .navbar ul { gap: 10px; justify-content: center; } }
    @media (max-width: 480px) { .product-grid { grid-template-columns: 1fr; } .navbar { flex-direction: column; align-items: flex-start; } .icons { margin-top: 10px; } }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">PUMA</div>
    <ul>
      <li>New </li><li>Men</li><li>Women</li><li>Sports</li>
      <li>Motorsport</li><li>Lifestyle</li><li>Kids</li><li>Sale</li>
    </ul>
    <div class="icons">
      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-regular fa-heart"></i>
      <i class="fa-solid fa-bag-shopping"></i>
      <i class="fa-regular fa-user"></i>
    </div>
  </div>

  <!-- Filters and Sort -->
  <div class="filters-sort">
    <button>FILTERS</button>
    <select>
      <option>SORT BY</option>
      <option>Price Low to High</option>
      <option>Price High to Low</option>
      <option>Newest</option>
    </select>
  </div>

  <!-- Product Grid -->
  <div class="product-grid">
    <?php foreach ($products as $p): ?>
      <div class="product-card">
        <div class="discount"><?= $p["discount"] ?></div>
        <img src="<?= $p["img"] ?>" alt="<?= $p["name"] ?>">
        <div class="colors"><?= $p["colors"] ?></div>
        <div class="product-name"><?= $p["name"] ?></div>
        <div>
          <span class="price"><?= $p["price"] ?></span>
          <span class="old-price"><?= $p["old_price"] ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</body>
</html>
