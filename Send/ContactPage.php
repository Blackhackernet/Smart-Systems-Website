<!-- Contact-->

        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you..</h3>
                </div>
               
             <form action="Emailing.php" method="POST" class= form>
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <div class="md-form mb-0">
                                <Input type ="text" name="name"  id="name" class="form-control" placeholder= "Your name"tabIndex="1"style="height:50px" rows="2" required></Input>
                            
                                </div>
                                <!-- Name input--
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div--->
                            </div>
                            <div class="form-group">
                                <!-- Email address input--
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div--->
                                <div class="md-form mb-0">
                            <Input type ="email" name="email" id="email" class="form-control" placeholder= "Your email"tabIndex="2"style="height:50px" rows="2" required></Input>
                            
                        </div>
                            </div>
                             <div class="form-group">
                                <!-- Email address input--
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div--->
                                <div class="md-form mb-0">
                            <Input type ="Telephone" name="Telephone" id="Telephone" class="form-control" placeholder= "Your  Contact"tabIndex="2"style="height:50px" rows="2" required></Input>
                            
                        </div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input--
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div-->
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="md-form">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *"style="height:190px" rows="2" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <br/>
                        </div>
                    </div>
                    
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                     <div class="text-center text-md-center">
            <input type="submit" value="Send Message" name= "send" class="btn btn-primary">

            </div>
                    <!-- Submit Button-->
                </form>
            </div>
        </section>