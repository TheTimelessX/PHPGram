<?php

namespace PHPGram\StructureType\PaidMedia;

use PHPGram\StructureType\PaidMedia\PaidMediaPhotoType;
use PHPGram\StructureType\Media\PhotoSize;

class PaidMediaPhoto {
    public PaidMediaPhotoType $type;
    /**
     * a list of photosize
     * @var PhotoSize[]
     */
    public PhotoSize $photo;

    public function __construct(
        PaidMediaPhotoType $type,
        PhotoSize $photo
    ){
        $this->type = $type;
        $this->photo = $photo;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type->value,
            "photo"=> $this->photo->toArray() ?? null
        ];
    }
}