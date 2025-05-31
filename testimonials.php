<?php include 'navbar.php' ;?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Testimonials</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

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
</head>
<body>

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
      <div class="testimonial-item">
        <p>"Best Electronics & Electrical Store All Brands Available Here Visit for All Appliances"</p>
        <h4>- Inayat Inamdar</h4>
      </div>
      <div class="testimonial-item">
        <p>"Arihant electricals - one stop solutions for all your electricals needs. Authentic and genuine electrical products are available at Arihant Electricals."</p>
        <h4>- Sagar Nile</h4>
      </div>
      <div class="testimonial-item">
        <p>"Timely Service, Having Good Quality of Product, Totally Satisfied The Way Treated By Owner"</p>
        <h4>- Ritesh Khivasara</h4>
      </div>
      <div class="testimonial-item">
        <p>"Arihant Electrical is a top-notch destination for both wholesale and retail electrical supplies. With a broad selection and partnerships with many major brands, the shop offers excellent service and a well-stocked inventory."</p>
        <h4>- Rakhi Soni</h4>
</div>
        <div class="testimonial-item">
        <p>"Arihant Electricals is a best service & Electricals good provider"</p>
        <h4>- Sachin Wadile</h4>
      </div>
      <div class="testimonial-item">
        <p>"I recently had a great experience at Arihant Electrical, owned by Sushil Jain. This shop stands out for its impressive range of products and excellent customer service."</p>
        <h4>- Parth Soni</h4>
      </div>
    </div>
  </div>

</body>
</html>
<?php include 'footer.php' ; ?>
