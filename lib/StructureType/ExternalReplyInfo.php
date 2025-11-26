<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageOriginUser;
use PHPGram\StructureType\MessageOriginHiddenUser;
use PHPGram\StructureType\MessageOriginChat;
use PHPGram\StructureType\MessageOriginChannel;
use PHPGram\StructureType\Chat;
use PHPGram\StructureType\LinkPreviewOptions;
use PHPGram\StructureType\CheckList;
use PHPGram\StructureType\Contact;
use PHPGram\StructureType\Dice;
use PHPGram\StructureType\Game;
use PHPGram\StructureType\Giveaway;
use PHPGram\StructureType\GiveawayWinners;
use PHPGram\StructureType\Invoice;
use PHPGram\StructureType\Location;
use PHPGram\StructureType\Poll;
use PHPGram\StructureType\Venue;
use PHPGram\StructureType\PaidMedia\PaidMediaInfo;
use PHPGram\StructureType\Media\Animation;
use PHPGram\StructureType\Media\Audio;
use PHPGram\StructureType\Media\Document;
use PHPGram\StructureType\Media\PhotoSize;
use PHPGram\StructureType\Media\Sticker;
use PHPGram\StructureType\Media\Video;
use PHPGram\StructureType\Media\VideoNote;
use PHPGram\StructureType\Media\Voice;

class ExternalReplyInfo {
    public MessageOriginUser | MessageOriginHiddenUser | MessageOriginChat | MessageOriginChannel $origin;
    public Chat | null $chat;
    public LinkPreviewOptions | null $link_preview_options;
    public Animation | null $animation;
    public Audio | null $audio;
    public Document | null $document;
    public PaidMediaInfo | null $paid_media;
    /**
     * a list of photosize
     * @var PhotoSize[]|null
     */
    public array | null $photo;
    public Sticker | null $sticker;
    public Story | null $story;
    public Video | null $video;
    public VideoNote | null $video_note;
    public Voice | null $voice;
    public bool | null $has_media_spoiler;
    public CheckList | null $checklist;
    public Contact | null $contact;
    public Dice | null $dice;
    public Game | null $game;
    public Giveaway | null $giveaway;
    public GiveawayWinners | null $giveaway_winners;
    public Invoice | null $invoice;
    public Location | null $location;
    public Poll | null $poll;
    public Venue | null $venue;

    public function __construct(
        MessageOriginUser | MessageOriginHiddenUser | MessageOriginChat | MessageOriginChannel $origin,
        Chat | null $chat,
        LinkPreviewOptions | null $link_preview_options,
        Animation | null $animation,
        Audio | null $audio,
        Document | null $document,
        PaidMediaInfo | null $paid_media,
        array | null $photo,
        Sticker | null $sticker,
        Story | null $story,
        Video | null $video,
        VideoNote | null $video_note,
        Voice | null $voice,
        bool | null $has_media_spoiler,
        CheckList | null $checklist,
        Contact | null $contact,
        Dice | null $dice,
        Game | null $game,
        Giveaway | null $giveaway,
        GiveawayWinners | null $giveaway_winners,
        Invoice | null $invoice,
        Location | null $location,
        Poll | null $poll,
        Venue | null $venue,
    ){
        $this->origin = $origin;
        $this->chat = $chat;
        $this->link_preview_options = $link_preview_options;
        $this->animation = $animation;
        $this->audio = $audio;
        $this->document = $document;
        $this->paid_media = $paid_media;
        $this->photo = $photo;
        $this->sticker = $sticker;
        $this->story = $story;
        $this->video = $video;
        $this->video_note = $video_note;
        $this->voice = $voice;
        $this->has_media_spoiler = $has_media_spoiler;
        $this->checklist = $checklist;
        $this->contact = $contact;
        $this->dice = $dice;
        $this->game = $game;
        $this->giveaway = $giveaway;
        $this->giveaway_winners = $giveaway_winners;
        $this->invoice = $invoice;
        $this->location = $location;
        $this->poll = $poll;
        $this->venue = $venue;
    }

    public function toArray(): array {
        $photo = $this->photo ?? [];
        $clean_ = [];

        for ( $i = 0; $i < count( $photo ); $i++ ) {
            array_push($clean_, $photo[$i]->toArray());
        }

        return [
            "origin"=> $this->origin ? $this->origin->toArray() : null,
            "chat"=> $this->chat ? $this->chat->toArray() : null,
            "link_preview_options"=> $this->link_preview_options ? $this->link_preview_options->toArray() : null,
            "animation"=> $this->animation ? $this->animation->toArray() : null,
            "audio"=> $this->audio ? $this->audio->toArray() : null,
            "document"=> $this->document ? $this->document->toArray() : null,
            "paid_media"=> $this->paid_media ? $this->paid_media->toArray() : null,
            "photo"=> $clean_,
            "sticker"=> $this->sticker ? $this->sticker->toArray() : null,
            "story"=> $this->story ? $this->story->toArray() : null,
            "video"=> $this->video ? $this->video->toArray() : null,
            "video_note"=> $this->video_note ? $this->video_note->toArray() : null,
            "voice"=> $this->voice ? $this->voice->toArray() : null,
            "has_media_spoiler"=> $this->has_media_spoiler ? $this->has_media_spoiler : null,
            "checklist"=> $this->checklist ? $this->checklist->toArray() : null,
            "contact"=> $this->contact ? $this->contact->toArray() : null,
            "dice"=> $this->dice ? $this->dice->toArray() : null,
            "game"=> $this->game ? $this->game->toArray() : null,
            "giveaway"=> $this->giveaway ? $this->giveaway->toArray() : null,
            "giveaway_winners"=> $this->giveaway_winners ? $this->giveaway_winners->toArray() : null,
            "invoice"=> $this->invoice ? $this->invoice->toArray() : null,
            "location"=> $this->location ? $this->location->toArray() : null,
            "poll"=> $this->poll ? $this->poll->toArray() : null,
            "venue"=> $this->venue ? $this->venue->toArray() : null
        ];
    }
}
