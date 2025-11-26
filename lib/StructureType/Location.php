<?php

namespace PHPGram\StructureType;

class Location {
    public float $latitude;
    public float $longitude;
    public float | null $horizontal_accuracy;
    public int | null $live_period;
    public int | null $heading;
    public int | null $proximity_alert_radius;

    public function __construct(
        float $latitude,
        float $longitude,
        float | null $horizontal_accuracy,
        int | null $live_period,
        int | null $heading,
        int | null $proximity_alert_radius
    ){
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->horizontal_accuracy = $horizontal_accuracy;
        $this->live_period = $live_period;
        $this->heading = $heading;
        $this->proximity_alert_radius = $proximity_alert_radius;
    }

    public function toArray(): array {
        return [
            "latitude"=> $this->latitude,
            "longitude"=> $this->longitude,
            "horizontal_accuracy"=> $this->horizontal_accuracy,
            "live_period"=> $this->live_period,
            "heading"=> $this->heading,
            "proximity_alert_radius"=> $this->proximity_alert_radius
        ];
    }
}
