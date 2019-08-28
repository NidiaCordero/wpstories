<!-- sidebar -->
<aside class="sidebar" role="complementary">

    <div class="sidebar-widget">
        <?php if(function_exists('dynamic_sidebar')) {

    ob_start();
    dynamic_sidebar('zone-widgets-2');
    $sidebar = ob_get_contents();
    ob_end_clean();

    $sidebar_corrected_ul = str_replace("<ul>", '<ul class="categories">', $sidebar);
   
    
    echo $sidebar_corrected_ul;
 
   
  
    } 

  ?>
    </div>
   

</aside>
<!-- /sidebar -->