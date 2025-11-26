<?php

namespace PHPGram\StructureType\Media;

class Audio {
    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public string | null $performer;
    public string | null $title;
    public string | null $file_name;
    public string | null $mime_type;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int $duration,
        string | null $performer,
        string | null $title,
        string | null $file_name,
        string | null $mime_type,
        int | null $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->duration = $duration;
        $this->performer = $performer;
        $this->title = $title;
        $this->file_name = $file_name;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "duration"=> $this->duration,
            "performer"=> $this->performer,
            "title"=> $this->title,
            "file_name"=> $this->file_name,
            "mime_type"=> $this->mime_type,
            "file_size"=> $this->file_size
        ];
    }
}
