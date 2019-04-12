<?php

/*
Plugin Name: Starter Menu
Plugin URI: http://fullwindsor.co/
Description: A simple WordPress menu
Author: Sean Dennis
Version: 1.0
Author URI: http://fullwindsor.co
*/

  function starterMenu($menu_name) {

    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array());
    $reverse_menuitems = array_reverse($menuitems);
    $queried_object = get_queried_object();
    
    $current_post_type = $queried_object->post_type;
    $current_term = $queried_object->term_id;

    $current_section = explode("/", substr($_SERVER['REQUEST_URI'], 1));

    if ($current_section[1] == 'get-involved') {
      $current_section = $current_section[1];
    }
    elseif ($current_section[0] == 'resource-library' || $current_section[0] == 'ccf-videos' || $current_section[0] == 'resource-category') {
      $current_section = 'learn';
    }
    else {
      $current_section = $current_section[0];
    }

    $count = 0;
    $submenu = false;
    $child = false;
    $parent = false;

    // This loop adds some helpful flags to the menu object

    foreach( $reverse_menuitems as $menuitem ):

      // Check to see if this is a parent

      if ($child == true && $menuitem->menu_item_parent && $previous_parent != $menuitem->menu_item_parent) {

        $menuitem->item_type = 'parent';

        // Indicate a parent has been found

        $parent = true;

        // Reset the child variable

        $child = false;

      }

      // Check to see if this is a child

      elseif ($menuitem->menu_item_parent) {

        $menuitem->item_type = 'child';

        // Set a flag that we just picked up a child

        $child = true;

        // Take note of this child's parent

        $previous_parent = $menuitem->menu_item_parent;

      }

      // Check to see if this is an orphaned parent

      elseif ($parent == false && $child == true) {

        $menuitem->item_type = 'orphaned_parent';

        // Reset the child variable

        $child = false;

      }

      // Check to see if this is a grandparent

      elseif ($parent == true) {

        $menuitem->item_type = 'grandparent';

        // Reset the child variable

        $child = false;

        // Reset the parent flag

        $parent = false;

      }

      // Check to see if this is a childless parent

      else {

        $menuitem->item_type = 'childless_parent';

      }

    endforeach;

    $closing_tags = '';

    if ($menu_name == 'Desktop') {

      foreach( $menuitems as $menuitem ):

        $label = $menuitem->title;
        $attr_title = $menuitem->attr_title;
        $id = $menuitem->ID;
        $url = $menuitem->url;
        $classes = implode(' ',$menuitem->classes);
        $parent = $menuitem->menu_item_parent;
        $xfn = $menuitem->xfn;
        $current = '';

        // Compare current menu item with the current section

        if ($xfn == $current_section) {
          $current = 'current';
        }

        // If we've picked up the news menu item and are on a post

        elseif ($xfn == 'news' && $current_post_type == 'post') {
          $current = 'current';
        }

        // If we've picked up the News menu item and are on a taxonomy page

        elseif ($xfn == 'news' && $current_term && $current_section != 'learn') {
          $current = 'current';
        }

        if ($menuitem->item_type == 'childless_parent') {
          echo '<li class="'.$current.'"><a class="'.$classes.'" href="'.$url.'" title="'.$attr_title.'">'.$label.'</a></li>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'grandparent') {
          echo '<li class="'.$current.'"><a href="'.$url.'" title="'.$attr_title.'">'.$label.'</a><ul class="extensible-list sub" style="background-color: red !important"><li><div class="row no-gutters" style="width:480px;">';
          $grandparent_closing_tags = '</div></li></ul></li>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'parent') {
          echo '<div class="col-6"><ul class="extensible-list"><li class="leader" title="'.$attr_title.'">'.$label.'</li>';
          $open_parent = $menuitems[$count];
          $closing_tags = '</ul></div>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'orphaned_parent') {
          echo '<li class="'.$current.'"><a href="'.$url.'" title="'.$attr_title.'">'.$label.'</a><ul class="extensible-list sub">';
          $closing_tags = '</ul></li>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'child') {
          echo '<li><a href="'.$url.'" title="'.$attr_title.'">'.$label.'</a></li>';

          // Does this child item 1) have menu items that come after it? 2) have siblings?

          if (array_key_exists($count + 1, $menuitems) && $menuitems[ $count + 1 ]->menu_item_parent == $parent) {
            $count++;
            continue;
          }

          // If not, output the closing tags of this child item's parent.

          else {
            echo $closing_tags;
            $closing_tags = '';            
          }

          // Check to see if this item's parent has siblings 

          if (array_key_exists($count + 1, $menuitems) && $open_parent && $menuitems[$count + 1]->menu_item_parent !== $open_parent->menu_item_parent) {

            // Output grandparent closing tags

            echo $grandparent_closing_tags;

            $open_parent = null;

          }

          $count++;

        }

      endforeach; 

    }

    if ($menu_name == 'Mobile') {

      foreach( $menuitems as $menuitem ):

        $label = $menuitem->title;
        $attr_title = $menuitem->attr_title;
        $id = $menuitem->ID;
        $xfn = $menuitem->xfn;
        $url = $menuitem->url;
        $classes = implode(' ',$menuitem->classes);
        $parent = $menuitem->menu_item_parent;

        if ($menuitem->item_type == 'grandparent') {
          echo '<div class="card"><a class="card-header collapse collapsed" id="acc-button-'.$xfn.'" data-toggle="collapse" href="#panel-'.$xfn.'" role="tab" aria-expanded="false" aria-controls="panel-'.$xfn.'" title="'.$attr_title.'"><span class="title">'.$label.'</span></a><div class="collapse" id="panel-'.$xfn.'" role="tabpanel" aria-labelledby="acc-button-'.$xfn.'" data-parent="#mobile-menu-accordion"><div class="card-body bg-dark">';
          $grandparent_closing_tags = '</div></div></div>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'parent') {
          echo '<ul class="extensible-list"><li class="leader">'.$label.'</li>';
          $open_parent = $menuitems[$count];
          $closing_tags = '</ul>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'orphaned_parent') {
          echo '<div class="card"><a class="card-header collapse collapsed" id="acc-button-'.$xfn.'" data-toggle="collapse" href="#panel-'.$xfn.'" role="tab" aria-expanded="false" aria-controls="panel-'.$xfn.'" title="'.$attr_title.'"><span class="title">'.$label.'</span></a><div class="collapse" id="panel-'.$xfn.'" role="tabpanel" aria-labelledby="acc-button-'.$xfn.'" data-parent="#mobile-menu-accordion"><div class="card-body bg-dark"><ul class="extensible-list">';
          $closing_tags = '</ul></div></div></div>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'child') {
          echo '<li><a href="'.$url.'" title="'.$attr_title.'">'.$label.'</a></li>';

          // Does this child item 1) have menu items that come after it? 2) have siblings?

          if (array_key_exists($count + 1, $menuitems) && $menuitems[ $count + 1 ]->menu_item_parent == $parent) {
            $count++;
            continue;
          }

          // If not, output the closing tags of this child item's parent.

          else {
            echo $closing_tags;
            $closing_tags = '';            
          }

          // Check to see if this item's parent has siblings 

          if (array_key_exists($count + 1, $menuitems) && $open_parent && $menuitems[$count + 1]->menu_item_parent !== $open_parent->menu_item_parent) {

            // Output grandparent closing tags

            echo $grandparent_closing_tags;

            $open_parent = null;

          }

          $count++;

        }

      endforeach; 

    }

    if ($menu_name == 'Footer') {

      foreach( $menuitems as $menuitem ):

        $label = $menuitem->title;
        $attr_title = $menuitem->attr_title;
        $id = $menuitem->ID;
        $xfn = $menuitem->xfn;
        $url = $menuitem->url;
        $classes = implode(' ',$menuitem->classes);
        $parent = $menuitem->menu_item_parent;

        if ($menuitem->item_type == 'orphaned_parent') {
          echo '<div class="col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto"><ul class="extensible-list"><li><span class="font-weight-bold mb-2">'.$label.'</span></li>';
          $closing_tags = '</ul></div>';
          $count++;
          continue;
        }

        if ($menuitem->item_type == 'child') {
          echo '<li><a href="'.$url.'" title="'.$attr_title.'">'.$label.'</a></li>';

          // Does this child item 1) have menu items that come after it? 2) have siblings?

          if (array_key_exists($count + 1, $menuitems) && $menuitems[ $count + 1 ]->menu_item_parent == $parent) {
            $count++;
            continue;
          }

          // If not, output the closing tags of this child item's parent.

          else {
            echo $closing_tags;
            $closing_tags = '';            
          }

          // Check to see if this item's parent has siblings 

          if (array_key_exists($count + 1, $menuitems) && $open_parent && $menuitems[$count + 1]->menu_item_parent !== $open_parent->menu_item_parent) {

            // Output grandparent closing tags

            echo $grandparent_closing_tags;

            $open_parent = null;

          }

          $count++;

        }

      endforeach; 

    }

  }

?>