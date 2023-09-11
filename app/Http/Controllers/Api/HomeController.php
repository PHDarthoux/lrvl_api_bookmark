<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(): array
    {
        return [
            'message' => 'Welcome to your Bookmark API!',
            'add bookmark' => '/api/bookmark/{link}',
            'list bookmarks' => '/api/bookmarks',
            'read' => '/api/bookmarks/{id}',
            'delete' => '/api/delete-bookmark/{id}',
        ];
    }
}
