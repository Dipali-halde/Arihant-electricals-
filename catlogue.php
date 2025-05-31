<?php include 'navbar.php' ; ?>
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
  <h2>Our Catalogues</h2>
  <div class="product-grid">


 <a href="images/Crompton_waterHeater Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/waterHeater_product.png" alt="Crompton Water Heater">
        <h3>Crompton Water Heater Catalogue</h3>
        </div>
    </a>

    <a href="images/protolight_light Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/protolight_cat.jpg" alt="Protolight">
        <h3>Protolight Catalogue</h3>
      </div>
    </a>

    <a href="images/wall_light Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/wallLight_cat.webp" alt="Wall-light">
        <h3>Wall Light Catalogue</h3>
      </div>
    </a>

    <a href="images/switch_Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/switch_cat.png" alt="Switch">
        <h3>Switch Catalogue</h3>
      </div>
    </a>

    <a href="images/buttons_Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/switchButton_cat.jpg" alt="buttons">
        <h3>Buttons Catalogue</h3>
      </div>
    </a>

    <a href="images/air_cooler Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/airCooler_cat.webp" alt="Air cooler">
        <h3>Air Cooler Catalogue</h3>
      </div>
    </a>

    <a href="images/ceiling_fans Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/newFan_cat.webp" alt="Ceiling Fan">
        <h3>Ceiling Fan Catalogue</h3>
      </div>
    </a>

    <a href="images/fans2_Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/smartFan_cat.webp" alt="Ceiling Fan">
        <h3>Ceiling Fan|Smart remote control Catalogue</h3>
      </div>
    </a>

    <a href="images/Switchgear Catloge.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/newSwitchgear_cat.jpg" alt="Switch gear">
        <h3>Switch Gear Catalogue</h3>
      </div>
    </a>

    
    <a href="images/kitchen_product Catalogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/kitchen_cat.webp" alt="Kitchen products ">
        <h3>Kitchen Products  Catalogue</h3>
      </div>
    </a>

    <a href="images/Philips catlogue.pdf" target="_blank" class="product-link">
      <div class="product-card">
        <img src="images/philips_cat.png" alt="Kitchen products ">
        <h3>PHILIPS products Catalogue</h3>
      </div>
    </a>
</div>

</div>

</body>
</html>
<?php include 'footer.php'; ?>
