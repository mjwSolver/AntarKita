<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public static $photos=[
        // Green Theme
        [
            'title' => "My darling",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed2_sm.jpg"
        ],
        [
            'title' => "We Face",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed1_sm.jpg"
        ],
        [
            'title' => "Just Us",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed3_sm.jpg"
        ],
        // Black theme
        [
            'title' => "Just Black",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed4_sm.jpg"
        ],
        [
            'title' => "Just Us",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed5_sm.jpg"
        ],
        [
            'title' => "It's Bright",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed6_sm.jpg"
        ],
        // Singles
        [
            'title' => "What?",
            'sub' => "Portrait",
            'imagepath' => "singles/single1_sm.jpg"
        ],
        [
            'title' => "I think so",
            'sub' => "Portrait",
            'imagepath' => "singles/single2_sm.jpg"
        ],
        [
            'title' => "Attention",
            'sub' => "Portrait",
            'imagepath' => "singles/single3_sm.jpg"
        ],
        [
            'title' => "Good Morning",
            'sub' => "Portrait",
            'imagepath' => "singles/single4_sm.jpg"
        ],
    ];

    public static function index() {
        return collect(self::$photos);
    }
}

