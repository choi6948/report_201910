<?php

/**
 * 提出用のクラス
 * @author	Choi
 * @since	2019.10.13
 */

class App_Report{

	/**
	 * 引数の階乗を返却
	 * @param	int $param
	 * @return	int $result 引数にエラーがある場合は-1
	 */
	public function factorial($param = 0){
		// --- 引数チェックstart ---
		$result = -1;
		if(is_numeric($param) === false) {
			return $result;
		}
		if($param < 0){
			return $result;
		}
		// --- 引数チェックend ---

		$result = 1;
		for($i = $param ; $i >= 1 ; $i--){
			$result *= $i;
		}
		return $result;
	}
}

