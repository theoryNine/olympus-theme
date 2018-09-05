<?php
/*
Template Name: Manifest Template
*/
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container">
      <?php
/*
Surrounding Classes for the site
These are different every theme and help with structure and layout
These could be SPANs or DIVs and with entirely different classes.
*/
?>

<div id="primary" class="site-content">
   <div id="content" role="main">
      <?php
      /*
      Start the Loop
      */
      ?>

      <?php while ( have_posts() ) : the_post(); ?>


      <?php
      /*
      This is the start of the page and also the insertion of the post classes.
      Post classes are very handy to style your forums.
      */
      ?>

   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


   <?php
   /*
   This is the content wrapped in a div
    
   and class to better style the content
   */
   ?>

   <div class="entry-content">
      <?php the_content(); ?>
   </div>

   <!-- .entry-content -->


   <?php
   /*
   End of Page
   */
   ?>

   </article>

   <!-- #post -->
   <?php endwhile; // end of the loop. ?>

   </div>

   <!-- #content -->

   </div>

   <!-- #primary -->


   <?php
   /*
   This is code to display the sidebar and the footer.
    
   Remove the sidebar code to get full-width forums.
    
   This would also need CSS to make it actually full width.
   */
   ?>

<div class="section">
   <div class="manifest">


      <div class="department section">
         <h3>SENIOR STAFF</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/r-o5.png" /></div><div class="mani-field position"><p>Commanding Officer</p></div><div class="mani-field character"><p><a href="/crew/elgor-rae/">Elgor Rae</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/r-o4.png" /></div><div class="mani-field position"><p>Executive Officer</p></div><div class="mani-field character"><p><a href="/crew/marcus-bancroft/">Marcus Bancroft</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/y-o3.png" /></div><div class="mani-field position"><p>Chief Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/crew/victor-chang/">Victor Chang</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/t-o4.png" /></div><div class="mani-field position"><p>Chief Medical Officer</p></div><div class="mani-field character"><p><a href="/crew/talamor-ren/">Talamor Ren</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/t-o4.png" /></div><div class="mani-field position"><p class="second-off">Ship's Counselor<br><span>Second Officer</span></p></div><div class="mani-field character"><p><a href="/crew/gisella/">Gisella</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">
         <h3>FLIGHT CONTROL</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Conn Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
            </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Flight Controller</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>OPERATIONS</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief of Operations</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Operations Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>TACTICAL/SECURITY</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief of Tactical & Security</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Tactical & Security Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>      

      <div class="department section">      
         <h3>ENGINEERING</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Engineer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>SCIENCE</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Science Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>MEDICAL</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Assistant Chief Medical Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/navy_gold/t-o1.png" /></div><div class="mani-field position"><p>Medical Officer</p></div><div class="mani-field character"><p><a href="/crew/quentin-singma/">Quentin Singma</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>INTELLIGENCE</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Deputy Chief Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Intelligence Officer</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>CIVILIANS</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Coming Soon</p></div><div class="mani-field character"><p><a href="/enlist">Position Available</a></p></div>
         </div>
      </div>

      <div class="department section">      
         <h3>RECURRING NPC'S</h3>
         <div class="row">
            <div class="mani-field rank"><img src="/wp-content/themes/olympus/images/pips/blank_officer/black.png" /></div><div class="mani-field position"><p>Coming Soon</p></div><div class="mani-field character"><p>Coming Soon</p></div>
         </div>
      </div>

      </div>
   </div>
</div>

</div>

</body>

<?php get_footer(); ?>