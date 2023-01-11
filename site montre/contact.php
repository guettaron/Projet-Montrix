<?php require 'header.php'; ?>



<div class = "container">      <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez Nous</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter directement.<br>
         Notre équipe reviendra vers vous dans les heures qui suivent pour vous aider.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Nom</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class=""> Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Object</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Votre message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                          
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a href="index.php"><button class="btn btn-primary" >Envoyer</button></a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Paris, CP 75016, FRANCE</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 07 78 02 24 15 </p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>MONTRIX@paris.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>

<?php require 'footer.php'; ?>
          
       
  </body>
  </html>



  
   
  






















<!--Section: Contact v.2-->





      


