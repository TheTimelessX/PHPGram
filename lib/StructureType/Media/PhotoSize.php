<?php

namespace PHPGram\StructureType\Media;

class PhotoSize {
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int | null $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
        $this->file_size = $file_size ? $file_size : null;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "width"=> $this->width,
            "height"=> $this->height,
            "file_size"=> $this->file_size
        ];
    }
}
