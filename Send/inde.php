<?php include('includes/head.php');?>
<body>
      <!----------Navbar-------------->
      <?php include('includes/nav.php');?>

    <div class= "container">
    <div class= "Contact">
 


<!--Section: Contact v.2-->
        <section class="contact">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="container-text-center">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            
        <form action="Emailing.php" method="POST" class= form>
                <!--Grid row-->
                <div class="row">
                
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <Input type ="text" name="name"  id="name" class="form-control" placeholder= "Your name"tabIndex="1" required></Input>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <Input type ="email" name="email" id="email" class="form-control" placeholder= "Your email"tabIndex="2" required></Input>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
<br>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <Input type ="Telephone" name="Telephone" id="Telephone" class="form-control" placeholder= "Mobile"tabIndex="3" required></Input>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->
<br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <!--<textarea id="message" name="message" id="message" placeholder="Write something.."tabIndex="4"></textarea>---->
                        <textarea type="text" id="message" name="message"placeholder="Write something.."tabIndex="4"style="height:200px" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

           
<br>
            <div class="text-center text-md-left">
            <input type="submit" value="Send" name= "send" class="btn btn-primary">
           
            </div>
            <div class="status"></div>
    
        
                       
            
        <!--Grid column-->

        <!--Grid column-->
        
        <!--Grid column-->
                    
                    </div>
                        
                    </div>
                    
                
</div>
                 

<!--Section: Contact v.2-->
            </form></div>
        
</body>
<?php include('includes/footer.php');?>
