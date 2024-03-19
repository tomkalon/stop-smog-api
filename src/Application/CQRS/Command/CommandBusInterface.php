<?php

namespace App\Application\CQRS\Command;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}
