<?php include 'navbar.php'; ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Burner </title>
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
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .product-card {
      background-color: #1e2b2f;
      padding: 30px 20px;
      border-radius: 10px;
      width: calc(25% - 30px);
      min-width: 240px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 230, 255, 0.2);
      text-align: center;
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

    @media (max-width: 1024px) {
      .product-card {
        width: calc(33.33% - 30px);
      }
    }

    @media (max-width: 768px) {
      .product-card {
        width: calc(50% - 30px);
      }
    }

    @media (max-width: 480px) {
      .product-card {
        width: 100%;
      }
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


  </style>
</head>
<body>

<div id="imageModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImg">
  <div id="caption"></div>
</div>

<div class="product-section">
  <h2>Ceramic Cookers  </h2>
  <div class="product-grid">

    <div class="product-card">
      <img src="images/cooker1.JPG" alt="Ceramic Cooker">
      <h3>SR-Elite| Ceramic Cooker</h3>
      <p>"Premium ceramic surface for healthy, low-oil cooking."</p>
   
    </div>

    <div class="product-card">
      <img src="images/cooker2.JPG" alt="Ceramic Cooker">
      <h3>SR-Trinado| Ceramic Cooker</h3>
      <p>"Even heat distribution for perfectly cooked meals every time."</p>
    
    </div>

    <div class="product-section">
  <h2>Induction Cookers  </h2>
  <div class="product-grid">

    <div class="product-card">
      <img src="images/induction_cooker1.jpeg" alt="Induction Cooker">
      <h3>Induction Cooker | 1400 Watt |1Yr Warranty</h3>
      <p>"Fashionable Design with push button control"</p>
   
    </div>

    <div class="product-card">
      <img src="images/induction_cooker1.jpeg" alt="Induction Cooker">
      <h3>Ultra SLim Induction Cooker | 2000 Watt | 1Yr Warranty</h3>
      <p>"Upgrade your kitchen with intelligent heat."</p>
    
    </div>

    <div class="product-card">
      <img src="images/induction_cooker3.jpeg" alt="Induction Cooker">
      <h3>PREZZO Infrared Cooker | 2000 Watt | 1Yr Warranty</h3>
      <p>"Precision cooking. Instant heat. Modern design."</p>
    
    </div>


  

   

  </div>
</div>


<script>
  // Get modal elements
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImg");
  const caption = document.getElementById("caption");

  // Attach event to all product images
  document.querySelectorAll('.product-card img').forEach(img => {
    img.addEventListener('click', function(event) {
      event.stopPropagation(); // Prevent click bubbling if needed
      modal.style.display = "block";
      modalImg.src = this.src;
      caption.innerText = this.alt || this.parentElement.querySelector('h3')?.innerText || "";
    });
  });

  // Close modal function
  function closeModal() {
    modal.style.display = "none";
  }

  // Close modal when clicking outside the image
  modal.addEventListener('click', function(event) {
    if (event.target === modal) {
      closeModal();
    }
  });
</script>






</body>
</html>
<?php include 'footer.php'; ?>


