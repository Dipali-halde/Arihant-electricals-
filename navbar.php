
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Navbar</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    nav {
      background-color: #0c1a1e;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      flex-wrap: wrap;
      position: relative;
      z-index: 1000;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #00e5ff;
      text-decoration: none;
    }

    .menu-icon {
      display: none;
      font-size: 28px;
      cursor:pointer;
      color :white;
    }

    .menu-toggle {
      display: none;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 20px;
      align-items: center;
    }

    .nav-links li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      padding: 6px 10px;
      transition: 0.3s ease;
    }

    .nav-links li a:hover {
      background-color: #1e2b2f;
      border-radius: 4px;
    }

    .search-box {
      position: relative;
    }

    .search-box input {
      padding: 10px 20px;
      border-radius: 30px;
      border: none;
      font-size: 16px;
      outline: none;
    }

    .search-box::after {
      
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      color: #00e5ff;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
      .menu-icon {
        display: block;
      }

      .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #0c1a1e;
        padding: 10px 0;
        position: absolute;
        top: 60px;
        left: 0;
      }

      .menu-toggle:checked + .menu-icon + .nav-links {
        display: flex;
      }

      .nav-links li {
        text-align: center;
        width: 100%;
      }

      .search-box input {
        width: 80%;
        margin: 10px auto;
      }
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.php" class="logo">Arihant Electricals</a>

    <!-- Hidden checkbox to control menu toggle -->
    <input type="checkbox" id="menu-toggle" class="menu-toggle" />
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="About.php">About Us</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="testimonials.php">Testimonials</a></li>
      <li><a href="catlogue.php">Catlouge</a></li>
      <li><a href="images/Arihant.mp4" target= "_blank">Gallery</a></li>
      <li><a href="contact.php">Contact Us</a></li>
     
      <form id="searchForm" class="search-box">
  <input type="text" name="query" id="searchInput" placeholder="What are you looking for?" required />
</form>
      </li>
    </ul>
  </nav>

  <script>
// Static map of products and their URLs
const productLinks = {
  "burner": "burner.php",
  "gas": "burner.php",
  "fan": "fan.php",
  "ceiling fan": "fan.php",
   "grinder": "grinder.php",
   "mixer": "grinder.php",
   "mixers" : "grinder.php",
   "ceramic cooker" : "ceramic_cooker.php",
   "cooker" : "ceramic_cooker.php",
   "heater" : "products.php",
   "water heater" : "products.php",
   "filter" :"filter.php",
   "water purifier" : "filter.php",
   "iron" : "iron.php",
   "switch" : "switch.php",
   "buttons" : "switch.php",
   "button" : "switch.php",
   "swtich buttons": "switch.php"
  
};

document.getElementById("searchForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting to search.php

  const input = document.getElementById("searchInput").value.trim().toLowerCase();

  if (productLinks[input]) {
    window.location.href = productLinks[input]; // Redirect to product page
  } else {
    alert("Product not found. Please try again.");
  }
});
</script>



<script>
    // Optional: Ensure menu closes on resize
    window.addEventListener('resize', function () {
      if (window.innerWidth > 768) {
        document.getElementById('menu-toggle').checked = false;
      }
    });
  </script>

</body>
</html>
