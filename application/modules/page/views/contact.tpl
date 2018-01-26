    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Hubungi Kami
        <small>PT Dwitama Arsindo</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">

        <!-- Contact Details Column -->
        <div class="col-lg-12 col-sm-12">
          <h3>Detail kontak</h3>
          <p>
			<i class="fa fa-home"></i> 
          	Rukan Sentra Pemuda No. 28 Jl. Pemuda Raya Kav. 61 Jakarta 13220 - Indonesia
            <br>
          </p>
          <p>
            <i class="fa fa-phone"></i> {$agen.agen_phone}
          </p>
          <p>
           <i class="fa fa-envelope-o"></i> 
            <a href="mailto:name@example.com"> {$agen.agen_email}
            </a>
          </p>
          <!-- <p><i class="fa fa-instagram"></i> secureproperty</p>
          <p><i class="fa fa-facebook"></i> secureproperty</p> -->
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-12 col-sm-12 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>