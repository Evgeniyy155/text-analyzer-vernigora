<?php

namespace Domain;

use InvalidArgumentException;

class TextDocument
{
    private string $content;

    public function __construct(string $content)
    {
        if (trim($content) === '') {
            throw new InvalidArgumentException("Text cannot be empty");
        }
        $this->content = $content;
    }

    public function getWordCount(): int
    {
        return str_word_count($this->content);
    }
}
