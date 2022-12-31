<?php include 'header.php'; ?>


  <div class="container">
	<div class="row my-3">
      <div class="col-md-6 offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="https://formspree.io/f/xpzezabg"" method="post">
          <fieldset>
            <legend class="text-center">Contact Us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label">Username</label>
              <div class="col-md-9">
                <input id="user" name="user" type="text" placeholder="Your user name" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
            <br>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <input name="submit" class="btn btn-primary" type="submit" class="btn btn-primary btn-lg">
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

<?php include 'footer.php'; ?>