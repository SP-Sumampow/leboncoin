<?php

namespace App\Entity;

enum MediaType: string
{
    case PICTURE = "picture";
    case VIDEO = "video";
    case SOUND = "sound";
}