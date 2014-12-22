<?php
	require_once("./db.class.php");
	
	/**
	 *类名：Admin
	 *说明：数据库操作类
	 */
	class Admin{
		public $name = NULL;
		public $password = NULL;
		
		/**
         * Admin类构造函数
         */
		public function __construct($name, $password){
			$this->name = $name;
			$this->password = MD5($password);;
		}

		/**
		 *检测账号
		 */
		public function check(){
			$result = false;
            $db = new DB();
            $admins = $db->getDataByAtr("admin", "name", $this->name);
            if($admins != NULL){
            	foreach ($admins as $admin) {
            		echo $admin->password;
            	}
            }
            return $result;
        }
	}
?>