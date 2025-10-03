<?php

namespace App\Model\Entity;

class QuoteEntity extends AbstractEntity
{
    /**
     * Déterminer un author_id
     * @var
     */
    private ?int $author_id = null;

    /**
     * Déterminer une citation
     * @var
     */
    private ?string $quote = null;

    /**
     * Déterminer une explication
     * @var
     */
    private ?string $explanation = null;

    /**
     * Retourner une citation
     * @return string|null
     */
    public function getQuote(): ?string
    {
        return $this->quote;
    }

    /**
     * Modifier une citation
     * @param mixed $quote
     * @return QuoteEntity
     */
    public function setQuote(?string $quote): self
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * Retourner une explication
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * Modifier une explication
     * @param mixed $explanation
     * @return QuoteEntity
     */
    public function setExplanation(?string $explanation): self
    {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Retourner un author_id
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
        return $this->author_id;
    }

    /**
     * Modifier un author_id
     * @param mixed $author_id
     * @return QuoteEntity
     */
    public function setAuthorId(?int $author_id): self
    {
        $this->author_id = $author_id;
        return $this;
    }
}
