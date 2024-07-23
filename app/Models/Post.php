<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\File;

class Post extends Model
{
    use HasFactory;

        /**
         * Get the user that owns the Post
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }


        /**
         * Get all of the Files for the Post
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function files(): HasMany
        {
            return $this->hasMany(File::class);
        }
}
