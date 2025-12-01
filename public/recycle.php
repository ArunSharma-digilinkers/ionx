<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">

    <div class="banner-box">
        <img src="img/pro-banner.png" class="img-fluid">
    </div>


    <div class="recycle-info-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header-box text-center mb-5">
                        <h3>Recycle with Ionx Energy India</h3>
                        <p>At Ionx Energy India, we turn battery waste into renewable value. Our state-of-the-art lithium-ion recycling solutions recover critical materials like lithium, cobalt, and nickel—reducing landfill waste and supporting the global shift to clean energy. With a closed-loop process that maximizes recovery and minimizes harm, we're powering a circular economy, one battery at a time.
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="recycle-img-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="recycle-box mb-5">
                        <h4>Advace iterally developed techology</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi accusamus atque sapiente, odio voluptates unde, autem, iste eum vel dolor porro asperiores beatae nihil?</p>
                    </div>
                    <div class="recycle-box mb-5">
                        <h4>Advace iterally developed techology</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi accusamus atque sapiente, odio voluptates unde, autem, iste eum vel dolor porro asperiores beatae nihil?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 flex-direction">
                    <div class="recycle-img-box">
                    <img src="img/recycle-img.png" class="img-fluid">
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="recycle-box mb-5">
                        <h4>Advace iterally developed techology</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi accusamus atque sapiente, odio voluptates unde, autem, iste eum vel dolor porro asperiores beatae nihil?</p>
                    </div>
                    <div class="recycle-box mb-5">
                        <h4>Advace iterally developed techology</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi accusamus atque sapiente, odio voluptates unde, autem, iste eum vel dolor porro asperiores beatae nihil?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="recycle-form-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 flex-direction">
                    <div class="recycle-form-txt-box">
                        <h5><span>Join the Green Power Revolution!</span></h5>
                        <h3>Recycle Your Lithium-Ion Batteries Today</h3>
                        <p>Every recycled battery helps reduce environmental waste and recover valuable materials.
Take the step toward a cleaner, safer, and more sustainable future. Let’s power tomorrow responsibly — together.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-12">
							<div class="contact-form-wrap">
								<div class="section-title">
									<h1>Get in Touch</h1>
								</div>
								<div class="mrb30">
									<p>
										Please fill out this quick form and we will be in touch with you.
									</p>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<form class="contact-form" action="mail/mail.php" method="POST">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group mrb-small contact-form__group">
														<label class="contact-form__label" for="inputName">First
															Name</label>
														<input type="text" class="form-control contact-form__input"
															id="inputName" name="name"
															placeholder="Enter your first name">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group mrb-small contact-form__group">
														<label class="contact-form__label" for="inputMail">Last
															Name</label>
														<input type="email" class="form-control contact-form__input"
															id="inputMail" name="name"
															placeholder="Enter your last name">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group mrb-small contact-form__group">
														<label class="contact-form__label" for="inputPhone">Mobile
															Number</label>
														<input type="text" class="form-control contact-form__input"
															id="inputPhone" name="phone"
															placeholder="Enter your mobile">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group mrb-small contact-form__group">
														<label class="contact-form__label" for="inputPhone">Your
															Email</label>
														<input type="text" class="form-control contact-form__input"
															id="inputPhone" name="email" placeholder="Enter email">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group mrb-small contact-form__group">
														<label class="contact-form__label" for="inputMsg">Your
															Message</label>
														<textarea class="form-control contact-form__textarea"
															id="inputMsg" name="message"
															placeholder="Write your message" rows="5"></textarea>
													</div>
												</div>
											</div>
											<div class="contact-form__button">
												<button type="submit" class="btn c-btn"
													name="contact_submit">Submit</button>
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>
            </div>
        </div>
    </div>






        </div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>