<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function formatDate()
    {
        $date = $this->created_at;
        return Carbon::parse($date)->diffForHumans();
    }
}
