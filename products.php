

<?php include 'navbar.php'; ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Products</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #0c1a1e;
      color: white;
    }

    .product-section {
      padding: 60px 20px;
      text-align: center;
    }

    .product-section h2 {
      font-size: 36px;
      color: #00e5ff;
      margin-bottom: 40px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .product-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* exactly 3 columns */
  gap: 30px;
  max-width: 1200px;
  margin: auto;
}

    .product-card {
      background-color: #1e2b2f;
      padding: 30px 20px;
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 230, 255, 0.2);
      text-align: center;
      width: 100%; /* Let grid control the width */
    }

    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 20px rgba(0, 230, 255, 0.5);
    }

    .product-card img {
      width: 100%;
      height: 180px;
      object-fit: contain;
      margin-bottom: 15px;
      background-color: #f0f0f0;
      border-radius: 8px;
      padding: 10px;
    }

    .product-card h3 {
      font-size: 20px;
      color: #e0e0e0;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .product-card p {
      font-size: 14px;
      color: #ccc;
      margin-bottom: 10px;
      line-height: 1.4;
    }

    .product-price {
      color: #00e5ff;
      font-weight: bold;
      font-size: 18px;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      padding-top: 60px;
      left: 0; top: 0;
      width: 100%; height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.9);
    }

    .modal-content {
      display: block;
      margin: auto;
      max-width: 80%;
      max-height: 80vh;
      border-radius: 10px;
    }

    .close {
      position: absolute;
      top: 20px; right: 35px;
      color: #fff;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
    }

    #caption {
      text-align: center;
      color: #ccc;
      padding: 10px;
      font-size: 18px;
    }

    a.product-link {
      text-decoration: none;
      color: inherit;
    }

    @media (max-width: 992px) {
  .product-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .product-grid {
    grid-template-columns: 1fr;
  }
}

  </style>
</head>
<body>

<div id="imageModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImg">
  <div id="caption"></div>
</div>

<div class="product-section">
  <h2>Our Products</h2>
  <div class="product-grid">

    <a href="burner.php" class="product-link">
      <div class="product-card">
        <img src="images/burner_product.png" alt="Burner">
        <h3>Burner</h3>
        <p>Efficient grinding with powerful blades for smooth results every time.</p>
      </div>
    </a>

    <a href="grinder.php" class="product-link">
      <div class="product-card">
        <img src="images/grinder_product.png" alt="Grinder">
        <h3>Grinder</h3>
        <p>Stylish and silent operation with energy-saving technology.</p>
      </div>
    </a>

    <a href="fan.php" class="product-link">
      <div class="product-card">
        <img src="images/ceiling fan 9.jpeg" alt="Fan">
        <h3>Ceiling Fans</h3>
        <p>Oscillating wall-mounted fan for focused airflow and quiet comfort.</p>
      </div>
    </a>

    <a href="ceramic_cooker.php" class="product-link">
      <div class="product-card">
        <img src="images/cooker_product.png" alt="Ceramic Cooker">
        <h3>Ceramic Cooker</h3>
        <p>Advanced ceramic technology for faster, smarter cooking.</p>
      </div>
    </a>

    <a href="images/heater_details.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/waterHeater_product.png" alt="Crompton Water Heater">
        <h3>Crompton Water Heater</h3>
        <p>Energy-efficient wall-mounted water heater with fast heating and safety features.</p>
      </div>
    </a>

    <a href="filter.php" target="blank" class="product-link">
      <div class="product-card">
        <img src="images/alpha_copper.jpeg" alt="Water filter purifier">
        <h3>Water Filter Purifier</h3>
        <p>"Pure water, healthy life—filtered to perfection."</p>
      </div>
    </a>

    <a href="iron.php" target="blank" class="product-link">
      <div class="product-card">
        <img src="images/iron_product.jpg" alt="Iron">
        <h3>Iron</h3>
        <p>"Smooth out every wrinkle—effortless ironing, flawless results."</p>
      </div>
    </a>

    <a href="switch.php" target="blank" class="product-link">
      <div class="product-card">
        <img src="images/switch_product.webp" alt="Switch">
        <h3>Switch</h3>
        <p>"Uncompromised safety. Unmatched design."</p>
      </div>
    </a>

    
    <a href="#" target="blank" class="product-link">
      <div class="product-card">
        <img src="images/airCooler_product.jpg" alt="Switch">
        <h3>Air Cooler</h3>
        <p>"Stay cool, breathe fresh – comfort powered by nature."</p>
      </div>
    </a>
</div>

</div>



</body>
</html>
<?php include 'footer.php'; ?>
