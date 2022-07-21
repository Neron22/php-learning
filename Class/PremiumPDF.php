<?php

namespace Class;

class PremiumPDF implements PDFDownloader
{
  public function downloadPDF(): string
  {
    return 'PDF téléchargé (Premium)';
  }
}
