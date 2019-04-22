<?php
class Lannister {
    public function sleepWith($name) {
        if ($name instanceof Lannister)
            print("Not even if I'm drunk !" . PHP_EOL);
        else if ($name instanceof Stark)
            print("Let's do this." . PHP_EOL);
        
    }
}

?>