<?php

class Animal
{
    public function eat(): string
    {
        return "I can eat";
    }
}

class Lion extends Animal
{
    public function eat(): string
    {
        return "I can eat meat";
    }
}

class Rabbit extends Animal
{
    public function eat() : string
    {
        return "I can eat vegetables";
    }
}

class Plant extends Animal{
    public function eat() : string
    {
        throw new Exception("Plants do not eat");
    }
}

function feed(Animal $animal): string
{
    return $animal->eat();
}


echo feed(new Lion()); // "I can eat meat"
echo feed(new Rabbit());// "I can eat vegetables"
echo feed(new Plant());// Exception: Plants do not eat
