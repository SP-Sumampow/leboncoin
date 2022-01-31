<?php

namespace App\Entity;

enum UserACLType: string
{
    case USER = "ROLE_LEBONCOINDUPAUVRE_USER";
    case ADMIN = "ROLE_ADMIN";
}