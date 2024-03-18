<?php
	include('header.php');
?>

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Do get in touch with us for a delightful & memorable experience</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
						<a href="https://www.google.co.in/maps/place/Meco+Infrastructure+PVT+LTD+(Corporate+Office)/@12.9991327,77.6146755,12z/data=!4m8!1m2!2m1!1smeco!3m4!1s0x0:0x68c353efb75555ab!8m2!3d12.9582019!4d77.5763941"><img src="images/map3.png" style="height:280px;" alt=""></a>
                            <!--iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe-->
                        </div>
                    </div>

                    <div class="col-sm-3 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Registered Ofice : </h5>
                                    <p>BAITULHAMD, No.7, First Floor,</br>
                                    1st Cross, Dispensary Road,</br>
									Kalasipalyam Extension,</br>
									Bangalore 560 002</p>
                                    <p>Phone: +91 80 2561 4487<br>
                                    Email: info@mecoipl.com</p>
                                </address>

                                <address>
                                    <h5>Manufacturing Division :</h5>
                                    <p>Survey No 136, Kithiganur Village,<br>
                                    Bidrahalli Hobli, K R Puram PO, </br>
									Bangalore 560 036</p>                                
                                    <p>Phone: +91 82775 95891<br>
                                    Email: sales@mecoipl.com</p>
                                </address>
                            </li>


                            <!--li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>  -->
                        </ul>
                    </div>
					
					 <div class="col-sm-4 text-center">
                        <div class="gmap">
						<a href="https://www.google.com/maps/place/Meco+Infrastructure+Pvt+LTD/@13.0449437,77.7012913,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae1061696d2c91:0x580f4a7600832e25!8m2!3d13.0449437!4d77.70348?hl=en-GB"><img src="images/map1b.png" style="height:280px;" alt=""></a>
                            <!--iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe-->
                        </div>
                    </div>
					
					
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Send us your requirement and we will get back to you</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="enquiry.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name *</label>
                            <input type="text" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Requirement *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

   
 <?php
	include('footer.php');
?>   