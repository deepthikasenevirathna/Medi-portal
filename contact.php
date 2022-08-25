<?php include('includes/header.php'); ?>

<!-- Breadcrumb -->
<div class="container-fluid page-header medi_breadcrumb mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url(img/header_img_contact.jpg) center center no-repeat">
	<div class="container">
		<h3 class="animated slideInDown mb-2 br_title">Contact Us</h3>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb mb-0">
				<li class="breadcrumb-item"><a class="br_link" href="#">Home</a></li>
				<li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
			</ol>
		</nav>
	</div>
</div>


<!-- Page Coontent -->
<div class="container medi py-2 wow fadeInUp" data-wow-delay="0.1s">
	<div class="row mb-5" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
		<div class="col-lg-6 col-md-12">
			<div class="team-item corner_rad medi_shadow m_card text-center">
				<div class="p-2">
					<h4>Customer Support</h4>
				</div>
				<div class="p-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada tincidunt facilisis. Nulla sem justo, </div>
				<div class="text-center p-2">Email: info@mediportal.au</a> </div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="team-item corner_rad medi_shadow m_card text-center">
				<div class="p-2">
					<h4>Talk to Sales</h4>
				</div>
				<div class="p-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada tincidunt facilisis. Nulla sem justo, </div>
				<div class="text-center p-2">Email: info@mediportal.au<br>Phone: +61 4 123 45678<br><a href="#">Click here to submit contact form</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row g-5">
		<div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
			<form>
				<div class="row g-3">
					<div class="col-lg-6 col-md-12">
						<div class="form-group">
							<label>Name</label>
							<input type="name" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<label>Service</label>
						<select class="form-select" id="sel1" name="sellist1">
							<option selected>Select Type</option>
							<option>Service 1</option>
							<option>Service 2</option>
							<option>Service 3</option>
						</select>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="form-group">
							<label>Lorem</label>
							<input type="service" class="form-control">
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<label>Message</label>
						<textarea class="form-control" id="message" style="height: 150px"></textarea>
					</div>
					<div class="col-12 d-flex justify-content-end">
						<button class="btn-primary py-1 px-3"> Send </button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
			<div class="position-relative overflow-hidden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383733.7853639724!2d143.54174464976305!3d-37.243296637427456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2slk!4v1661314836786!5m2!1sen!2slk" width="100%" height="390" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
</div>
<?php include('includes/footer.php'); ?>