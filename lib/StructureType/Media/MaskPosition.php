<?php

namespace PHPGram\StructureType\Media;

use PHPGram\StructureType\Media\MaskPositionType;

class MaskPosition {
    public MaskPositionType $point;
    public float $x_shift;
    public float $y_shift;
    public float $scale;

    public function __construct(
        MaskPositionType $point,
        float $x_shift,
        float $y_shift,
        float $scale
    ){
        $this->point = $point;
        $this->x_shift = $x_shift;
        $this->y_shift = $y_shift;
        $this->scale = $scale;
    }

    public function toArray(): array {
        return [
            "point" => $this->point->value,
            "x_shift" => $this->x_shift,
            "y_shift" => $this->y_shift,
            "scale" => $this->scale
        ];
    }
}
