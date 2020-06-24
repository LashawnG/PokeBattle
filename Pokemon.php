<?php

//Class om een pokemon aan te maken
class Pokemon {
    public $name;
    public $type;
    public $hp;
    public $weakness;
    public $resistance;
    public $attacks;

    public function __construct($name, $type, $hp, $weakness, $resistance, $attacks) {
        $this->name = $name;
        $this->type = $type;
        $this->hp = $hp;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}

//Class om een attack aan te maken
class attack
{
    public $name;
    public $damage;

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
