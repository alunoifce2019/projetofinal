<?php
echo "
Contact Section
    ============================-->
    <section id='contact'>
      <div class='container-fluid'>
        <div class='section-header'>
          <h3>Contato</h3>
        </div>

          <div class='col-lg-6'>
            <div class='row'>
              <div class='col-md-5 info'>
                <i class='ion-ios-location-outline'></i>
                <p>Br 060 - Nossa Senhora Aparecida vila - aroeira</p>
              </div>
              <div class='col-md-4 info'>
                <i class='ion-ios-email-outline'></i>
                <p>info@example.com</p>
              </div>
              <div class='col-md-3 info'>
                <i class='ion-ios-telephone-outline'></i>
                <p>(88) 3565-1221</p>
              </div>
            </div>
            <div class='form'>
              <div id='sendmessage'>Your message has been sent. Thank you!</div>
              <div id='errormessage'></div>
              <form action='' method='post' role='form' class='contactForm'>
                <div class='form-row'>
                  <div class='form-group col-lg-6'>
                    <input type='text' name='name' class='form-control' id='name' placeholder='Your Name' data-rule='minlen:4' data-msg='Please enter at least 4 chars' />
                    <div class='validation'></div>
                  </div>
                  <div class='form-group col-lg-6'>
                    <input type='email' class='form-control' name='email' id='email' placeholder='Your Email' data-rule='email' data-msg='Please enter a valid email' />
                    <div class='validation'></div>
                  </div>
                </div>
                <div class='form-group'>
                  <input type='text' class='form-control' name='subject' id='subject' placeholder='Subject' data-rule='minlen:4' data-msg='Please enter at least 8 chars of subject' />
                  <div class='validation'></div>
                </div>
                <div class='form-group'>
                  <textarea class='form-control' name='message' rows='5' data-rule='required' data-msg='Please write something for us' placeholder='Message'></textarea>
                  <div class='validation'></div>
                </div>
                <div class='text-center'><button type='submit' title='Send Message'>Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #contact -->
";
?>