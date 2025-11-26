<?php

namespace PHPGram\StructureType\PaidMedia;

use PHPGram\StructureType\PaidMedia\PaidMediaPhoto;
use PHPGram\StructureType\PaidMedia\PaidMediaVideo;
use PHPGram\StructureType\PaidMedia\PaidMediaPreview;

class PaidMediaInfo {
    public int $star_count;
    public PaidMediaPhoto | PaidMediaVideo | PaidMediaPreview $paid_media;

    public function __construct(
        int $star_count,
        PaidMediaPhoto | PaidMediaVideo | PaidMediaPreview $paid_media,
    ){
        $this->star_count = $star_count;
        $this->paid_media = $paid_media;
    }

    public function toArray(): array {
        return [
            "star_count"=> $this->star_count,
            "paid_media"=> $this->paid_media ? $this->paid_media->toArray() : null
        ];
    }
}
