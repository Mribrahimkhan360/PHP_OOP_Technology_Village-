<?php
trait Longer{
    public function log($message)
    {
        echo "Log: " . $message . "<br />";
    }
}

trait Debugger{
    public function debug($message)
    {
        echo "Debug: " . $message;
    }
}

class MyClass{
    use Longer, Debugger;
}

$user = new MyClass();
$user->log("This is a message."); // Output: Debug: This is a message.
$user->debug("This is a debug message."); // Output: Debug: This is a debug message.    