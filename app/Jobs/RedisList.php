<?php

namespace App\Jobs;
use DB;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RedisList extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $user_id;
    protected $anchor_id;
    protected $giff_id;
    protected $giff_num;
    protected $total_price;
    protected $live_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id, $anchor_id, $giff_id, $giff_num, $total_price, $live_id)
    {
        $this->user_id = $user_id;
        $this->anchor_id = $anchor_id;
        $this->giff_id = $giff_id;
        $this->giff_num = $giff_num;
        $this->total_price = $total_price;
        $this->live_id = $live_id;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        DB::insert('insert into user_giff(user_giff_id, user_id, anchor_id, giff_id, giff_num, total_price, live_id) values (?, ?, ?, ?, ?, ?, ?)', [null, $this->user_id, $this->anchor_id, $this->giff_id, $this->giff_num, $this->total_price, $this->live_id]);
    }
}
