<?php

namespace App\Models\GL\TrxPosting;

use Illuminate\Database\Eloquent\Model;

class TrxPostingDetail extends Model
{
	protected $table = 'trx_posting_detail';

    protected $fillable = [
    	'trx_posting_id',
    	'transaction_subject',
    	'transaction_type',
    	'in_qty',
    	'in_price',
    	'in_total',
    	'our_qty',
    	'our_price',
    	'our_total',
    	'result_qty',
    	'result_avg',
    	'result_total'
    ];
}