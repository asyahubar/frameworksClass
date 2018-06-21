<?php

abstract class Packing {
    protected $cloth = [];
    protected $shoes = [];
    protected $gadgets = [];
    protected $other = [];

    abstract public function packCloth($cloth);
}

class PackingInWinter extends Packing {
    public function packCloth($cloth = ['jeans', 'sweater'])
    {
        $this->cloth = $cloth;
    }
}

class PackingInSummer extends Packing {
    public function packCloth($cloth = ['shorts', 't-shirt'])
    {
        $this->cloth = $cloth;
    }
}