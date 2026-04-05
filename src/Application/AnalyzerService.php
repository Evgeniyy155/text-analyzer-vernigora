<?php

namespace Application;

use Domain\TextDocument;

class AnalyzerService
{
    public function analyze(string $text): array
    {
        // start tracking metric time
        $document = new TextDocument($text);
        return [
            'words' => $document->getWordCount(),
            'chars' => $document->getCharCount()
        ];
    }
}
