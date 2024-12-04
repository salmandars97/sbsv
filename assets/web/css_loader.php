<?php

    header("Content-type: text/css");

    // Array of css files
    $css = array(
        'tel/build/css/intlTelInput.min.css' ,
        'css/calculator.min.css' ,
        'css/linearicons.min.css' ,
        'css/font-awesome.min.css' ,
        'css/bootstrap.min.css' ,
        'css/magnific-popup.min.css' ,
        'css/nice-select.min.css' ,
        'css/animate.min.css' ,
        'css/owl.carousel.min.css' ,
        'css/main.min.css' ,
        'css/extra.min.css ',
        'css/osamaboot.min.css'
    );

    // Prevent a notice
    $css_content = '';

    // Loop the css Array
    foreach ($css as $css_file) {
        // Load the content of the css file
        $css_content .= file_get_contents($css_file);
    }

    // print the css content
    echo $css_content;
?>
