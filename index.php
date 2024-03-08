<?php

// liubrary 


class Job {
    public function task(Logger $logger){
        $logger = new Consolelogger();
        for($i =0; $i<10; $i++)
            $logger -> log("Task done # $i");

        }
    }

interface Logger {
    public function log($message);
    
}


class Consolelogger implements Logger {
    public function log ($message){
        echo $message . "\n"
    }
}

//Usage code
class NothingLogger{
    public function log($message);
    $file = fopen("log.txt", "a");
    fwrite($file, $message . "\n");
    fclose($file);
}

$job = new Job();
$logger = new Consollogger;
$job->task();

?>


