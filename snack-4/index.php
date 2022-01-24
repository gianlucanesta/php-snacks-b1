<?php 
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    // Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    // Ogni punto un nuovo paragrafo.
?>

<?php 
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Iure officiis dolore labore distinctio. 
        Animi dicta perferendis optio obcaecati possimus totam commodi dolor ad sint. 
        Quam non tempora facilis. Sunt, quis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Ipsam, repudiandae sequi hic aperiam suscipit ad necessitatibus. 
        Odit commodi soluta sint deserunt quam maxime facere explicabo nostrum accusantium error placeat at?";

    print_r (explode(".", $lorem)) ;
?>

