<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class Home extends BaseController
{
    public function index(): string
    {
        $numbers = json_encode($this->generateNumbers());
        return $numbers;
    }

    public function generatePdf($pageNumber = 0)
    {
        $cartela = [];

        for ($i = 1; $i < $pageNumber; $i++) {
            $cartela[] = $this->generateNumbers();
        }

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf_template'));

        $dompdf->setPaper('A4');

        $dompdf->render();
        $output = $dompdf->stream();

       return  $this->response->setHeader('Content-Type', 'application/pdf')->setBody($output);
    }

    private function generateNumbers()
    {
        $numbers = [];
        for ($i = 1; $i <= 5; $i++) {
            $start = ($i - 1) * 15 + 1;
            $end = $i * 15;
            $numbers[$i] = $this->getRandomNumbers($start, $end, 5);
        }
        return $numbers;
    }

    private function getRandomNumbers($min, $max, $count)
    {
        $numbers = [];
        while (count($numbers) < $count) {
            $number = rand($min, $max);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }
        sort($numbers);
        return $numbers;
    }
}
