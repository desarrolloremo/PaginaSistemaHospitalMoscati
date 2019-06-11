<?php

namespace App;
use App\PhotosBlog;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Blog extends Model
{
    protected $dates = ["published_at"];
    protected $fillable = ['title','url'];
     public function getRouteKeyName()
    {
       return 'url';
    }

    public function photos(){
        return $this->hasmany(PhotosBlog::class);
    }

    public static function scopePublicados($query)
    {
        return $query-> whereNotNull('published_at')
        ->where('published_at','<=', Carbon::now())
        ->latest('published_at');
    }


    // public function setTitleAttribute($title){
    //     $this->attributes['title'] = $title;

    //     $url = str_slug($title);

    //     $duplicateUrlCount = Blog::where('url','LIKE', "{$url}%")->count();
 

    //     if($duplicateUrlCount)
    //     { 
    //         $url .=  "-" . uniqid();
    //     }

    //     $this->attributes['url'] = $url;
    // }
} 
