<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); 
			global $post;

            $args = array( 'posts_per_page' => 3,
                            'category'         => '2,3',
                        );

            $myposts = get_posts( $args );
?>

<div class="caption page-wrapper row-fluid">
    <div class="span1 social_icons">
        <a href="https://www.facebook.com/NativeVillageofEyak"><img src='<?php echo get_bloginfo('template_url')?>/images/facebook.png' width='15'/></a>
    </br>
       <a href="http://www.youtube.com/channel/UC-jlbRSLZITwlns22I8ELWg"> <img src='<?php echo get_bloginfo('template_url')?>/images/youtube.png' width='40'/></a>
    </div>
    <div class="double-divider span11">
    			“The Native Village of Eyak Traditional Council is a tribal government that promotes self-determination to Native Village of Eyak tribal members."
    </div>
</div>
<div class="page-wrapper row-fluid">

    <section class="left_column group span8">
      <h4 class="label_color">NEWS:
          <a style="float:right;" href="/category/news/">More stories ></a>
      </h4>
      
      <section id="posts" class="group full_width_background">
      
      
      <?php 
      $countposts = 0;
      foreach( $myposts as $post ) : setup_postdata($post); 
        if ($countposts == 0){
          $countposts++;
      ?>
      
      <article id="post-<?php the_ID(); ?>" class="news no_border clearfix">
       <?php echo the_post_thumbnail( array(100,100) );?>
       
        <header>
          <p class="date_stamp"><?php the_time('F jS, Y'); ?></p>
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </h3>
        </header>
        <section>
          <?php 
          the_excerpt();
          ?>
        </section>

      </article>
      
      <?php }else {?>
          <article id="post-<?php the_ID(); ?>" class="news clearfix">
               <p class="date_stamp"><?php the_time('F jS'); ?></p>
          <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </h5>
      </article>
          
          
          
          
      <?php }
      
            endforeach; ?>


      
      </section>
        <div class="row-fluid">
            <div class="left_column group span8">
                <h4 class="label_color">Native Village of Eyak Community</h4>
                <h5>NVE's services and programs include:</h5>                
        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Ilanka Community Health Center</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
               Ilanka Community Health Center
serves all of Cordova residents and visitors, using
our HRSA funded sliding fee scale and Indian Health Service Compact. Come see us for your primary and urgent care needs.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Behavioral Health is staffed</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
               Our Behavioral Health Services is dedicated to client well-being and is part of Ilanka's holistic health care approach.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Elder Care</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
               Our Elder Care program seeks to enrich and support Tribal elder's lifestyles by offering activities, transportation and home
chore assistance.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Victim Advocacy</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
               NVE offers crisis intervention for domestic violence and advocacy for sexual assault. Look for workshops and other healing opportunites
as they become available.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Housing Rehabilitation</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
               The HUD housing program seeks to assist with providing clean, safe home rehabilitation to eligible Alaska Natives and American Indians.
           </p>
        </div><!--end of row-->
        

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Higher Ed and Vocational scholarships</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              NVE has a higher education and vocational scholarship program that encourages Tribal members to further their education and become
skilled members of the workforce.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Fisheries Research</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              The Copper River fisheries research programs provide valuable data for fisheries sustainablilty management to all users of this resource.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Environmental Mitigation</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              Our environmental mitigation programs identify and mitigate debris and pollutants on eligible sites.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Access Development</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              NVE's capital projects department works towards developing access to lands for activities such as home ownership and oilspill clean up mobilization.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Ilanka Cultural Center and Museum</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              The cultural training facility is available for tribal member use and offers an avenue to keep traditional ways of processing fish and game a part of everyday life.
           </p>
        </div><!--end of row-->
        
        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Indian Child Welfare Act</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              Our Indian Child Welfare Act worker is part of NVE's social services and works closely to align Native interests with child safety.
           </p>
        </div><!--end of row-->

        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Cultural Training</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              The cultural training facility is available for tribal member use and offers an avenue to keep traditional ways of processing fish and game a part of everyday life.
           </p>
        </div><!--end of row-->
        
        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Youth Council</span>

            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
            For more information on Tribal Youth Council or the Parent Advisory Committee, please contact Cheryl Eleshansky at (907) 424-7738 or cheryl@eyak-nsn.gov.
           </p>
        </div><!--end of row-->
        
        <div class="div-table-row group">
            <div class="div-table-td athlete div-table-td-0">	
                <div class="arrow-down"></div>
                <span class="athlete-name">Youth Cultural Camp</span>
            </div>              
        </div> <!-- END OF div-table-row-->
	    
	    <div class="athlete_info hide">   
           <p>
              Miqwanwasaq (little camp) culural camp offers fun, culturally relevant outdoor and craft activities to Tribal youth from mid June through mid August.
           </p>
        </div><!--end of row-->


                
                
                
            </div>
            <div class="group span4" style="margin-top:65px;">
                <div class="border textwidget">
                    <h4>Tribal Members</h4>
                    <ul>
                        <li><a href="mailto:Reyna@eyak-nsn.gov">Get my Tribal ID</a></li>
                        <li><a href="/wp-content/uploads/2013/08/Tribalenrollmentapplication.pdf">Become an enrolled member</a></li>
                        <li><a href="wp-content/uploads/2013/08/CIBapplication.pdf">Get my CIB</a></li>
                        <li><a href="http://dhss.alaska.gov/dph/VitalStats/Pages/default.aspx" target="_blank">Get my Birth Certificate</a></li>
                        <li><a href="http://alaskafisheries.noaa.gov/ram/subsistence/halibut.htm#app">Apply for a halibut subsistence card</a></li>
                        <li><a href="mailto:Reyna@eyak-nsn.gov">Give NVE my email address</a></li>

                    </ul>
                </div>
                 <div class="border textwidget">
                    <h4>Employment</h4>
                    <ul>
                        <li><a href="/jobs/">Current openings</a></li>
                        <li><a href="/wp-content/uploads/2013/08/NVE_app.pdf">Employment applications</a></li>
                        <li><a href="/jobs/#apply">How to apply for a position</a></li>

                    </ul>
                </div>
                 <div class="border textwidget">
                    <h4>Visitors</h4>
                    <ul>
                        <li><a href="/projects/">NVE projects</a></li>
                        <li><a href="http://www.youtube.com/watch?v=_ARwtMBwk3I">Shepard Pt (dvd)</a></li>
                        <li><a href="http://vimeo.com/61858421">Sobriety (dvd)</a></li>
                        <li><a href="sobriety-celebration/">Sobriety Gallery</a></li>
                    </ul>
                </div>


            </div>
        </div>
			<div class="row-fluid " style="margin-top:40px;">
			<div class="span6">
			    <a href="/events">All events</a>
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
			<div class="span6">
			    <h4 class="title_bar">Promo area:</h4>
    			    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
			</div>
		</section>

<?php get_sidebar(); ?>


</div><!-- end of page-wapper -->
<?php get_footer(); ?>
