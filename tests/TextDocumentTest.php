<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Domain\TextDocument;

class TextDocumentTest extends TestCase
{
    public function testWordCountReturnsCorrectNumber()
    {
        $doc = new TextDocument("Hello world");

        $this->assertEquals(99, $doc->getWordCount());
    }
}
