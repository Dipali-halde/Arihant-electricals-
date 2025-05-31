<?php include 'navbar.php' ; ?>
<hr>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Section</title>
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
      padding: 80px ; /* Increased padding for more space */
      
      min-height:600px; /* Increased height of the section */
      
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
 <?php include 'footer.php' ; ?>
</body>
</html>
