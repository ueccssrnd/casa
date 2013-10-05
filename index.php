<?php include 'views/templates.php'; 

 generateHeader();

?>
      <!-- navigation ends here -->
      <!-- start different pages of my parallax thing -->
      <div id="edu-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
        <div class="container">
          <h1 class="title">Education</h1>
        </div>
      </div>
      <div id="edu-content" class="content screen-2 parallax-2">
        <div class="container">
          <h1>Peace Program</h1>
          <div class="col-md-6">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
          Designed for both business and leisure travel, Casa San Miguel Bed and Breakfast is ideally situated in Pundaquit - San Antonio; one of the city's most popular locales. From here, guests can enjoy easy access to all that the lively city has to offer. With its convenient location, the hotel offers easy access to the city's must-see destinations.
What We Need: How to Go There. Rates. Stuff.
At Casa San Miguel Bed and Breakfast, the excellent service and superior facilities make for an unforgettable stay. This hotel offers numerous on-site facilities to satisfy even the most discerning guest. The hotel features 5 beautifully appointed guest rooms, each including non smoking rooms, fan, air conditioning, internet access – LAN (complimentary), shower. The hotel offers many unique recreational opportunities such as garden. When you are looking for comfortable and convenient accommodations in Subic (Zambales), make Casa San Miguel Bed and Breakfast your home away from home.
 
          <div class="col-md-6">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>  
          </div>
        </div>
      </div>
      <div id="edu-gallery" class="parallax-3 screen-3 light">
        <div class="container">
          <h1>Gallery</h1>
        </div>
      </div>
      <div id="edu-register" class="parallax-4 screen-4 forms">
        <div class="container">
          <div class="col-md-6">
            <h1 class="title">Register</h1>
            <form action="mail.php" role="form">
              <fieldset disabled>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" value="Register for Education" class="form-control">
                </div>
              </fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="message">Short Message</label>
                <textarea class="form-control" id="message"></textarea>
              </div>
              <!-- <button type="submit" class="btn btn-default btn-social facebook"><i class="icon-facebook"></i>Register via Facebook</button> -->
              <button type="submit" class="btn btn-default btn-large btn-casa"><i class="icon-envelope"></i>Submit</button>
            </form>
          </div>
          <!-- <div class="overlay"></div> -->
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <p>CASA San Miguel, Evagelista Street, Barangay San Miguel, San Antonio, Zambales, 2206 Philippines </p>
        </div>

      </div>
      <!-- end different pages of my parallax thing -->
    </div>
  </div>
  
  <?php generateFooter(); ?>
