<?php
	require_once("./configuration.php");	//引入配置常量文件
	//data_default_timezone_set(TIMEZONE);
	
	/**
	 *类名：DB
	 *说明：数据库操作类
	 */
	class DB{
		private $host;            //服务器
        private $username;        //数据库用户名
        private $password;        //数据密码
        private $dbname;          //数据库名
        private $conn;            //数据库连接变量
		
		/**
         * DB类构造函数
         */
        public function DB($host=DB_HOST ,$username=DB_USER,$password=DB_PASSWORD,$dbname=DB_NAME)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
             
        }
		/**
         * 打开数据库连接
         */
        public function open()
        {
            $this->conn = mysql_connect($this->host,$this->username,$this->password) 
                or die("connect to mysql error: " . mysql_error());
            mysql_select_db($this->dbname);
            mysql_query("SET CHARACTER SET utf8");
        }
		/**
         * 关闭数据连接
         */
        public function close()
        {
            mysql_close($this->conn);
        }
        /**
         * 向数据库表中插入数据
         * @param：$table,表名
         * @param：$columns,包含表中所有字段名的数组。默认空数组，则是全部有序字段名
         * @param：$values,包含对应所有字段的属性值的数组
         */
        public function insertData($table,$columns=array(),$values=array())
        {
            $sql = 'insert into '. $table .'( ';
            for($i = 0; $i < sizeof($columns);$i ++)
            {
                $sql .= $columns[$i];
                if($i < sizeof($columns) - 1)
                {
                    $sql .= ',';
                }
            }
            $sql .= ') values ( ';
            for($i = 0; $i < sizeof($values);$i ++)
            {
                $sql .= "'".$values[$i]."'";
                if($i < sizeof($values) - 1)
                {
                    $sql .= ',';
                }
            }
            $sql .= ' )';
            $this->open();
            mysql_query($sql,$this->conn)
                or die("insert data error: " . mysql_error());
            $id = mysql_insert_id($this->conn);
            $this->close();
            return $id;
        }
	}
?>