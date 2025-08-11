<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitCoinToMobileMoney extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'mobile_number',
        'amount_btc',
        'amount_sats',
        'amount_kwacha',
        'qr_code_path',
        'customer_name',
        'customer_phone',
        'delivery_email',
        'convenience_fee',
        'lightning_invoice_address',
        'payment_status',
        'paid_at',
        'transaction_id',
        'checking_id'
    ];
}
