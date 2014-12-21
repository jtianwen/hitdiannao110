<?php
	require_once("./db.class.php");
	
	/**
	 *类名：Volunteer
	 *说明：数据库操作类
	 */
	class Volunteer{
		public $name = NULL;
		public $sex = NULL;
		public $studentid = NULL;
		public $college = NULL;
		public $phone = NULL;
		public $qq = NULL;
		public $email = NULL;
		public $nickname = NULL;
		public $password = NULL;
		public $regdate = NULL;
		
		/**
         * Volunteer类构造函数
         */
		public function __construct($name, $sex, $studentid, $college, $phone, $qq, $email, $nickname, $password){
			$this->name = $name;
			$this->sex = $sex;
			$this->studentid = $studentid;
			$this->college = $college;
			$this->phone = $phone;
			$this->qq = $qq;
			$this->email = $email;
			$this->nickname = $nickname;
			$this->password = MD5($password);;
			$this->regdate = time();
		}

		/**
		 *将volunteer插入表volunteer中
		 */
		public function insert(){
            $db = new DB();
            $resultid = $db->insertData("volunteer",array(),array('', $this->name, $this->sex, $this->studentid, 
            	$this->college, $this->phone, $this->qq, $this->email, $this->nickname, $this->password, $this->regdate, '0'));   
            return $resultid;
        }
	}
?>