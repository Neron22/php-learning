<?php

namespace Class;

class PDFDownloaderService
{
  public function downloadPDF(PDFDownloader $PDFDownloader)
  {
    return $PDFDownloader->downloadPDF();
  }
}
