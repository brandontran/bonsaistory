<?php
  // $seconds_to_cache = 86400;
  // $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
  // header("Expires: $ts");
  // header("Pragma: cache");
  // header("Cache-Control: public, max-age=$seconds_to_cache, true");

  $slug = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  $filename = "content/" . $slug . ".php";

  if (is_file($filename)) {
      include $filename;
    } else {
      if($slug){
        $trimSlug = rtrim($slug,"/");
      $trimSlug = rtrim($trimSlug,"/amp");
        if(array_key_exists($trimSlug, $redirect_array)){
          $newUrl = $redirect_array[$trimSlug];
          header("Location: " . $newUrl, TRUE, 301);
        } else {
          http_response_code(404);
          echo "<h3>Page Not Found</h3>";
        }
      } else {
        include "content/home.php";
      }
    }
?>