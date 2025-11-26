<?php

namespace PHPGram\StructureType\Media;

class Voice {
    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public string | null $mime_type;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int $duration,
        string | null $mime_type,
        int | null $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->duration = $duration;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "duration"=> $this->duration,
            "mime_type"=> $this->mime_type,
            "file_size"=> $this->file_size
        ];
    }
}
