<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class NameOfCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '批量添加数据';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$dsn = "mysql:host=localhost;dbname=live";
		//$db = new PDO($dsn, 'root', 'root');
		//$sql = "insert into live_user(username,password,telphone,last_time,reg_time,last_ip) values(?,?,?,?,?,?)";
		//$stmt = $db->prepare($sql);
		
		

		
		for($i=1;$i<1000000;$i++){
			$a= ['username'=>'zhl'.$i,'password'=>md5('123qwe'),'telphone'=>$i,'last_time'=>time(),'reg_time'=>time(),'last_ip'=>'127.0.0.1'];
			DB::table('live_user')->insert($a);
		}
		
    }
}
