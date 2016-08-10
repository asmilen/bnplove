<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class csgodoubleController extends Controller
{
    //
    public function index()
    {
    	$result = array();

    	$file = fopen(storage_path('serverseed.txt'), "r");
    	$myfile = fopen(storage_path('rolls.txt'), "w"); 
		while (!feof($file)) {
			$line_of_text = fgets($file);
			$server_seed = substr($line_of_text,11,64);
			$lotto = substr($line_of_text,76,10);
			$rolls = explode("-",trim(substr($line_of_text,87)));
			$min_roll = intval($rolls[0]);
			$max_roll = intval($rolls[1]);

			for ($i=$max_roll; $i >= $min_roll ; $i--) { 
				$roll = $this->getResultByData($server_seed,$lotto,$i);
				fwrite($myfile, $roll."\r\n");
				if ($roll != 'green') {
					$result[] = $roll;
				}
			}
			
		}
		fclose($myfile);
		$same = 0; $different = 0; $green = 0;
		$train_same = 0; $train_diff = 0;
		$max_same = 0; $max_diff = 0;

		for ($i=1; $i < count($result); $i++) { 
			if ($result[$i] == 'green') 
			{
				$green++;
				if ($train_same > $max_same) $max_same = $train_same;
				$train_same = 0;
				if ($train_diff > $max_diff) $max_diff = $train_diff;
				$train_diff = 0;
			}
			elseif($result[$i] != $result[$i-1]) 
			{
				$different++;
				$train_diff++;
				if ($train_same > $max_same) $max_same = $train_same;
				$train_same = 0;
			}else
			{
				$same++;
				$train_same++;
				if ($train_diff > $max_diff) $max_diff = $train_diff;
				$train_diff = 0;
			}
		}

		return 'Tổng số roll: ' . count($result) . "\n Số lần giống nhau: " . $same . "\n Số lần khác nhau: " . $different ." Số lần green " . $green . ' Số lần giống nhau dài nhất' . $max_same . ' Số lần khác nhau dài nhất ' . $max_diff;
    }

    public static function getResultByData($server_seed,$lotto,$round_id)
    {
    	$hash = hash("sha256",$server_seed."-".$lotto."-".$round_id);
		$roll = fmod(hexdec(substr($hash,0,8)),15);
		switch ($roll) {
						case 0:
							return 'green';
							break;
						case ($roll <= 7):
							return 'red';
							break;
						case ($roll <= 14):
							return 'black';
							break;
					}			
    }
}
