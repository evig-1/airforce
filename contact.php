<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<?php require "includes/head-links.php"; ?>
<body>
<?php require "includes/header.php"; ?>

<div class="contact-section">
    <div class="container">
      <div class="col-md-6 contact-details">
        <h2>Contact Us</h2>
        <!-- <p>Please feel free to contact us for any inquiries or feedback.</p>
        <ul>
          <li><strong>Address:</strong> india</li>
          <li><strong>Email:</strong> info@example.com</li>
          <li><strong>Phone:</strong> 1332332321323232</li>
        </ul> -->
        <form>
          <div class="form-group">
            <label for="name" class="custom-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email" class="custom-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message" class="custom-label">Message:</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
          </div>
          <button class="btn button-red fs-5  rounded-pill" style="
    margin-top: 16px;">
                            Submit
                        </button>
        </form>
      </div>
      <div class="col-md-6 contact-image"></div>
    </div>
  </div>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.2622182539712!2d73.03447177524802!3d26.253151777046405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c7d3e7aec47%3A0x6ab7a1e0feec4a4b!2sAir%20Force%20Rd%2C%20Jodhpur%2C%20Rajasthan%20342011!5e0!3m2!1sen!2sin!4v1710488010884!5m2!1sen!2sin" width="100%" height="550" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>






<?php require "includes/footer.php"; ?>

    
</body>

</html>