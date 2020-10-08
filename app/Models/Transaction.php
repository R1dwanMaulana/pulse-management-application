<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid', 'name', 'number', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    // relasi dengan tabel TransactionDetail
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
