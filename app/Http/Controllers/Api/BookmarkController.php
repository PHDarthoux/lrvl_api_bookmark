<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function __invoke(): array
    {
        return [
            'message' => 'Welcome to your Bookmark API!',
            'add bookmark' => '/api/add-bookmark',
            'list bookmarks' => '/api/bookmarks',
            'read' => '/api/bookmark/{id}',
            'delete' => '/api/delete-bookmark/{id}',
        ];
    }
}
