<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Register
        <small>new member</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Register</li>
      </ol>

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <h4>Fill the form registration below</h4>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nama lengkap:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nomor handphone:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your active phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Alamat email aktif:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Alamat lengkap:</label>
                <textarea rows="3" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your address" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Upload scan atau foto KTP:</label><br>
                <input type="file" name="file">
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton"><i class="fa fa-plus"></i> Daftar sekarang</button>
          </form>
        </div>

      </div>

    </div>