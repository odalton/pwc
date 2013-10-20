<?php 

function pwc_navigation() {
  $args = array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order',
    'hierarchical' => 1,
    //'exclude' => '',
    //'include' => '',
    //'meta_key' => '',
    //'meta_value' => '',
    //'authors' => '',
    'child_of' => 0,
    'parent' => -1,
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish'
  );
  $pages = get_pages($args);
  $html = "";
  $html .= "<div class='menu'>";
  $html .= "<ul>";
  foreach ($pages as $page) {
    if($page->post_title == 'Home') {}
    else {
      $string = str_replace(' ', '', $string);
      $html .= "<li><a class='anchorLink' id='anchor1' href='#".str_replace(' ', '', $page->post_title)."'>".$page->post_title."</a></li>";
    }
    //print get_page_link($page->ID);
    //print $page->post_title;
    //print $page->guid;
  }
  $html .= "</ul>";
  $html .= "</div>";
  return $html;
}

?>
