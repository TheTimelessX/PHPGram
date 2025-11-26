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
        $photos = $this->photo ?? [];
        $clean_ = [];

        for ($i = 0;$i < count($photos);$i++){
            array_push($clean_, $photos[$i]->toArray());
        }
        
        return [
            "type"=> $this->type->value,
            "photo"=> $clean_
        ];
    }
}
