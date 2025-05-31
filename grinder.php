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
  <h2>Grinders/ Mixers </h2>
  <div class="product-grid">

    <div class="product-card">
      <img src="images/tri-star grinder.jpeg" alt="Grinder">
      <h3>Grinder| Tri-star Mixer Grinder</h3>
      <p>"Power meets precision with ultra-quiet grinding."</p>
      <div class="product-price">₹3,862-₹4,118</div>
    </div>

    <div class="product-card">
      <img src="images/tulip grinder.jpeg" alt="Grinder">
      <h3>Grinder| Tulip Mixer Grinder</h3>
      <p>"Compact, stylish, and built for effortless performance."</p>
      <div class="product-price">₹3,159-₹3,414</div>
    </div>

    <div class="product-card">
      <img src="images/elite grinder.jpeg" alt="Grinder ">
      <h3>Grinder| Elite Mixer Grinder</h3>
      <p>"Grind smarter—fast, silent, and energy-efficient."</p>
      <div class="product-price">₹2,508</div>
    </div>

    <div class="product-card">
      <img src="images/lexus grinder.jpeg" alt="Grinder">
      <h3>Grinder| Lexus Mixer Grinder</h3>
      <p>"Seamless grinding with style, speed, and silence."</p>
      <div class="product-price"></div>
    </div>

    <div class="product-card">
      <img src="images/MG_aspen.jpeg" alt="Grinder">
      <h3>Grinder| MG Aspen | 3 Jars</h3>
      <p>"Modern Design Shock proof ABS Body"</p>
    </div>

    <div class="product-card">
      <img src="images/MG_dina.jpeg" alt="Grinder ">
      <h3>Grinder| MG Diana</h3>
      <p>"500 Watt powerful motor for durability of the machine ."</p>
    </div>

    <div class="product-card">
      <img src="images/MG_magnit.jpeg" alt="Grinder">
      <h3>Grinder| MG Magnit</h3>
      <p>"Specially designed Razor sharp blades."</p>
     
    </div>

    <div class="product-card">
      <img src="images/MG_magnit.jpeg" alt="Grinder">
      <h3>Grinder| MG NIOS</h3>
      <p>"Built in overload protector for motor safety."</p>
      
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


