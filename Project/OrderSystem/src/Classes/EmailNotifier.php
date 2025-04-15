<?php

namespace OrderSystem\Classes;

use OrderSystem\Interfaces\NotifierInterface;

class EmailNotifier implements NotifierInterface
{

    public function __construct(
        private string $email
    )
    {

    }

    public function notify(string $message): void
    {
        // TODO: Implement notify() method.

        echo "Sending email to {$this->email}: {$message}\n";
    }
}