   <!-- bagian footer -->
   <footer>
       <div class="container text-center">
           Copyright (c) 2022 - <?= $d->nama ?> | Bojongsari Corp.
       </div>
   </footer>

   <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript">
       var mobileMenu = document.getElementById("mobileMenu")

       function showMobileMenu() {
           mobileMenu.style.display = "block"
       }

       function hideMobileMenu() {
           mobileMenu.style.display = "none"
       }

       //Get the button:
       mybutton = document.getElementById("myBtn");

       // When the user scrolls down 20px from the top of the document, show the button
       window.onscroll = function() {
           scrollFunction()
       };

       function scrollFunction() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
               mybutton.style.display = "block";
           } else {
               mybutton.style.display = "none";
           }
       }

       // When the user clicks on the button, scroll to the top of the document
       function topFunction() {
           document.body.scrollTop = 0; // For Safari
           document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
       }

       $(document).ready(function() {
           // Add smooth scrolling to all links
           $("a").on('click', function(event) {

               // Make sure this.hash has a value before overriding default behavior
               if (this.hash !== "") {
                   // Prevent default anchor click behavior
                   event.preventDefault();

                   // Store hash
                   var hash = this.hash;

                   // Using jQuery's animate() method to add smooth page scroll
                   // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                   $('html, body').animate({
                       scrollTop: $(hash).offset().top
                   }, 800, function() {

                       // Add hash (#) to URL when done scrolling (default click behavior)
                       window.location.hash = hash;
                   });
               } // End if
           });
       });

       $(document).ready(function() {
           $(".preloader").fadeOut();
       })
       
   </script>

   </body>

   </html>