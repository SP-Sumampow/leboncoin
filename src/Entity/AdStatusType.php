<?php

namespace App\Entity;

enum AdStatusType: string
{
    case AVAILABLE = "available";
    case RESERVED = "reserved";
    case SOLD = "sold";
}