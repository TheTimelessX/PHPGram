<?php

namespace PHPGram\StructureType;

enum ChatType: string {
    case PRIVATE    = "private";
    case GROUP      = "group";
    case SUPERGROUP = "supergroup";
    case CHANNEL    = "channel";
}
