<!-- This page is to create a function in wordpress to call css files and javascript scripts -->

<?php
function university_files()
{
  //loading javascript scripts
  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

  // loading css file
  //fucntion calls here are built in wordpress functions
  wp_enqueue_style("university_main_styles", get_theme_file_uri('/build/style-index.css'));
  // loading css file
  wp_enqueue_style("university_extra_styles", get_theme_file_uri('/build/index.css'));

  // loading font awesome
  wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  // loading google fonts
  wp_enqueue_style("//google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
}

//calling the php function add_action is wordpress build in function
add_action('wp_enqueue_scripts', 'university_files');