<?php 
/**
 * plugin name: بنر تبلیغاتی
 * author: abdulrahman mahdawi
 * uri author: https://www.mister-mahdawi.site
 * description: با این افزونه شما می توانید یک بنر تبلیغاتی در سایت تان قرار بدهید. لذت ببرید.
 */
define('mahdawi_images',plugin_dir_url(__FILE__).'assets/images/');


 function MHshow_banner(){
$imagead= mahdawi_images . 'netbargbanner.gif';
$imageurl= 'https://www.mister-mahdawi.site';
?>
<!-- this is for test-->
<style>
img{
    display: block;
    position: fixed;
    left: 10px;
    /* right: 10px; */
    bottom: 10px;
}
</style>
<a href="<?php echo $imageurl;?>" target="_blank">
<img src="<?php echo $imagead;?>">
 </a>
<?php
 }
 add_action('wp_footer','MHshow_banner');
