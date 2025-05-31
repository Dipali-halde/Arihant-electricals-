<?php include 'navbar.php' ; ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Hero Section */
    .hero {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 9; /* Maintain aspect ratio for responsiveness */
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.hero img {
  width: 100%;
  height: 80%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: opacity 0.5s ease-in-out;
  opacity: 5;
}


.hero-text {
  z-index: 1;
  color: white;
  text-align: center;
  padding: 20px;
}

.hero-text h1 {
  font-size: 48px;
  text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
}

@media (max-width: 768px) {
  .hero-text h1 {
    font-size: 30px;
  }
}

@media (max-width: 480px) {
  .hero-text h1 {
    font-size: 24px;
  }
}



    .hero h1 {
      font-size: 50px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

  

    .product-cards {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap; /* Ensures items wrap on smaller screens */
    }

    .product-card {
      background-color: white;
      padding: 20px;
      width: 200px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px; /* Adds some space between cards */
    }

    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .product-card h3 {
      font-size: 18px;
      margin: 10px 0;
    }

    

    /* Responsive Design */
    @media (max-width: 1200px) {
      .hero h1 {
        font-size: 45px; /* Adjusting font size for large screens */
      }

      .product-card {
        width: 250px; /* Adjusting the size of the product cards on medium screens */
      }
    }

    @media (max-width: 992px) {
      .hero h1 {
        font-size: 40px; /* Adjusting font size for tablets */
      }

      .product-card {
        width: 230px; /* Adjusting the size of the product cards */
      }
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 35px; /* Smaller font size for mobile devices */
      }

      .product-card {
        width: 45%; /* Making product cards smaller for mobile */
      }

      /* Adjust background size for smaller screens */
      .hero {
        background-size: cover;
        background-position: center center; /* Ensure the background adjusts for mobile */
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 30px; /* Further reducing font size on very small screens */
      }

      .product-card {
        width: 90%; /* Making product cards take up more space on small screens */
      }

      /* Adjust background size for smaller screens */
      .hero {
        background-size: cover;
        background-position: center center; /* Ensure the background adjusts for very small screens */
      }
    }
  </style>
</head>
<body>

     <!-- Hero Section -->
  <div class="hero">
  <img id="hero-image" src="images/canva3.PNG" alt="Hero Banner" />
  <div class="hero-text">
    <h1></h1>
  </div>
</div>
</div>
</div>

<script>
  const heroImages = ['images/canva3.PNG', 'images/canva2.PNG', 'images/canva4.PNG'];
  let index = 0;
  const heroImage = document.getElementById('hero-image');

  setInterval(() => {
    index = (index + 1) % heroImages.length;
    heroImage.style.opacity = 0;
    setTimeout(() => {
      heroImage.src = heroImages[index];
      heroImage.style.opacity = 1;
    }, 500);
  }, 4000); // Change image every 2 seconds
</script>

 <!--about -->

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

 /* About Section Styles */
    .about-section {
      display: flex; /* Flexbox to place content and image side by side */
      align-items: stretch; /* Ensure both items have the same height */
      background-color: #0c1a1e;
      color: white;
      padding: 80px 20px; /* Increased padding for more space */
      gap: 20px;
      min-height: 600px; /* Increased height of the section */
    }

    .about-text {
      flex: 1; /* Take up the remaining space */
      text-align: left; /* Align the text to the left */
      transition: transform 0.3s ease;
    }

    .about-text:hover {
      transform: translateX(10px); /* Slight move effect when hovering */
    }

    .about-section h2 {
      font-size: 36px;
      color: #00e5ff; /* Cyan color for headings */
      margin-bottom: 20px;
      text-transform: uppercase;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .about-section h2:hover {
      color: #ff6600; /* Change color on hover */
    }

    .about-section p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #e0e0e0; /* Slightly lighter text color for better readability */
      transition: color 0.3s ease;
    }

    .about-section p:hover {
      color: #ff6600; /* Change color on hover */
    }

    .about-section ul {
      list-style: none;
      padding: 0;
    }

    .about-section ul li {
      font-size: 18px;
      margin-bottom: 10px;
      color: #e0e0e0;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .about-section ul li:hover {
      color: #00e5ff; /* Change color on hover */
      transform: translateX(5px); /* Slight movement effect */
    }

    .about-section ul li span {
      font-weight: bold;
      color: #00e5ff; /* Highlighted text with cyan */
    }

    .about-image {
      flex: 1; /* Take up the remaining space for the image */
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .about-image:hover {
      transform: scale(1.05); /* Slight zoom effect on hover */
    }

    .about-section img {
      width: 100%;
      height: 100%; /* Ensures the image takes up full height */
      max-width: 500px; /* Set a max-width for the image */
      object-fit: cover; /* Makes sure the image scales properly */
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .about-section img:hover {
      transform: scale(1.05); /* Slight zoom effect on image hover */
    }

    /* New Section Styles (Image Left, Text Right) */
    .new-section {
      display: flex;
      align-items: center;
      justify-content: space-between; /* Make sure content and image are spaced out */
      background-color: #0c1a1e;
      color: white;
      padding: 80px 20px; /* Same padding as the previous section */
      gap: 20px;
      min-height: 600px; /* Same minimum height for consistency */
    }

    .new-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .new-image:hover {
      transform: scale(1.05); /* Slight zoom effect on hover */
    }

    .new-section img {
      width: 100%;
      height: 100%;
      max-width: 500px;
      object-fit: cover;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .new-section img:hover {
      transform: scale(1.05); /* Slight zoom effect on image hover */
    }

    .new-text {
      flex: 1;
      text-align: left;
      transition: transform 0.3s ease;
    }

    .new-text:hover {
      transform: translateX(10px); /* Slight move effect when hovering */
    }

    .new-text h2 {
      font-size: 36px;
      color: #00e5ff;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .new-text h2:hover {
      color: #ff6600; /* Change color on hover */
    }

    .new-text p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #e0e0e0;
      transition: color 0.3s ease;
    }

    .new-text p:hover {
      color: #ff6600; /* Change color on hover */
    }

    /* Responsive Design for New Section */
    @media (max-width: 768px) {
      .about-section, .new-section {
        flex-direction: column; /* Stack content and image vertically on small screens */
      }

      .new-text {
        text-align: center;
      }

      .new-section img {
        width: 100%;
        max-width: 100%;
        height: auto;
      }
    }
  </style>
</head>
<body>

  <!-- About Section -->
  <div class="about-section">
    <div class="about-text">
      <h2>Why Choose Us</h2>
      <p>We bring years of industry experience and cutting-edge technology to deliver top-quality products tailored to your needs. Your satisfaction is our priority. We offer personalized solutions, exceptional service, and reliable support every step of the way.</p>
      
      <ul>
        <li><span>Fast & Free Shipping:</span> Enjoy quick, reliable delivery at no extra cost. We ensure your products reach you safely and on time, every time.</li>
        <li><span>Easy to Shop:</span> With a user-friendly interface and seamless navigation, finding and purchasing your favorite products has never been simpler.</li>
        <li><span>24/7 Support:</span> Our dedicated team is always available to assist you, ensuring you have the help you need, whenever you need it.</li>
        <li><span>Hassle Free Returns:</span> Enjoy a stress-free shopping experience with our easy return policy, ensuring you can shop with confidence.</li>
      </ul>
    </div>

    <div class="about-image">
      <img src="images/background1.png" alt="Product Image">
    </div>
  </div>

  <!-- New Section (Image Left, Text Right) -->
  <div class="new-section">
    <div class="new-image">
      <img src="images/fan_about.png" alt="About Image">
    </div>

    <div class="new-text">
      <h2>Transform Your Space with Our Modern and Stylish Electronic Solutions</h2>
      <p>We offer a wide range of electronic appliances that complement and enhance your interior design. Our products are carefully selected to blend effortlessly with your home decor, bringing style and functionality together. From sleek electronics to smart appliances, we help you create a contemporary and efficient living environment.</p>
      <p>Upgrade your interiors with our premium electronic appliances. Our products combine aesthetics with high performance for a perfect modern touch. Embrace the future of living with our smart, cutting-edge electronic solutions. We provide appliances that match your unique style and space requirements.</p>
    </div>
  </div>


  <!--services --> 
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



  <!--testimonials -->
<style>
  body {
      background-color: #0c1a1e;
      color: white;
    }

    .testimonials-section {
      padding: 60px 20px;
      text-align: center;
      background-color: #0c1a1e;
    }

    .testimonials-section h2 {
      font-size: 36px;
      color: #00e5ff;
      margin-bottom: 40px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .testimonials-section a{
      text-decoration: none;
      color : white;
      font-size : 20px;
    }
    .testimonials-section a:hover {
      color : #00e5ff;
    }

    .testimonial-container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .testimonial-item {
      background-color: #1e2b2f;
      padding: 30px 20px;
      border-radius: 10px;
      width: calc(33.33% - 30px);
      min-width: 280px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 230, 255, 0.2);
    }

    .testimonial-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 230, 255, 0.5);
    }

    .testimonial-item p {
      font-size: 16px;
      line-height: 1.5;
      color: #ccc;
      margin-bottom: 15px;
    }

    .testimonial-item h4 {
      font-size: 18px;
      color: #00e5ff;
      font-weight: bold;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .testimonial-item {
        width: calc(50% - 30px);
      }
    }

    @media (max-width: 600px) {
      .testimonial-item {
        width: 100%;
      }
    }
  </style>

  <div class="testimonials-section">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-container">
      <div class="testimonial-item">
        <p>"Absolutely fantastic service! The delivery was quick and the product was exactly what I needed."</p>
        <h4>- Riya Sharma</h4>
      </div>
      <div class="testimonial-item">
        <p>"The customer support was responsive and helpful. I had a great experience shopping with Arihant Electronics."</p>
        <h4>- Ankit Verma</h4>
      </div>
      <div class="testimonial-item">
        <p>"Affordable prices and high-quality products. I’ll definitely be coming back for more."</p>
        <h4>- Meena Joshi</h4>
      </div>
      <a href ="testimonials.php">See More &rarr; </a>
    </div>
  </div>
  <hr>

  <!-- Footer -->
 <?php include 'footer.php' ; ?>

 


</body>
</html>
