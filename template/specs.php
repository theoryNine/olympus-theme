<?php
/*
Template Name: Ship Specs Template
*/
?>

<?php

get_header(); ?>

<body <?php body_class(); ?>>
   <div class="container specs">
      <div class="hero"><img src="/wp-content/themes/olympus/images/centurymsd.jpg" /></div>
      <div class="intro section">
         <h1 class="text-center">century-class <span class="heavy">SPECIFICATIONS</span></h1>
         <p>The <span class="heavy">Olympus</span> is a <em>Century-class</em> starship, built to help return Starfleet to its roots of exploration and discovery, while having the teeth to defend its borders. <em>The Century-class</em> ship was built to nearly match the size of her larger <em>Sovereign-class</em> counterpart while requiring significantly less crew and manpower through advanced automation.</p>
      </div>
      <div class="text-center section subnav-section">
         <div class="subnav"><h3><a href="#gallery">gallery</a></h3></div>
         <div class="subnav"><h3><a href="#athena">athena</a></h3></div>
         <div class="subnav"><h3><a href="#specifications">specifications</a></h3></div>
         <div class="subnav"><h3><a href="#layout">deck layout</a></h3></div>
      </div>
      <div class="text-center section gallery" id="gallery">
            <div>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="entry">
                        <?php the_content(); ?>
                  </div><!-- entry -->
                  <?php endwhile; ?>
            <?php endif; ?>
            </div>
      </div>

      <div class="section athena" id="athena"><h1 class="text-center">introducing: <span class="heavy">ATHENA</span></h1>
         <p><strong>Athena</strong> is the Olympus' advanced computer personality. The <em>Century-class</em> starship was constructed to be similar in size to the <em>Sovereign-class</em> starship while requiring a significantly smaller crew. This is accomplished through advanced automation systems under the direction of <strong>Athena</strong>. Under the most dire of circumstances <strong>Athena</strong> is capable of fully controlling the <em>Olympus</em>, providing an additional safeguard in the event the crew is incapacitated.
      </div>

      <div class="section specifications" id="specifications"><h1 class="text-center">ship <span class="heavy">SPECIFICATIONS</span></h1>
         <h3>Ship Specifications</h3>
            <h4>Basic Information</h4>
               <p><strong>Role:</strong> Explorer<br>
               <strong>Dimensions:</strong> 715 meters (L) x 282 meters (W) x 90 meters (H)<br>
               <strong>Decks:</strong> 24<br>
               <strong>Expected Duration:</strong> 100 years<br>
               <strong>Time Between Resupply:</strong> 10 years<br>
               <strong>Expected Refit Cycle:</strong> 20 years</p>
            <h4>Crew Compliment</h4>
               <p>
                  <strong>Total Crew:</strong> 730
                  <ul>
                     <li>175 Offices</li>
                     <li>555 Enlisted</li>
                     <li>20 Civilians</li>
                  </ul>
               </p>
            <h4>Propulsion</h4>
               <p><strong>Thrusters:</strong> RCS Thrusters<br>
               <strong>Sublight Speed:</strong> 0.25c<br>
               <strong>Warp Speed</strong>
                  <ul>
                     <li><strong>Cruising Speed:</strong> Warp 8</li>
                     <li><strong>Maximum Warp:</strong> Warp 9</li>
                     <li><strong>Emergency Warp:</strong> Warp 9.975</li>
                  </ul>
            <h4>Tactical Systems</h4>
               <p>Energy Weapons
                  <ul>
                     <li>9x Type XIII Phaser Arrays</li>
                  </ul>
               </p>
               <p>Projectile Weapons
                  <ul>
                     <li>2 Forward Launchers</li>
                     <li>2 Aft Launchers</li>
                     <li>400 Quantum Torpedoes</li>
                     <li>500 Photon Torpedoes</li>
                     <li>15 Tricobalt Devices</li>
                  </ul>
               </p>
               <p>Defensive Systems
                  <ul>
                     <li>Regenerative Shielding System</li>
                  </ul>
               </p>
            <h4>Auxiliary Craft</h4>
            <p><strong>Shuttlebays:</strong> 3<br>
            Support Craft:
               <ul>
                  <li><strong>Shuttles:</strong> 12 (8x <a href="http://wiki.bravofleet.com/index.php?title=Type_8_shuttlecraft" target="_blank">Type-8</a>, 4x <a href="http://wiki.bravofleet.com/index.php?title=Type_11_shuttlecraft" target="_blank">Type-11</a>)</li>
                  <li><strong>Runabouts:</strong> 3 (1x <a href="http://wiki.bravofleet.com/index.php?title=Arrow_class" target="_blank">Arrow-class</a>, 1x <a href="http://wiki.bravofleet.com/index.php?title=Argo_class" target="_blank">Argo-class</a>, 1x <a href="http://wiki.bravofleet.com/index.php?title=Delta_class" target="_blank">Delta-class</a>)</li>
               </ul>
            </p>
      </div>

      <div class="section layout" id="layout"><h1 class="text-center"><span class="heavy">DECK</span> layout</h1><br>
         <ul>
            <li>Deck 1: Bridge, Captain’s ready room, XO’s Office, Main Conference Room</li>
            <li>Deck 2: VIP Quarters, VIP conference lounge, Senior officers’ quarters</li>
            <li>Deck 3: Main impulse engine bay upper level, Officers quarters, Forward Observation lounge</li>
            <li>Deck 4: Main impulse engine mid-level, Officer quarters, Transporter rooms 1 and 2</li>
            <li>Deck 5: Main impulse engine lower level, Impulse reactor maintenance bay, Officer Quarters, Officers mess, Transporter machine rooms 1 and 2, Senior enlisted officers’ quarters</li>
            <li>Deck 6: Holo decks 1 and 2, Main sick bay, Chief medical officer’s office, Medical support labs, Enlisted officers’ quarters, Transporter rooms 3 and 4</li>
            <li>Deck 7: Warp pylon impulse pod upper level (port and starboard), Aft torpedo launchers 1 and 2, Torpedo storage, Enlisted officers’ quarters, Enlisted officers mess, Stellar cartography upper level, Transporter machine rooms 3 and 4</li>
            <li>Deck 8: Warp pylon impulse pod lower level (port and starboard), Chief Science officer’s office, Science labs, Stellar cartography mid-level</li>
            <li>Deck 9: Shuttle bays 1 and 2 upper level, Shuttle bay 1 and 2 control rooms, Deuterium storage tanks upper level, Stellar cartography lower level</li>
            <li>Deck 10: Shuttle bays 1 and 2 mid-level, Shuttle bay observation galleries, Deuterium storage tanks lower level, Deuterium injectors, Main computer core upper level 1</li>
            <li>Deck 11: Shuttle bays 1 and 2 main level, Chief Security/Tactical officer’s office, Brig, Security Briefing room, Main armory, Main computer core upper level 2</li>
            <li>Deck 12: Shuttle bays 1 and 2 shuttle storage and maintenance, Shuttle bay 3 upper level, Shuttle bay 3 control room, Main computer core mid-level 1</li>
            <li>Deck 13: Shuttle bay 3 lower level, Main computer core mid-level 2, Arboretum upper level</li>
            <li>Deck 14: Lateral sensor arrays, Docking ports (forward, port, and starboard), Shuttle bay 3 shuttle storage and maintenance, Main computer core lower level 1, Arboretum mid-level, Arboretum observation gallery</li>
            <li>Deck 15: Main computer core lower level 2, Guest Quarters, Holo decks 3 and 4, Arboretum lower level</li>
            <li>Deck 16: Forward torpedo launchers 1 and 2, torpedo storage, Secondary computer core upper level 1</li>
            <li>Deck 17: Main deflector dish bay upper level 1, Secondary Computer core upper level 2</li>
            <li>Deck 18: Main deflector dish bay upper level 2, Secondary Computer core mid-level 1</li>
            <li>Deck 19: Main deflector dish bay upper level 3, Main engineering, Chief engineer’s office, Secondary computer core mid-level 2</li>
            <li>Deck 20: Main deflector dish bay mid-level 1, Engineering support labs, Secondary computer core lower level 1</li>
            <li>Deck 21: Main deflector dish bay mid-level 2, Deflector control, Industrial replicators, Secondary computer core lower level 2</li>
            <li>Deck 22: Main deflector dish bay lower level 1, Replicator consumables storage</li>
            <li>Deck 23: Main deflector dish bay lower level 2 Cargo bays 1 and 2</li>
            <li>Deck 24: Main deflector dish bay upper level 3, Cargo bays 3 and 4, Cargo transporters 1 and 2</li>
            <li>Deck 25: Cargo bays 5 and 6, Cargo transporter machinery 1 and 2</li>
            <li>Deck 26: Forward torpedo launchers 3 and 4, Torpedo storage</li>
            <li>Deck 27: Aft torpedo launchers 3 and 4, Torpedo storage</li>
            <li>Deck 28: Antimatter pods, Antimatter generator, Antimatter injectors</li>
            <li>Deck 29: Warp core ejection hatch, Antimatter pod ejection hatch</li>
         </ul>
      </div>


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

</div>
</body>

<?php get_footer(); ?>