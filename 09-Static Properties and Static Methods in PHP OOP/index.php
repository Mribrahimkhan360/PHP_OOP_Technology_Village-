<?php
    // class product {
    //     public static function welcome()
    //     {
    //         echo "Welcome to the product page!";
    //     }
    //     // Static Methods
    //     public function tv()
    //     {
    //         self :: welcome();
    //     }
    // }

    // $product = new product();
    // $product -> tv();

    class message{
        public static function welcome()
        {
            echo "Welcome to the message page!";
        }
    }

    class otherClass {
        public function callWelcome()
        {
            message :: welcome();
        }
    }

    $msg = new otherClass();
    $msg -> callWelcome();
?>

