<?php

class Result {
    private $id_user_results;
    private $value_h;
    private $value_w;
    private $id_results;
    private $name;
    private $description;

    public function __construct(
        int $id_user_results,
        int $value_h,
        int $value_w,
        int $id_results,
        string $name,
        string $description
    ) {
        $this->id_user_results = $id_user_results;
        $this->value_h = $value_h;
        $this->value_w = $value_w;
        $this->id_results = $id_results;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId(): int 
    {
        return $this->id_user_results;
    }

    public function getValueH(): int
    {
        return $this->value_h;
    }

    public function getValueW(): int
    {
        return $this->value_w;
    }

    public function getIdResult(): int
    {
        return $this->id_results;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDesc(): string
    {
        return $this->description;
    }
}
?>
