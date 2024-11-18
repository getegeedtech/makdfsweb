<?php 
    $data['title'] = "MAKDFS: Services";
    $data['desc'] = "Best crypto curency trading platform.";
    $data['keyword'] = "";
    $data['imgurl'] = base_url()."assets/images/blog/blog-post-small-3.jpg";
    $data['url'] = base_url();

    $this->load->view('components/header',$data);
?>

        <section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<div class="row text-center">
							<div class="col-xs-12">
								<h2 class="title-head">our <span>services</span></h2>
								<hr>
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url()?>"> home</a></li>
									<li>services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        
        <section class="services">
			<div class="container">
				<div class="row">
					<div class="col-md-6 service-box">
						<div>
							<img id="download-bitcoin" src="<?php echo img_url()?>assets/images/icons/orange/download-bitcoin.png" alt="download bitcoin">
							<div class="service-box-content">
								<h3>Bitcoin Escrow Service</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-box">
						<div>
							<img id="add-bitcoins" src="<?php echo img_url()?>assets/images/icons/orange/add-bitcoins.png" alt="add bitcoins">
							<div class="service-box-content">
								<h3>Bitcoin Mining</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-box">
						<div>
							<img id="buy-sell-bitcoins" src="<?php echo img_url()?>assets/images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins">
							<div class="service-box-content">
								<h3>Software Development</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-box">
						<div>
							<img id="strong-security" src="<?php echo img_url()?>assets/images/icons/orange/strong-security.png" alt="strong security"/>
							<div class="service-box-content">
								<h3>Bitcoin Transaction</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-box">
						<div>
							<img id="world-coverage" src="<?php echo img_url()?>assets/images/icons/orange/world-coverage.png" alt="world coverage"/>
							<div class="service-box-content">
								<h3>Bitcoin Exchange</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-box">
						<div>
							<img id="payment-options" src="<?php echo img_url()?>assets/images/icons/orange/payment-options.png" alt="payment options"/>
							<div class="service-box-content">
								<h3>Bitcoin Investment</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="action-text">
								<h2>Get Started Today With Makdfs</h2>
								<p class="lead">Open account for free and start trading Makdfs!</p>
							</div>
							<p class="action-btn"><a class="btn btn-primary" target="_blank" href="https://play.google.com/store/apps/details?id=makdfs.com">Register Now</a></p>
						</div>
					</div>
				</div>
			</div>
        </section>

<?php $this->load->view('components/footer',$data); ?>