<?php

namespace App\Application\CQRS\Query;

interface QueryBusInterface
{
    public function handle(QueryInterface $query): mixed;
}
