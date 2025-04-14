<?php

namespace Library\Interfaces;

interface ReportGeneratorInterface
{
    public function generate(array $books): string;
}