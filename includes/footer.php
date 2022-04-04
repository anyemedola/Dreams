
</body>



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Javascript Files -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="js/scripts.js"></script>
	<!-- Carousel Features 1 -->
	<script src="js/carousel-features1.js"></script>
	<!-- Carousel App Screen 1 -->
	<script src="js/carousel-appscreen1.js"></script>
	<!-- Carousel Testimonial 1 -->
	<script src="js/carousel-testimonial1.js"></script>


    <input type="hidden" id="title" value="<?php echo $_SESSION['aviso-title']; ?>" />
    <input type="hidden" id="text" value="<?php echo $_SESSION['aviso-text']; ?>" />
    <input type="hidden" id="type" value="<?php echo $_SESSION['aviso-type']; ?>" />

    <?php if(isset($_SESSION['aviso'])): ?>
    <script>
        var title= $('#title').val();
        var text= document.getElementById('text').value;
        var type= document.getElementById('type').value;
            
        Swal.fire(
                title,
                text,
                type
            )
    </script>

    <?php
    unset($_SESSION['aviso']);
    unset($_SESSION['aviso-title']);
    unset($_SESSION['aviso-text']);
    unset($_SESSION['aviso-type']);
    endif;
    
    ?>
  <script>
        $('.esqueci_senha').click(function(){
            $( ".form2" ).removeClass('hide');
            $( ".loginentrar" ).removeClass('hide');
            $( ".esqueci_senha" ).addClass('hide');
            $( ".form1" ).addClass('hide');
        
        })
   
        $('.loginentrar').click(function(){
            $( ".form1" ).removeClass('hide');
            $( ".esqueci_senha" ).removeClass('hide');
            $( ".loginentrar" ).addClass('hide');
            $( ".form2" ).addClass('hide');
        
        })

        $(document).ready(function() {
            $('#media').carousel({
                pause: true,
                interval: false,
            });
        });
    </script>
</html>