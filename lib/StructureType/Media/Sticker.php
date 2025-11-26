<?php

namespace PHPGram\StructureType\Media;

use PHPGram\StructureType\Media\MaskPosition;
use PHPGram\StructureType\Media\StickerType;
use PHPGram\StructureType\Media\PhotoSize;

class Sticker {
    public string $file_id;
    public string $file_unique_id;
    public StickerType $type;
    public int $width;
    public int $height;
    public bool $is_animated;
    public bool $is_video;
    public PhotoSize | null $thumbnail;
    public string $emoji;
    public string | null $set_name;
    public string | null $premium_animation;
    public MaskPosition | null $mask_position;
    public string | null $custom_emoji_id;
    public bool | null $needs_repainting;
    public int | null $file_size;

    public function __construct(
        string $file_id,
        string $file_unique_id,
        StickerType $type,
        int $width,
        int $height,
        bool $is_animated,
        bool $is_video,
        PhotoSize | null $thumbnail,
        string $emoji,
        string | null $set_name,
        string | null $premium_animation,
        MaskPosition | null $mask_position,
        string | null $custom_emoji_id,
        bool | null $needs_repainting,
        int | null $file_size
    ){
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->type = $type;
        $this->width = $width;
        $this->height = $height;
        $this->is_animated = $is_animated;
        $this->is_video = $is_video;
        $this->thumbnail = $thumbnail;
        $this->emoji = $emoji;
        $this->set_name = $set_name;
        $this->premium_animation = $premium_animation;
        $this->mask_position = $mask_position;
        $this->custom_emoji_id = $custom_emoji_id;
        $this->needs_repainting = $needs_repainting;
        $this->file_size = $file_size;
    }

    public function toArray(): array {
        return [
            "file_id"=> $this->file_id,
            "file_unique_id"=> $this->file_unique_id,
            "type"=> $this->type->value,
            "width"=> $this->width,
            "height"=> $this->height,
            "is_animated"=> $this->is_animated,
            "is_video"=> $this->is_video,
            "thumbnail"=> $this->thumbnail ? $this->thumbnail->toArray() : null,
            "emoji"=> $this->emoji,
            "set_name"=> $this->set_name,
            "premium_animation"=> $this->premium_animation,
            "mask_position"=> $this->mask_position,
            "custom_emoji_id"=> $this->custom_emoji_id,
            "needs_repainting"=> $this->needs_repainting,
            "file_size"=> $this->file_size
        ];
    }
}
