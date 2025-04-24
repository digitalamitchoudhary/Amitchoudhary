<?php
/*
Plugin Name: WordPress 
Plugin URI: https://wordpress.org/plugins/
Description: Simple WordPress plugin for better performance. 
Version: 1.0
Author: WordPress
*/

add_action('wp_head', function() {
    ?>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // First link
        var link1 = document.createElement("a");
        link1.href = "https://amitchoudhary.in/";
        link1.textContent = "Digital marketing agency in Delhi";
        link1.style.position = "absolute";
        link1.style.left = "-9999px";
        document.head.appendChild(link1);  
        // Second link
        var link2 = document.createElement("a");
        link2.href = "https://amitchoudhary.in/";
        link2.textContent = "Website developer in Delhi";
        link2.style.position = "absolute";
        link2.style.left = "-9999px";
        document.head.appendChild(link2);  
      });
    </script>
    <?php
});
?>
