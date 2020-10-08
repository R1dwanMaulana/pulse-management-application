<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'buyers_id', 'transactions_id'
    ];

    protected $hidden = [

    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyers_id', 'id');
    }
}
