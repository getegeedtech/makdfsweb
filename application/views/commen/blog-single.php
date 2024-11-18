<?php 
    $blog = $this->userModel->select_blog([$url,1]);

    if($blog->title=="" || $blog->title==null){$data['title'] = "MAKDFS: Best crypto App.";}
    else{$data['title'] = $blog->title;}

    if($blog->discription=="" || $blog->discription==null){$data['desc'] = "Best crypto App.";}
    else{$data['desc'] = $blog->discription;}

    if($blog->keyword=="" || $blog->keyword==null){$data['keyword'] = $blog->title;}
    else{$data['keyword'] = $blog->keyword;}
    
    $data['imgurl'] = $blog->images;
    $data['url'] = base_url().'blog/'.$blog->url;

    $this->load->view('components/header',$data);
?>
<div style="height:150px"></div>


<div class="main-contain">
    <div class="container">
        <img class="img-fluid w-100 mb-5" src="<?php echo $blog->images; ?>" alt="<?php echo $blog->blog_title; ?>">
        <h1 class="mb-4"><?php echo $blog->blog_title ?></h1>
        <p><?php echo $blog->short_description ?></p>
        <p><?php echo $blog->description ?></p>
    </div>

</div>

<?php $this->load->view('components/footer',$data); ?>