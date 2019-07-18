<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\DbDumper\Databases\MySql;
use DB;
use App\Quotation;
use File;


class BackupController extends Controller
{
	public function index(){
		return view('dbbackup.database-backup');
	}
	
	public function dataBackup(Request $request){  
		if(!empty($request->all()) && $request->backup == 'Backup'){
			$mysql_path = "D:\wamp\bin\mysql\mysql5.7.21\bin";
			$user_name = "root";
			$pass_word = "";
			$data_base = ['database_1','database_2','database_3','database_4'];
			$file_path = storage_path()."/db_backup/";
			if(!File::isDirectory($file_path)){
				File::makeDirectory($file_path, 0777, true, true);
			}			
			foreach($data_base as $db){
				$done = MySql::create()
					->setDumpBinaryPath($mysql_path)
					->setDbName($db)
					->setUserName($user_name)
					->setPassword($pass_word)
					->dumpToFile($file_path.$db.".sql");
			}
			return view('dbbackup.backup-done');
		}
		return view('dbbackup.database-backup');
	}
	
}
