<?php
namespace App\Enums;

enum Status: string {
    case upcoming = 'Upcoming';
    case inprogress = 'In-Progress';
    case completed = 'Completed';
    case canceled = 'Canceled';
    case postponed = 'Postponed';
}