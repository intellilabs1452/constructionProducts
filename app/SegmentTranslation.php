<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SegmentTranslation extends Model
{
  protected $fillable = ['name', 'lang', 'brand_id'];

  public function segment(){
    return $this->belongsTo(Segment::class);
  }
}
