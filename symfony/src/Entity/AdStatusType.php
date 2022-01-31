<?php

namespace App\Entity;

enum AdStatusType: int
{
    case AVAILABLE = 0;
    case RESERVED = 1;
    case SOLD = 2;
}