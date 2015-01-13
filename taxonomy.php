<?php
/*
Template Name: Listings Page
*/



get_header(); 
?>

        <?php 
        //list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

        $taxonomy     = 'businesstype';
        $orderby      = 'title'; 
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no
        $title        = '';

        $args = array(
          'show_option_all' => '',
          'show_option_none' => __('No categories'),
          'title_li' => __(''),
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title
        );
        ?>

        <ul>
        <?php wp_list_categories( $args ); ?>
        </ul>



        <div class="row">
          <div class="col-md-4">
            <div class="jumbotron">
            <a href="#">
            <p>Visit the Week's Featured New Businesses</p>
            </a>
          </div>
        </div>

          <div class="col-md-4">
            <div class="jumbotron">
            <a href="#">
            <p>Visit the Week's Featured New Businesses</p>
            </a>
          </div>
        </div>

          <div class="col-md-4">
            <div class="jumbotron">
            <a href="#">
            <p>Visit the Week's Featured New Businesses</p>
            </a>
          </div>
        </div>
      </div>

<hr>


<nav class="navbar">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>


    <div class="col-md-6 col-md-push-3 search-column">
       
                    <?php get_search_form(); ?>
               
    </div>


<!--     <div class="col-md-6 col-md-push-3 input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
 -->
  </div><!-- /.container-fluid -->
</nav>






<section id="business-list" class="business-list">

    <div class="panel panel-default">
            
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li>
          <a href="#" role="button" aria-expanded="false">View All</a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">


        <li>
          <ul>




          </ul>
        </li>

<!--             <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Automotive</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Business Support & Supplies</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Computers & Electronics</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Construction & Contractors</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Education</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Entertainment & Media</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Food & Dining</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Health & Medical</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Sports & Fitness</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Home & Garden</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Legal & Financial</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Merchants & Retail</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Personal Care & Services</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Real Estate</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Travel & Transportation</a></li>
            <li><a href="http://192.168.1.10:8888/mainline_wp/category-page">Museums & Galleries</a></li> -->
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Filter by Town <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Bryn Mawr</a></li>
            <li><a href="#">Ardmore</a></li>
            <li><a href="#">Wayne</a></li>
            <li><a href="#">Wynnewood</a></li>
            <li><a href="#">Devon</a></li>
            <li><a href="#">Rosemont</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Villanova</a></li>
            <li><a href="#">Paoli</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->






            <!-- Table -->
            <table class="table">
                <thead class="busn-table">
                  <tr>
<!--                     <td></td> -->
                    <td>Category</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Hours</td>
                    <td>Website</td>
                  </tr>
                </thead>
                <tbody>

          <?php
           $query = new WP_Query( array(

            'post_type' => 'business', 
            'orderby'      => 'name',
            //'businesstype' => 'contractors',
            'posts_per_page' => 3) 

           );
           while ( $query->have_posts() ) : $query->the_post();?>

                <tr>

                <!--Icon placeholder-->
<!--            <td><?php echo types_render_field("logo"); ?></td> -->
                <td>
                <div style="line-height: 0px"><a target="_blank" href=""><img src="http://www.findme4u.com/business/assets/icons/restaurant@2X.png" height="35" border="0" width="35"></a></div><div style="float: left; padding-top: 0px; padding-bottom: 0px;"><p style="font-size: 10px; color: #76838b;"></p></div>
                </td>

                <td><?php echo the_title(); ?></td>
                <td><?php echo types_render_field("phone"); ?></td>
                <td>

                  <?php echo types_render_field("street"); ?></br>
                  <?php echo types_render_field("city"); ?>,
                  <?php echo types_render_field("state"); ?>
                  <?php echo types_render_field("zip"); ?>

                </td>
                <td><?php echo types_render_field("hours"); ?></td>
                <td><?php echo types_render_field("url"); ?></td>

                </tr>

           <?php endwhile; ?>

            </table>
          </div>





<!---UPDATE:  FIX THESE  -->
     <div class="row">
        <div class="col-md-12">

          <ul class="pager">
            <!-- <li class="left"><a href="/art-gallery">back to gallery</a></li> -->
             <?php
             $prev_post = get_adjacent_post(false, '', true);
             $next_post = get_adjacent_post(false, '', false);
             if($prev_post) : 
                $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
                
                <li><a  href="<?php echo $prev_post_url; ?>">Next 3</a></li> 
                
             <?php
             endif;
             if($next_post) : $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
                <li><a  href="<?php echo $next_post_url; ?>">View All</a></li>  <?php
             endif; ?>
          </ul>


        </div>
      </div>







    </section>




<?php get_footer(); ?>

