<?php

namespace App\Entity;

enum MediaType: int
{
    case PICTURE = 0;
    case VIDEO = 1;
    case SOUND = 2;
}