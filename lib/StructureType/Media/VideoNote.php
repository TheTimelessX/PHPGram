<?php

namespace PHPGram\StructureType\Media;

use PHPGram\StructureType\Media\PhotoSize;

class VideoNote {
    public string $file_id;
    public string $file_unique_id;
    public int $length;
    public int $duration;
    public PhotoSize | null $thumbnail;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int $length,
        int $duration,
        PhotoSize | null $thumbnail,
        int $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->length = $length;
        $this->duration = $duration;
        $this->thumbnail = $thumbnail;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "length"=> $this->length,
            "duration"=> $this->duration,
            "thumbnail"=> $this->thumbnail ? $this->thumbnail->toArray() : null,
            "file_size"=> $this->file_size
        ];
    }
}
