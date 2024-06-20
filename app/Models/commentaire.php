<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'message'
        ];

   /**
    * Get the client that owns the commentaire
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function client(): BelongsTo
   {
       return $this->belongsTo(client::class);
       
   }
}
