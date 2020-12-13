<?php 
// error_reporting(0); 
    
function crawl_page($url) { 
  
    $dom = new DOMDocument('1.0'); 
      
    // Loading HTML content in $dom 
    @$dom->loadHTMLFile($url); 
      
    // Selecting all image i.e. img tag object 
    $anchors = $dom -> getElementsByTagName('img'); 
      
    // Extracting attribute from each object 
    foreach ($anchors as $element) { 
          
        // Extracting value of src attribute of 
        // the current image object 
        $src = $element -> getAttribute('src'); 
          
        // Extracting value of alt attribute of 
        // the current image object 
        $alt = $element -> getAttribute('alt'); 
          
        // Extracting value of height attribute 
        // of the current image object 
        $height = $element -> getAttribute('height'); 
          
        // Extracting value of width attribute of 
        // the current image object 
        $width = $element -> getAttribute('width'); 
          
        // Given Output as image with extracted attribute, 
        // you can print value of those attributes also 
        echo '<img src="'.$src.'" alt="'.$alt.'" height="'
                . $height.'" width="'.$width.'"/>'; 
    } 
}  
   
crawl_page("https://www.ubereats.com/ca/vancouver/food-delivery/hon-sushi/XAAB10yNTL6wz9qbi2gXfA"); 
   
?> 