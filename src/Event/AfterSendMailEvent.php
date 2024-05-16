<?php
// src/Event/AfterSendMailEvent.php
namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

class AfterSendMailEvent extends Event
{
    public function __construct(
        private mixed $returnValue,
    ) {
    }

    public function getReturnValue(): mixed
    {
        return $this->returnValue;
    }

    public function setReturnValue(mixed $returnValue): void
    {
        $this->returnValue = $returnValue;
    }
}