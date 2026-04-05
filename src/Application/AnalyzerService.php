<?php

namespace Application;

use Domain\TextDocument;

class AnalyzerService
{
    public function analyze(string $text): array
    {
        $document = new TextDocument($text);
        return [
            'words' => $document->getWordCount(),
            'chars' => $document->getCharCount()
        ];
    }
}
