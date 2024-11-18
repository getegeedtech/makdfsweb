<?php 
    $data['title'] = "MAKDFS: About us";
    $data['desc'] = "Best crypto curency trading platform.";
    $data['keyword'] = "";
    $data['imgurl'] = base_url()."assets/images/blog/blog-post-small-3.jpg";
    $data['url'] = base_url();

    $this->load->view('components/header',$data);
?>

<div style="height:150px"></div>
        <section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<div class="row text-center">
							<div class="col-xs-12">
								<h2 class="title-head">About <span>Us</span></h2>
								<hr>
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url()?>"> home</a></li>
									<li>About</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="about-page">
            <div class="container">
                <div class="row about-content">
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="<?php echo img_url()?>assets/images/about-us.png" alt="about us">
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-6">
						<div class="feature-about">
							<h3 class="title-about">WE ARE MAKDFS</h3>
							<p>A place for everyone who wants to simply buy and sell Bitcoins. Deposit funds using your Visa/MasterCard or bank transfer. Instant buy/sell of Bitcoins at fair price is guaranteed. Nothing extra. Join over 700,000 users from all over the world satisfied with our services.</p>
						</div>
						<div class="feature-about">
							<h3 class="title-about risk-title"><i class="fa fa-warning"></i> risk warning</h3>
							<p>Bitcoin is not legal tender and is not backed by any government. Accounts and value balances are not subject to any government backed deposit insurance or any other government protections.</p>
						</div>
						<a class="btn btn-primary btn-services" href="services.html">Our services</a>
                    </div>
                </div>
        </section>
        
        <section class="facts">
			<div class="container">
				<div class="row text-center facts-content">
					<div class="text-center heading-facts">
						<h2>MAKDFS<span> numbers</span></h2>
						<p>leading cryptocurrency exchange since day one of Bitcoin distribution</p>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6 fact">
						<h3>$77.45B</h3>
						<h4>market cap</h4>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6 fact fact-clear">
						<h3>165k</h3>
						<h4>daily transactions</h4>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6 fact">
						<h3>1726</h3>
						<h4>active accounts</h4>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6">
						<h3>17</h3>
						<h4>years on the market</h4>
					</div>
					<div class="col-xs-12 buttons">
						<a class="btn btn-primary btn-pricing" target="_blank" href="https://play.google.com/store/apps/details?id=makdfs.com">Download App</a>
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