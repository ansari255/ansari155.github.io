<style>
.carousel-indicators li {
  background-color: #999;
  background-color: rgba(70,70,70,0.25);
}

.carousel-indicators .active {
  background-color: #444;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
	background-color: rgba(0,225,0,0.5);
}
</style>
<div class="container" style="margin-top: 50px">
    <div class="row" id="section1">
        <div class="col-md-12">
            <h3 style="color: #EB3B00" class="text-center" data-aos="flip-up" data-aos-duration="1300"><b>Career</b></h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <p class="text-justify">
                We are an odd bunch of brilliant individuals that came together to make your life easy with our wonderful products and solutions. We are always on the lookout of newer, better and much more odd brains to join us in these world changing efforts. If you wish to see us for what we are, get in touch.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <p class="text-justify">
                Right fit would be technology geeks who are quality conscious, product thinkers, business cognizant and smart developers. Someone who breathes technology and possesses an appetite to work on innovations.
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="1500">
            <h4 class="text-primary">Connect With Us For Latest Job Post</h4>
			<div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <form action="" name="frmJob" method="post" enctype="multipart/form-data">
                            <div> <?php echo $message; ?> </div>
                            <div class="form-group mt-2">
                                <label for="name">Full name</label>
                                <input type="text" class="form-control form-control-sm" name="username" placeholder="Full name" required />
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" placeholder="Email" required />
                            </div>
                            <div class="form-group mt-2">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control form-control-sm" name="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-2">
                                <label for="message">Message</label>
                                <textarea name="Message" id="" rows="3" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="myfile" required accept="application/msword, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <label class="custom-file-label" for="customFile">Resume/CV <span style="color:red;">Choose file</span></label>
                            </div>
                            <div> <?php echo $message2; ?> </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-outline-primary" name="sub" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1500">
			<h4 class="text-primary">Recent Placements</h4>
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>                        
					</ul>

				<!-- The slideshow -->
					<div class="carousel-inner">
							<div class="carousel-item active">
									<img src="./images/placed_candidates1.jpg"  alt="" width="100%" height="500" style="opacity: 0.9">
							</div>
							<div class="carousel-item">
									<img src="./images/placed_candidates2.jpg"  alt="" width="100%" height="500">
							</div>
					</div>

				<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
					</a>
			</div>
		</div>
    </div>
</div>