<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer</title>
  <link rel= "stylesheet" href="style.css" >

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
    }

    footer {
      background-color: #222;
      color: #eee;
      padding: 60px 40px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      position:static;
    }

    .footer-left, .footer-right {
      flex: 1 1 400px;
    }

    .footer-left {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .footer-section h4 {
      text-align: center;
      margin-bottom: 12px;
      font-size: 20px;
      color:  white;
      border-bottom: 2px solid  white;
      padding-bottom: 5px;
      width: 100%;
    }

    .footer-section p, .footer-section ul {
      font-size: 15px;
      line-height: 1.6;
      color: #ccc;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
      text-align: center;
    }

    .footer-section ul li {
      margin-bottom: 8px;
    }

    .footer-section ul li a {
      color: #ccc;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-section ul li a:hover {
      color: #00aced;
      padding-left: 5px;
    }

    .footer-map iframe {
      width: 100%;
      height: 100%;
      min-height: 300px;
      border: none;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .footer-bottom {
      text-align: center;
      padding: 20px;
      background-color: #111;
      color: #aaa;
      font-size: 14px;
    }

    .footer-bottom a {
      color: orange;
      text-decoration: none;
      font-weight: bold;
    }

    .footer-bottom a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      footer {
        flex-direction: column;
        padding: 40px 20px;
      }

      .footer-map iframe {
        min-height: 200px;
      }
    }
  </style>
</head>
<body>

  <footer>
    <!-- Left Side: Info + Links -->
    <div class="footer-left">
      <!-- Contact Info -->
      <div class="footer-section">
        <h4>Contact Info</h4>
        <p style="text-align:center;"><strong>Kothari's Villa, Sector P-23,</strong></p>
        <p style="text-align:center;">Plot no 27 Rane Nagar, Morwadi Rd, behind Ambad police station,Cidco, Nashik, Maharashtra 422009</p>
        <p style="text-align:center;">Phone: 073858 88222</p>
        <p style="text-align:center;">Email: <a href="mailto:info@yourdomain.com" style="color:#ccc;">info@yourdomain.com</a></p>
      </div>

      <!-- Quick Links -->
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="About.php">About Us </a></li>
          <li><a href="Products.php">Products</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <!-- Right Side: Map -->
    <div class="footer-right footer-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29997.648069134208!2d73.74402416464066!3d19.97886234406557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb5dcde6263f%3A0xfa5c2bea9851e8f2!2sARIHANT%20ELECTRICALS!5e0!3m2!1sen!2sin!4v1745838688258!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </footer>



  <!-- Bottom Bar -->
  <div class="footer-bottom">
    Designed and Developed by 
    <a href="https://hmt.kbhgroup.in" target="_blank">Hiray Media and Technology Pvt. Ltd.</a>
  </div>

</body>
</html>
