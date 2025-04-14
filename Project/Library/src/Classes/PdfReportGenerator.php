<?php

namespace Library\Classes;

use Library\Interfaces\ReportGeneratorInterface;

class PdfReportGenerator implements ReportGeneratorInterface
{

    public function generate(array $books): string
    {
        return "PDF report generated";
    }
}