<?php

namespace Domain;

class TextDocument
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getWordCount(): int
    {
        return str_word_count($this->content);
    }
}
