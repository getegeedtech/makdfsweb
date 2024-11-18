<?php 
    $data['title'] = "MAKDFS: Contact Us";
    $data['desc'] = "Best crypto curency trading platform.";
    $data['keyword'] = "";
    $data['imgurl'] = base_url()."assets/images/blog/blog-post-small-3.jpg";
    $data['url'] = base_url();

    $this->load->view('components/header',$data);
?>

<div style="height:150px"></div>
    <section id="contact-us" class="contact-us overview-block-pt pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form id="contact" method="post">
                        <div class="heading-title left">
                            <small class="iq-font-green">Contact With Us</small>
                            <h2 class="title iq-tw-6">Contact MAKDFS</h2>
                        </div>
                        <div class="contact-form">
                            <div class="section-field">
                                <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                            </div>
                            <div class="section-field">
                                <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                            </div>
                            <div class="section-field">
                                <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                            </div>
                            <div class="section-field textarea">
                                <textarea id="contact_message" class="input-message require" placeholder="Comment*" rows="5" name="message"></textarea>
                            </div>
                            <div class="section-field iq-mt-20">
                                <div class="g-recaptcha" data-sitekey="6Lc5XV4UAAAAAJzUmGomye9Peru8lXyzT22FH0lX"></div>
                            </div>
                            <div class="d-block text-center">
                                <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Send Message</button>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                                <strong>Thank You, Your message has been received.</strong>.
                                <button id="send" type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 iq-pl-50">
                    <div class="heading-title left iq-mt-30">
                        <small class="iq-font-green">JUST ONE E-MAil</small>
                    </div>
                    <p>Please contact our dedicated support team using the 'Contact Us' feature for prompt assistance with inquiries or requests to delete your personal data.</p>
                    
                    <div class="iq-contact-box-01 iq-mt-40">
                        <div class="iq-icon yellow-bg">
                            <i aria-hidden="true" class="la la-envelope-o"></i>
                        </div>
                        <div class="contact-content">
                            <h5 class="iq-tw-6">Mail</h5>
                            <span class="lead iq-tw-6">info@makdfs.com</span>
                            <p class="iq-mb-0">24 X 7 online support</p>
                        </div>
                    </div>
                    <ul class="info-share">
                        <li><a href="https://www.facebook.com/makdfs0"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/makdfs"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/makdfs0"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mak-dfs-264436297/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/@MAKDFS"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('components/footer',$data); ?>
