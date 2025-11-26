<?php

namespace PHPGram\StructureType\PaidMedia;

use PHPGram\StructureType\PaidMedia\PaidMediaVideoType;
use PHPGram\StructureType\Media\Video;

class PaidMediaVideo {
    public PaidMediaVideoType $type;
    public Video $video;

    public function __construct(PaidMediaVideoType $type, Video $video) {
        $this->type = $type;
        $this->video = $video;
    }

    public function toArray(): array {
        return [
            "type" => $this->type->value,
            "video" => $this->video ? $this->video->toArray() : null
        ];
    }
}
