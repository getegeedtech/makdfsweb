<?php 
    $data['title'] = "MAKDFS: Terms and Conditions";
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
                            <h2 class="title-head">terms of <span>services</span></h2>
                            <hr>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url()?>"> home</a></li>
                                <li>terms of services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="terms-of-services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Risk Notice</h3>
                    <p>Bitcoin is a not backed or value guaranteed by any financial institution; when purchasing bitcoins the customer assumes all risk the bitcoins may become worthless in value.  Customers should research and consider the risks before purchasing any bitcoins.  The company makes absolutely no guarantee about the future value of the bitcoins purchased.</p>
                    <h3>Severability</h3>
                    <p>In the event any court shall declare any section or sections of this Agreement invalid or void, such declaration shall not invalidate the entire Agreement and all other paragraphs of the Agreement shall remain in full force and effect.</p>
                    <h3>Customer input errors</h3>
                    <p>It is the sole responsibility of the customer to check the accuracy of information entered and saved on the website.   Account details displayed on the order summary webpage will be the final transfer destination.  In the case that this information is incorrect, and funds are transferred to an unintended destination, the company shall not reimburse the customer and shall not transfer additional funds.  As such customers must ensure the Bitcoin address and bank information they enter is completely correct.</p>
                    <h3>Binding Agreement</h3>
                    <p>The terms and provisions of this Agreement are binding upon Your heirs, successors, assigns, and other representatives. This Agreement may be executed in counterparts, each of which shall be considered to be an original, but both of which constitute the same Agreement.</p>
                    <h3>Expired orders</h3>
                    <p>If the company receives payment for an order that has already expired, the company reserves the right to recalculate the Bitcoin to Thai Baht exchange rate at the time of processing the transfer to the customer.  This may result in the customer receiving less bitcoins or Thai Baht than the original ordered amount.</p>
                    <h3>Choice of Law</h3>
                    <p>This Agreement, and its application and interpretation, shall be governed exclusively by the laws of the State of Georgia, without regard to its conflict of law rules. You consent to the exclusive jurisdiction of the federal and state courts located in or near Atlanta, Georgia for any dispute arising under this Agreement.</p>
                    <h3>Security</h3>
                    <p>We have implemented security measures designed to secure your information from accidental loss and from unauthorized access, use, alteration or disclosure. However, we cannot guarantee that unauthorized persons will never gain access to your information, and you acknowledge that you provide your information at your own risk, except as otherwise provided by applicable law.</p>
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