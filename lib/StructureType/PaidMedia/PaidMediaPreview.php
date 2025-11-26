<?php

namespace PHPGram\StructureType\PaidMedia;

use PHPGram\StructureType\PaidMedia\PaidMediaPreviewType;

class PaidMediaPreview {
    public PaidMediaPreviewType $type;
    public int | null $width;
    public int | null $height;
    public int | null $duration;

    public function __construct(
        PaidMediaPreviewType $type,
        int | null $width,
        int | null $height,
        int | null $duration
    ){
        $this->type = $type;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type->value,
            "width"=> $this->width,
            "height"=> $this->height,
            "duration"=> $this->duration
        ];
    }
}
