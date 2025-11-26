<?php

namespace PHPGram\StructureType;

class LinkPreviewOptions {
    public bool | null $is_disabled;
    public string | null $url;
    public bool | null $prefer_small_media;
    public bool | null $prefer_large_media;
    public bool | null $show_above_text;

    public function __construct(
        bool | null $is_disabled,
        string | null $url,
        bool | null $prefer_small_media,
        bool | null $prefer_large_media,
        bool | null $show_above_text
    ){
        $this->is_disabled = $is_disabled;
        $this->url = $url;
        $this->prefer_small_media = $prefer_small_media;
        $this->prefer_large_media = $prefer_large_media;
        $this->show_above_text = $show_above_text;
    }

    public function toArray(): array {
        return [
            "is_disabled" => $this->is_disabled,
            "url"=> $this->url,
            "prefer_small_media"=> $this->prefer_small_media,
            "prefer_large_media"=> $this->prefer_large_media,
            "show_above_text"=> $this->show_above_text
        ];
    }
}
