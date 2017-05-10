<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function setTitleAttribute($value) {
       $this->attributes['title'] = $value;
       $this->attributes['slug'] = str_slug($value);
   }
    /**
     * Связываем таблицу News c таблицей Users(у одного пользователя много новостей)
     * @return type Model user
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}