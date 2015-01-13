<?php get_header(); ?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
</br>
  <div class="row">

    <!--First Column-->
    <div class="col-md-6">
        <div class="jumbotron jumbo-main">
        <!-- <a href="#"> -->
        <p>**This Week's Featured Business**</p>
        <!-- </a> -->
      </div>
    </br>
      <div class="jumbotron jumbo-main">
        <!-- <a href="#"> -->
        <p>**This Week's Featured Business**</p>
        <!-- </a> -->
      </div>
    </div>
      

    <!--Second Column-->
    <div class="col-md-6">

        <div class="row">
          <h3 class="h3-header">Start Browsing</h3>
          <p>Select a city to browse the Business Directory for local businesses and services.</p>
        </div>

        <div class="row">
          <!-- <div class="col-md-6 business-column"> -->
               <ul class="business-list"> 

                  <?php
                  $taxonomy     = 'town';
                  $orderby      = 'title'; 
                  $show_count   = 0;      // 1 for yes, 0 for no
                  $pad_counts   = 0;      // 1 for yes, 0 for no
                  $hierarchical = 1;      // 1 for yes, 0 for no
                  $title        = '';

                  $args = array(
                    'show_option_all' => '',
                    'show_option_none' => __('No categories'),
                    'title_li' => __(''),
                    'hide_empty' => '0',
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title
                  );  

                    wp_list_categories($args); 




                    // NEED TO SORT INTO 2 COLUMNS 
                    $count = 0;

                        foreach ( $args['taxonomy'] as $town ) {
                           $count++;
                           if ($count <= 11) { ?>
                              <div class='col-md-6'>
                                 <ul>
                                  <?php echo wp_list_categories($args['taxonomy']); ?>
                           <?php } elseif ($count > 11) { ?>
                                 </ul>
                              </div>
                              <div class='col-md-6'>
                                 <ul>
                           <?php 
                           echo wp_list_categories($args['taxonomy']);
                          }  ?>
                           </ul>
                        </div>
                     <?php }
                  ?>
              </ul>

        </div>




</br>
  <div class="row">
		<div class="col-md-12 search-column">
            <!-- Collect the nav links, forms, and other content for toggling -->
              <p class="search-header">Search the Local Directory</p>

                <div class="main-page-search">
                    <?php get_search_form(); ?>
                </div>
      </div>
    </div><!-- /.row -->
 </div><!-- /.col-6-md -->


</div><!-- /.row -->



<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>



</br></br></br>



<div class="row">
    <div class="col-md-2">

    <ul class="nav nav-list main-category-menu">  
      <li class="nav-header">Category</li>  


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
        'hide_empty' => '0',
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title
      );
      ?>

      <?php wp_list_categories( $args ); ?>

    </ul>
  </div>



<div class="col-md-10">
  <section id="business-list" class="business-list">

    <!-- Business Listings Table -->
    <table class="table">
        <thead class="busn-table">
          <tr>
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
            'orderby' => 'rand',
            //'businesstype' => 'contractors',
            'posts_per_page' => 50) 

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

    </section>
  </div>
</div>


<hr>

    <section>
      <div class="row">
        <div class="col-md-6">
          <h4>Local Businesses</h4>
          <p>Place your business in front of the thousands of
          business decision makers who read bizjournals.com
          everyday.</p>
          <a href="http://192.168.1.10:8888/mainline_wp/contact-page">Learn More About Our Business Listings</a>
            </div>
                <div class="col-md-6">
          <h4>Community</h4>
          <p>Share your experiences within our community of business professionals. 
            Read up on what other people are saying about businesses in your local market.</p>
          </div>
    </section>



<?php get_footer(); ?>

