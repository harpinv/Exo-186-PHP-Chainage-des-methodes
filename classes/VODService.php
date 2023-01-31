<?php

class VODService {
    private string $name;
    private float $price;

    /**
     * @param string $name
     */
    public function setName(string $name): VODService
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): VODService
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}