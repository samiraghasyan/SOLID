<?php

namespace Library\classes;

use Library\Interfaces\ReportGeneratorInterface;

class HtmlReportGenerator implements ReportGeneratorInterface
{

    public function generate(array $books): string
    {
        return "HTML report generated";
    }
}