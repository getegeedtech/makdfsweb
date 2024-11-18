<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(! function_exists('meta_tags')){
    function meta_tags($enable = array('general' => true, 'og'=> true, 'twitter'=> true, 'robot'=> true), $title = '', $desc = '', $imgurl ='', $url = '', $keyword = ''){
        $CI =& get_instance();
        $CI->config->load('seo_config');

        $output = '';

        //uses default set in seo_config.php
        if($title == ''){
            $title = $CI->config->item('seo_title');
        }
        if($desc == ''){
            $desc = $CI->config->item('seo_desc');
        }
        if($keyword == ''){
            $keyword = $CI->config->item('seo_keyword');
        }
        if($imgurl == ''){
            $imgurl = $CI->config->item('seo_imgurl');
        }
        if($url == ''){
            $url = base_url();
        }

        $output .= '<title>'.$title.'</title>';


        if($enable['general']){
            $output .= '<meta name="description" content="'.$desc.'" />';
            $output .= '<meta name="keywords" content="'.$keyword.'" />';
        }
        if($enable['robot']){
            $output .= '<meta name="robots" content="index,follow"/>';

        } else {
            $output .= '<meta name="robots" content="noindex,nofollow"/>';
        }


        //open graph
        if($enable['og']){
            $output .= '<meta property="og:title" content="'.$title.'"/>'
                .'<meta property="og:description" content="'.$desc.'"/>'
                .'<meta property="og:image" content="'.$imgurl.'"/>'
                .'<meta property="og:url" content="'.$url.'"/>';
        }

        //twitter card
        if($enable['twitter']){
            $output .= '<meta name="twitter:card" content="summary"/>'
                .'<meta name="twitter:title" content="'.$title.'"/>'
                .'<meta name="twitter:url" content="'.$url.'"/>'
                .'<meta name="twitter:description" content="'.$desc.'"/>'
                .'<meta name="twitter:image" content="'.$imgurl.'"/>';
        }

        $output .= '<link rel="image_src" href="'.$imgurl.'">';
        $output .= '<link rel="canonical" href="'.$url.'" />';
        
        echo $output;

    }
}