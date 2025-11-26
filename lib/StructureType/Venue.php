<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Location;

class Venue {
    public Location $location;
    public string $title;
    public string $address;
    public string | null $foursquare_id;
    public string | null $foursquare_type;
    public string | null $google_place_id;
    public string | null $google_place_type;

    public function __construct(
        Location $location,
        string $title,
        string $address,
        string | null $foursquare_id,
        string | null $foursquare_type,
        string | null $google_place_id,
        string | null $google_place_type
    ){
        $this->location = $location;
        $this->title = $title;
        $this->address = $address;
        $this->foursquare_id = $foursquare_id;
        $this->foursquare_type = $foursquare_type;
        $this->google_place_id = $google_place_id;
        $this->google_place_type = $google_place_type;
    }

    public function toArray(): array {
        return [
            "location"=> $this->location->toArray(),
            "title"=> $this->title,
            "address"=> $this->address,
            "foursquare_id"=> $this->foursquare_id,
            "foursquare_type"=> $this->foursquare_type,
            "google_place_id"=> $this->google_place_id,
            "google_place_type"=> $this->google_place_type
        ];
    }
}
