<?php include 'navbar.php'; ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services Section</title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .services-section {
      background-color: #0c1a1e;
      color: white;
      padding: 60px 20px;
      text-align: center;
    }

    .services-section h2 {
      font-size: 36px;
      color: #00e5ff;
      margin-bottom: 40px;
      text-transform: uppercase;
      font-weight: bold;
    }

    .services-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .service-item {
      background-color: #1e2b2f;
      padding: 30px 20px;
      border-radius: 10px;
      width: calc(25% - 30px); /* 4 per row, minus the gap */
      min-width: 240px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: center;
      box-shadow: 0 0 15px rgba(0, 230, 255, 0.2);
    }

    .service-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 20px rgba(0, 230, 255, 0.5);
    }

    .service-item i {
      font-size: 40px;
      margin-bottom: 15px;
      color: #00e5ff;
      transition: color 0.3s ease;
    }

    .service-item h3 {
      font-size: 20px;
      margin-bottom: 10px;
      font-weight: bold;
      color: #e0e0e0;
    }

    .service-item p {
      font-size: 14px;
      color: #ccc;
      line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .service-item {
        width: calc(33.33% - 30px); /* 3 per row */
      }
    }

    @media (max-width: 768px) {
      .service-item {
        width: calc(50% - 30px); /* 2 per row */
      }
    }

    @media (max-width: 480px) {
      .service-item {
        width: 100%; /* 1 per row */
      }
    }
  </style>
</head>
<body>
    

  <div class="services-section">
    <h2>Our Services</h2>
    <div class="services-container">
      <div class="service-item">
        <i class="fas fa-cogs"></i>
        <h3>Installation & Setup</h3>
        <p>Expert appliance installation and step-by-step setup guidance.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-tools"></i>
        <h3>Repair & Maintenance</h3>
        <p>Keep your gadgets running smoothly with skilled technician care.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-shield-alt"></i>
        <h3>Warranty Support</h3>
        <p>Comprehensive warranty and after-sales assistance when needed.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-exchange-alt"></i>
        <h3>Exchange & Buyback</h3>
        <p>Upgrade with value—our trade-in offers save you money on new tech.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-truck"></i>
        <h3>Fast Delivery</h3>
        <p>Reliable, on-time home delivery to make shopping smooth and fast.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-lightbulb"></i>
        <h3>Smart Suggestions</h3>
        <p>Get personalized recommendations based on your style and needs.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-headset"></i>
        <h3>24/7 Support</h3>
        <p>Round-the-clock support to solve your problems any time, any day.</p>
      </div>

      <div class="service-item">
        <i class="fas fa-undo-alt"></i>
        <h3>Easy Returns</h3>
        <p>No-hassle return process to ensure your complete satisfaction.</p>
      </div>
    </div>
  </div>

</body>
</html>
<?php include 'footer.php' ; ?>
