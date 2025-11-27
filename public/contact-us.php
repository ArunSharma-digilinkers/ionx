<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header class="tn-header">
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">


		<div class="main-cover">

			<div class="page-banner-wrap page-banner-fixed-contact">
				<div class="container">
					<h2>Contact us</h2>
				</div>
			</div>



			<section class="form-section section-entry">
				<div class="container">
					<div class="row">
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



						<div class="col-lg-6 col-md-6 col-sm-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6984.5107953669285!2d77.65666300000001!3d28.920466999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c640c937e3855%3A0x904533d92b6b06c3!2sVoltaic%20Industries%20Pvt.Ltd%20(Vacuna%20Battery)%20-%20Battery%20Manufacturer%20in%20Meerut!5e0!3m2!1sen!2sin!4v1753158849357!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							
						</div>

					</div>

				</div>
			</section>


			<div class="contact-info-wrapper section-entry">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="cont-info-box">
								<h3>We're Here to Help – Contact Us Anytime</h3>
								<p>Have a question, need support, or want to explore how we can work together? Our team is just a message away. Whether it's a quick inquiry or a detailed request, we’re committed to providing prompt, helpful responses. Fill out the form, give us a call, or drop us an email — we’d love to hear from you!</p>
								<ul class="contact-list">
									<li><i class="fa-solid fa-phone"></i><a href="tel:+91 01123456789"> +91 01123456789</a></li>
									<li><i class="fa-solid fa-phone"></i><a href="tel: 01123456789"> +91 01123456789</a></li>
									<li><i class="fa-solid fa-envelope"></i><a href="mailto:iinfo@ionex.com">
											info@ionex.com</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>