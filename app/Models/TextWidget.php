<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;
    protected $table = 'text_widgets';
    protected $guarded = [];


    public static function getTitle(string $key)
    {

        $widget = Cache::get('text-widget-'.$key, function () use ($key) {
            return TextWidget::query()
                ->where('key', $key)
                ->first()
                ->where('active', true)
                ->first();
        });

        if ($widget) {
            return $widget->title;
        }

        return '';
    }


    public static function getContent(string $key)
    {
        $widget = Cache::get('text-widget-'.$key, function () use ($key) {
            return TextWidget::query()
                ->where('key', $key)
                ->first()
                ->where('active', true)
                ->first();
        });

        if ($widget) {
            return $widget->content;
        }

        return '';
    }
}
