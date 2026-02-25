<?php
    class product {
        public static function welcome()
        {
            echo "Welcome to the product page!";
        }
        // Static Methods
        public function tv()
        {
            self :: welcome();
        }
    }

    $product = new product();
    $product -> tv();
?>

