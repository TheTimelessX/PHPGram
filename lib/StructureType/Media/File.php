<?php

namespace PHPGram\StructureType\Media;

class File {
    public string $file_id;
    public string $file_unique_id;
    public int | null $file_size;
    public string | null $file_path;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        int | null $file_size,
        string | null $file_path
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->file_size = $file_size;
        $this->file_path = $file_path;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "file_size"=> $this->file_size,
            "file_path"=> $this->file_path
        ];
    }
}
