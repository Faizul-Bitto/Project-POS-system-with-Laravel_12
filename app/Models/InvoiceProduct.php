<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceProduct extends Model {
    protected $fillable = ['invoice_id', 'product_id', 'quantity', 'price'];

    public function product(): BelongsTo {
        return $this->belongsTo( Product::class );
    }
}
