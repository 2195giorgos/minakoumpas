<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Επικοινωνία</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" /> -->
        <!-- Bootstrap JS -->
        
        <link rel="stylesheet" href="ctest.css">

    </head>
    <body>
    <?php include_once('header1.php') ;?> 

        <!-- Contact Us Section -->
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                            <p><b>Bootstrap 4 contact form</b> is designed with a Google map. contact form pages design is created by using Bootstrap and custom CSS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <form id="contact-form" name="contact-form" action="./" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Type Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-light" onclick="sendMail();">Contact Now</button>
                        </form>
                        <div class="status" id=status></div>
                    </div>

                    <div class="col-lg-5">
                        <div class="map">
                            <!-- <iframe src="https://www.google.com/maps/place/%CE%9A%CE%B1%CF%86%CE%AD%2F%CE%A4%CF%83%CE%B9%CF%80%CE%BF%CF%85%CF%81%CE%AC%CE%B4%CE%B9%CE%BA%CE%BF%2F%CE%A4%CE%B1%CE%B2%CE%AD%CF%81%CE%BD%CE%B1+%CE%9C%CE%AD%CE%BB%CE%B1%CE%BD%CE%B4%CF%81%CE%B1/@39.6912176,20.8117048,15z/data=!4m15!1m8!2m7!1zzpXPg8-EzrnOsc-Ez4zPgc65zrE!3m5!2sE92!3s0x135bc208642cb1f1:0xb12fe9e051a067b1!4m2!1d20.8204596!2d39.6911932!3m5!1s0x135be9fb5e66a4bf:0x826d8efa3b0fd93a!8m2!3d39.68478!4d20.817906!15sChTOlc-Dz4TOuc6xz4TPjM-BzrnOsVoWIhTOtc-Dz4TOuc6xz4TPjM-BzrnOsZIBCnJlc3RhdXJhbnSaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUXljMk5RZUZsM0VBRQ" width="100%" height="350" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571289.733943155!2d76.08560099999998!3d29.058775699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e4a4b98404f57%3A0x75ffae70833e8448!2sShahbad%2C%20Haryana%20136135!5e0!3m2!1sen!2sin!4v1594195370933!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('../footer.php') ;?> 

        <!-- End Contact Us Section -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
    </body>
    <script src="jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function() {
            $(document).on('submit', '#contact-form', function() {
            // do your things
            return false;
            });
        }); 
        function sendMail(){
            document.getElementById('status').innerHTML = "Sending...";
            formData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'subject': $('input[name=subject]').val(),
            'message': $('textarea[name=message]').val()
            };


            $.ajax({
                url: "sendmail.php",
                type: "POST",
                data: formData,
                success: function (data, textStatus, jqXHR) {

                    $('#status').text(data.message);
                    if (data.code) //If mail was sent successfully, reset the form.
                    $('#contact-form').closest('form').find("input[type=text], textarea").val("");
                    document.getElementById('status').innerHTML = "";
                    clearFields();
                   

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#status').text(jqXHR);
                }
            });
        }

        function clearFields(){
            document.getElementById('name').value='';
            document.getElementById('email').value='';
            document.getElementById('subject').value='';
            document.getElementById('message').value='';
        }
    </script>

</html>
