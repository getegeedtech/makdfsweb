<?php 
    $data['title'] = "MAKDFS: Blog area.";
    $data['desc'] = "Blog area.";
    $data['imgurl'] = img_url()."assets/images/banner.png";
    $data['url'] = base_url().'blogs';

    $this->load->view('components/header',$data);
    $related= $this->userModel->select_all_blog([1]);
?>
<div style="height:150px"></div>


<div class="main-contain">
    <div class="container">
        <div class="row">
                <?php
                    foreach($related as $user):
                ?>
                <div class="col-xl-4 col-lg-6">
                    <div class="iq-blog-box">
                        <div class="iq-blog-image clearfix">
                            <a href="<?php echo base_url().'blog/'.$user->url ?>"><img class="img-fluid center-block" src="<?php echo $user->images; ?>" alt="<?php echo $user->blog_title; ?>"></a>
                        </div>
                        <div class="iq-blog-detail">
                            <div class="blog-title"> <a href="<?php echo base_url().'blog/'.$user->url ?>"><h5 class="iq-tw-7 iq-mb-10"><?php echo $user->blog_title; ?></h5></a> </div>
                            <div class="blog-content">
                                <p><?php echo substr($user->short_description, 0, 124) ; if(strlen($user->short_description)>124){echo '...';} ?></p>
                            </div>
                            <div class="iq-blog-meta">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("d M Y", strtotime($user->date)); ?></li>
                                    <!-- <li class="list-inline-item"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                    if (!$related){
                        ?>
                            <div class="col-12 text-center">
                                <img height="300px" src="<?php echo img_url()?>assets/img/empaty.gif" alt="starchemistshop no products">
                                <h3 class="text-danger">No any blog found at this time.</h3>
                            </div>
                        <?php
                    }
                ?>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer',$data); ?>