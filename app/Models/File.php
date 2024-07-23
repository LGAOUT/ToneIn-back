<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\File;

class File extends Model
{
    use HasFactory;
        /**
         * Get the user that owns the File
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        /**
         * Get the post that owns the File
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function post(): BelongsTo
        {
            return $this->belongsTo(Post::class);
        }
}


