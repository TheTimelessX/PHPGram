<?php

namespace PHPGram\StructureType\Media;

class Animation {
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public int $duration;
    public PhotoSize | null $thumbnail;
    public string | null $file_name;
    public string | null $mime_type;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int $duration,
        PhotoSize | null $thumbnail,
        string | null $file_name,
        string | null $mime_type,
        int | null $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->thumbnail = $thumbnail;
        $this->file_name = $file_name;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "width"=> $this->width,
            "height"=> $this->height,
            "duration"=> $this->duration,
            "thumbnail"=> $this->thumbnail,
            "file_name"=> $this->file_name,
            "mime_type"=> $this->mime_type,
            "file_size"=> $this->file_size
        ];
    }
}
