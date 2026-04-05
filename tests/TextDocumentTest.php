<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Domain\TextDocument;

class TextDocumentTest extends TestCase
{
    public function testWordCountReturnsCorrectNumber()
    {
        $doc = new TextDocument("Hello world");

        // НАВМИСНА ПОМИЛКА: тут 2 слова, а ми очікуємо 100, щоб тест впав!
        $this->assertEquals(100, $doc->getWordCount());
    }
}
