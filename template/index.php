<?php
/*
Template Name: Homepage
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
      <div class="hero">
         <img src="/wp-content/themes/olympus/images/Centuryaft.jpg" alt="Century-class starship from behind" />
      </div>
      <div class="intro section">
         <h1 class="text-center">welcome to <span class="heavy">OLYMPUS</span></h1>

         <!-- <p>The <span class="heavy">USS Olympus</span>, NCC-79631, is a Play by Forum RPG based out of <a href="http://www.bravofleet.com" target="_blank">Bravo Fleet's</a> <a href="http://www.bravofleet.com/group/task-force-38/" target="_blank">Task Force 38</a>. Operating out of the Gradin Belt deep within the Delta Quadrant and only connected to home by a tenuous and unstable wormhole across the galaxy, the <span class="heavy">Olympus</span> is tasked with bolstering the Federation's foothold in the Delta Quadrant; expanding its presense, preserving peaceful relations with neighbors wherever possible, and furthering Starfleet's goal of exploration and understanding of this mysterious region of space.</p> -->

         <p>The <em>USS Olympus</em>, NCC-79631, is a Play-by-Post RPG based out of <a href="http://www.bravofleet.com" target="_blank">Bravo Fleet's</a> <a href="http://www.bravofleet.com/group/task-force-38/" target="_blank">Task Force 38</a>. 
         Upon arriving in the Delta Quadrant via the Solarian Gate, the <em>Olympus</em> engaged the Borg at the Battle of the Round Table. 
         A furious melee to defend the gateway to the Alpha Quadrant, the battle would cost the lives of countless Starfleet officers. 
         Among them were the Captain of the <em>Olympus</em>, along with several of her staff. Now, the ship and her crew sail the stars in a journey 
         of exploration, discovery, and peacekeeping under the command of <a href="/manifest/elgor-rae">Elgor Rae</a>, all the while keeping an eye on the many maleovolent forces working in the dark recesses of this
         barely explored region of space.</p>

         </div

   </div>
</body>

<?php get_footer(); ?>