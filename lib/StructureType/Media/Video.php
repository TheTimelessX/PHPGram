<?php

namespace PHPGram\StructureType\Media;

use PHPGram\StructureType\Media\PhotoSize;

class Video {
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public int $duration;
    public PhotoSize | null $thumbnail;
    /**
     * a list of photosize object
     * @var PhotoSize[]|null
     */
    public array | null $cover;
    public int | null $start_timestamp;
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
        array | null $cover,
        int | null $start_timestamp,
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
        $this->cover = $cover;
        $this->start_timestamp = $start_timestamp;
        $this->file_name = $file_name;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        $cov = $this->cover ?? [];
        $clean_ = [];

        for ($i = 0;$i < count($cov);$i++){
            array_push($clean_, $cov[$i]->toArray());
        }

        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "width"=> $this->width,
            "height"=> $this->height,
            "duration"=> $this->duration,
            "thumbnail"=> $this->thumbnail,
            "cover"=> $clean_,
            "start_timestamp"=> $this->start_timestamp,
            "file_name"=> $this->file_name,
            "mime_type"=> $this->mime_type,
            "file_size"=> $this->file_size
        ];
    }
}
