<?php get_header(); ?>



<div class="row">
  <div class="col-md-6">
    <h2>Search Results</h2>
  </div>
  <div class="col-md-6">
    <?php get_search_form(); ?>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-md-12">


            <?php if (have_posts()) : ?>


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

                <?php while (have_posts()) : the_post(); ?>

                        <tr>

                        <!--Icon placeholder-->
        <!--            <td><?php echo types_render_field("logo"); ?></td> -->
                        <td><div style="line-height: 0px"><a target="_blank" href=""><img src="http://www.findme4u.com/business/assets/icons/restaurant@2X.png" height="35" border="0" width="35"></a></div><div style="float: left; padding-top: 0px; padding-bottom: 0px;"><p style="font-size: 10px; color: #76838b;"></p></div></td>

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

<!--         <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div> -->


        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</br></br></br></br><hr><br></p>
        <?php endif; ?>

  </div>
</div>


    <div class="row">
      <div class="col-md-4">
        <div class="jumbotron">
        <a href="#">
        <p>Visit this Week's Featured New Businesses</p>
        </a>
      </div>
     </div>

      <div class="col-md-4">
        <div class="jumbotron">
        <a href="#">
        <p>Visit this Week's Featured New Businesses</p>
        </a>
       </div>
      </div>

      <div class="col-md-4">
        <div class="jumbotron">
        <a href="#">
        <p>Visit this Week's Featured New Businesses</p>
        </a>
      </div>
      </div>
   </div>


<?php get_footer(); ?>