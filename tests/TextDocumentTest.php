<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Domain\TextDocument;

class TextDocumentTest extends TestCase
{
    public function testWordCountReturnsCorrectNumber()
    {
        $doc = new TextDocument("Hello world");

        $this->assertEquals(2, $doc->getWordCount());
    }
}
