<div class="container-fluid mt-3 bg-dark text-white">
                <div class="row" style="padding-top: 20px">
                        <div class="col-md-4"></div>
                        <div class="col-md-4" style="text-align: center">
                                <h3 id="facebookId" data-aos="zoom-in-down"><b>Follow Us</b></h3>
                                <ul class="list-inline mt-4" data-aos="zoom-in-up">
                                        <a href="https://www.facebook.com/perceptinfosystem/" class="">
                                                <i class="fab fa-facebook-f icons"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/company/13430868/admin/" class="">
                                                <i class="fab fa-linkedin-in icons"></i>
                                        </a>
                                        <a href="https://www.instagram.com/hrperceptconsultants/?hl=en" class="" >
                                                <i class="fab fa-instagram icons"></i>
                                        </a>
                                        <a href="https://twitter.com/PerceptInfoC">
                                            <i class='fab fa-twitter icons'></i>
                                        </a>
                                        <a href="https://aboutme.google.com/u/0/">
                                            <i class='fab fa-google-plus-g icons'></i>
                                        </a>
                                        <a href="https://www.youtube.com/channel/UCWXqA6JyNnbl9rdtaNRQe0w?view_as=subscriber">
                                            <i class='fab fa-youtube icons'></i>
                                        </a>
                                </ul>

                        </div>
                        <div class="col-md-4"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1"></div>   
                    <div class="col-md-3 text-center mt-1" data-aos="fade-down">
                        <span><i class="fas fa-paper-plane icon"></i> hrperceptconsultants@gmail.com</span>
                    </div>
                    <div class="col-md-4 text-center mt-1" data-aos="fade-down">
                        <span><i class="fas fa-phone icon"></i> +91 8208970766 / 7414977373</span>
                    </div>
                    <div class="col-md-3 text-center mt-1" data-aos="fade-down">
                        <p><span><i class="fas fa-map-marker-alt icon"></i></span>
                            20/12, Akar Builders, Opposite Dalal Nursing Home, Near Byramji Town, Sadar, Nagpur, Maharashtra 440001
                        </p>
                    </div>
                    <div class="col-md-1"></div>   
                </div>
        </div>
        <div class="container-fluid mt-4 mb-4">
                <div class="row">
                        <div class="col-md-4">
                                <img src="./images/perceptlogo.png" alt="logo" style="width: 130px; height: 45px" />
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 mt-3">
                                <p>Copyright <span><i class="far fa-copyright"></i></span> 2019, Designed By <span style="color: #EB3B00"><b>Percept Infosystem</b></span> </p>
                        </div>
                </div>
        </div>
        <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/aos.js"></script>
		<script type="text/javascript" src="./js/owl.carousel.js"></script>
        <script>
				$(document).ready(function(){
					$("#owl-demo").owlCarousel({
						item:5,
						singleItem: true,
						autoplay: true,
						autoplayTimeout: 1000,
						loop: true,
						nav: true,
						responsiveClass: true,
						responsive:{
							0:{
								items: 1,
								dots: false
							},
							600:{
								items: 3,
								dots: false
							},
							1200:{
								items: 5
							}
						}
					});
				});
		</script>
		<script>
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll > 50) {
                        $('#navScrollId').css("background", "linear-gradient(#D4D4D4, white)");
                    } else {
                        $('#navScrollId').css("background", "#cecdcd");
                    }
                });
            
                AOS.init({
                  duration: 700,
                });
            
                $(".custom-file-input").on("change", function() {
                  var fileName = $(this).val().split("\\").pop();
                  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
        </script>
</body>
</html>