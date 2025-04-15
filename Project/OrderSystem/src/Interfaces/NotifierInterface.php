<?php

namespace OrderSystem\Interfaces;


interface NotifierInterface {
    public function notify(string $message): void;
}