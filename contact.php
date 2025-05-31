<?php include 'navbar.php'; ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    /* Global Styles */
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #0c1a1e;  /* Keep the body background color consistent */
      color: #e0e0e0;
     
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 60px 20px;
    }

    
    footer {
      background-color: #263238;  /* Set footer background color */
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
    }

    /* Contact Form and Info Section */
    .contact-section {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
      align-items: stretch;
    }

    /* Contact Form Styles */
    .contact-form {
      background-color: #263238;
      padding: 30px 25px;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 230, 255, 0.08);
      flex: 1;
      min-width: 300px;
      max-width: 500px;
      border: 1px solid rgba(0, 230, 255, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 450px;
    }

    .contact-form h2 {
      text-align: center;
      color: #00e5ff;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px 12px;
      border-radius: 6px;
      border: 1px solid #37474f;
      background-color: #fafafa;
      font-size: 15px;
      color: #000;
    }

    input:focus,
    textarea:focus {
      box-shadow: 0 0 8px rgba(0, 230, 255, 0.4);
      border-color: #00e5ff;
      outline: none;
    }

    .btn-submit {
      background-color: #00e5ff;
      color: #0c1a1e;
      font-weight: bold;
      border: none;
      padding: 12px;
      border-radius: 8px;
      width: 100%;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #00bcd4;
    }

    /* Contact Info Styles */
    .contact-info {
      background-color: #263238;
      padding: 30px 25px;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 230, 255, 0.08);
      flex: 1;
      min-width: 300px;
      max-width: 500px;
      border: 1px solid rgba(0, 230, 255, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 450px;
    }

    .contact-info h4 {
      text-align: center;
      color: #00e5ff;
      margin-bottom: 20px;
      font-size: 22px;
    }

    .contact-info p {
      margin-bottom: 10px;
      line-height: 1.6;
    }

    .contact-info a {
      color: #00e5ff;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    #formAlert {
      margin-top: 15px;
      font-weight: bold;
      text-align: center;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .contact-section {
        flex-direction: column;
        align-items: center;
      }

      .contact-form,
      .contact-info {
        max-width: 90%;
        min-width: 100%;
      }
    }
  </style>
</head>
<body>



  <div class="container">
    <div class="contact-section">
      <!-- Contact Form -->
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn-submit">Send Message</button>
          <div id="formAlert"></div>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="contact-info">
        <h4>Contact Details</h4>
        <p><strong>Address:</strong><br>Kothari's Villa, Sector P-23, Plot no 27 Rane Nagar<br>Morwadi Rd, behind Ambad police station,<br>Cidco, Nashik, Maharashtra 422009</p>
        <p><strong>Phone:</strong> 073858 88222</p>
        <p><strong>Email:</strong> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
      </div>
    </div>
  </div>

 

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('#contactForm').on('submit', function (e) {
      e.preventDefault();
      const form = this;

      if (!form.checkValidity()) {
        return form.reportValidity();
      }

      $.ajax({
        url: 'send_mail.php',
        type: 'POST',
        data: $(form).serialize(),
        success: function (response) {
          $('#formAlert').html(response).css('color', 'lime');
          form.reset();
        },
        error: function () {
          $('#formAlert').html("❌ Something went wrong. Please try again.").css('color', 'red');
        }
      });
    });
  </script>

</body>
</html>
<?php include 'footer.php' ;?>
