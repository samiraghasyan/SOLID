<?php

interface Bird {
    public function fly();
}

interface Swimmer {
    public function swim();
}

class Eagle implements Bird {
    public function fly(): string
    {
        return "I can fly";
    }
}

class Penguin implements Swimmer {
    public function swim(): string
    {
        return "I can swim";
    }
}