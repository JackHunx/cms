<?

/******************************
 * $File: user.class.php
 * $Description: 数据库处理文件
 * $Author: ahui 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/
include_once("friends.class.php");
class userClass extends friendsClass{
	
	const ERROR = '操作有误，请不要乱操作';
	const TYPE_NAME_NO_EMPTY = '类型名称不能为空';
	const USERLOGIN_USERNAME_NO_EMPTY = '用户名不能为空';
	const USERLOGIN_PASSWORD_NO_EMPTY = '密码不能为空';
	const USERLOGIN_USERNAME_PASSWORD_NO_RIGHT = '用户名密码错误';
	const USER_ADD_LONG_USERNAME = '用户名长度不能超过15个字符';
	const UESR_UCENTER_NO_RIGHT = 'Ucenter不能同步注册信息';
	const SENDEMAIL_EMAIL_NO_EMPTY = '找不到邮箱';
	const USER_REG_EMAIL_EXIST = '邮箱已经存在';
	const USER_REG_USERNAME_EXIST = '用户名已经存在';
	const USER_REG_ERROR = '用户注册失败，请跟管理员联系';
	const USER_PROTECTION_ANSWER_NO_EMPTY = '用密码保护答案不能为空';
	function userClass(){
		//连接数据库基本信息
		global $mysql, $module;
        
		$this->mysql = $mysql;
		$this->ip = ip_address();//Ip
        $this->is_uc = false;
        $this->is_open_vip = false;
        
	}


	/**
	 * 检查用户是否已经登录
	 *
	 * @param Varchar $username
	 * @return Bollen
	 */
	function check_login($res="no", $msg=""){
		global $magic;
		if ($res == "no" && $_SESSION['adminname'] == ""){
			$tpl = "admin_login.html";
			$magic->display($tpl);
			exit;
		}
	}

	/**
	 * 检查用户名密码
	 *
	 * @param array $data
	 * @return array
	 */
	function CheckUsernamePassword($data = array()){
		global $mysql;
		$password = $data['password'];
		$user_id = $data['user_id'];
		$_sql = "";
		
		$sql = "select * from `{user}` where  user_id = '{$user_id}' and password='".md5($password)."'";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false) return false;
		return true;
	}
	
	
	/**
	 * 检查邮箱
	 *
	 * @param array $data
	 * @return array
	 */
	function CheckEmail($data = array()){
		global $mysql;
		$email = $data['email'];
		$_sql = "";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select * from `{user}` where  email = '{$email}' $_sql";
		$result = $mysql -> db_fetch_array($sql);
		//如果邮箱不存在的话则返回
		if ($result == false) return false;
		return true;
	}
	
	/**
	 * 检查用户名
	 *
	 * @param array $data
	 * @return array
	 */
	function CheckUsername($data = array()){
		global $mysql;
		$username = $data['username'];
		$_sql = "";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select * from `{user}` where  username = '{$username}' $_sql";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false) return false;
		return true;
	}
	
	
	/**
	 * 检查身份证
	 *
	 * @param array $data
	 * @return array
	 */
	function CheckIdcard($data = array()){
		global $mysql;
		$card_id  = $data['card_id'];
		$_sql = "";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select * from `{user}` where  card_id  = '{$card_id}' $_sql";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false) return false;
		return true;
	}
	
	/**
	 * 检查用户名邮箱
	 *
	 * @param array $data
	 * @return array
	 */
	function CheckUsernameEmail($data = array()){
		global $mysql;
		$email = $data['email'];
		$username = $data['username'];
		$user_id = $data['user_id'];
		$_sql = "";
		if ($user_id!=""){
			$_sql = " and user_id!={$user_id}";
		}
		$sql = "select * from `{user}` where  (email = '{$email}' or username = '{$username}')  $_sql";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false) return false;
		return true;
	}
	
	/**
	 * 用户登录
	 *
	 * @param array $data
	 * @return array
	 */
	function Login($data = array()){
		global $mysql;
		
		$user_id = isset($data['user_id'])?$data['user_id']:"";
		$username = isset($data['username'])?$data['username']:"";
		$password = isset($data['password'])?$data['password']:"";
		$email = isset($data['email'])?$data['email']:"";
		//if ($username=="" )	return self::USERLOGIN_USERNAME_NO_EMPTY;1bf1cd3b0969955539bb4f92cef14d92
		if ($password=="" )	return self::USERLOGIN_PASSWORD_NO_EMPTY;
		
		if(isset($data['superadmin']) && $data['superadmin']==true){
			$sql = "select p1.*,p2.purview as pur,p2.type,p2.name as typename from `{user}` as p1 left join `{user_type}` as p2 on p1.type_id = p2.type_id where  p1.email = '{$data['email']}' or p1.user_id = '{$user_id}' or p1.username = '{$username}'";
			return $mysql->db_fetch_array($sql);
		}
		$sql = "select p1.*,p2.purview as pur,p2.type,p2.name as typename from `{user}` as p1 left join `{user_type}` as p2 on p1.type_id = p2.type_id where p1.`password` = '".md5($password)."' and (p1.email = '{$email}' or p1.user_id = '{$user_id}' or p1.username = '{$username}')";
		
		if (isset($data['type']) && $data['type']!=""){
			$sql .= " and p2.type = '{$data['type']}'";
		}
		/*
		if (isset($data['email']) && $data['email']!=""){
			$sql .= " and p1.email = '{$data['email']}'";
		}
		if (isset($data['user_id']) && $data['user_id']!=""){
			$sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		if (isset($data['username']) && $data['username']!=""){
			$sql .= " and p1.username = '{$data['username']}'";
		}
		*/
		$result = $mysql->db_fetch_array($sql);
		
		if ($result == false){
			return self::USERLOGIN_USERNAME_PASSWORD_NO_RIGHT;
		}else{
			if(isset($data['superadmin']) && $data['superadmin']==true){
			
			}else{
				$sql = "update `{user}` set logintime = logintime + 1,uptime=lasttime,upip=lastip,lasttime='".time()."',lastip='".ip_address()."' where username='$username'";
				$mysql->db_query($sql);
			}
			return $result;
		}
	}
	public static function Isuc(){
		global $mysql;
		$sql = "select 1 from `{module}` where code = 'ucenter'";
		$result = $mysql->db_fetch_array($sql);
		return $result==false?false:true;
	}
	/**
	 * 获得列表
	 *
	 * @return Array
	 */
	public static function GetList($data = array()){
		global $mysql;
		
		$type = isset($data['type'])?$data['type']:"";
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$type_id = isset($data['type_id'])?$data['type_id']:"";
		$username = isset($data['username'])?$data['username']:"";
		
		$_sql = "";
		if ($type_id!=""){
			$_sql .= " and u.type_id in ($type_id)";
		}
		if ($type!=""){
			$_sql .= " and uy.type=$type";
		}
		if ($username!=""){
			$_sql .= " and u.username like '%$username%'";
		}
		if (isset($data['realname'])){
			$_sql .= " and u.realname like '%{$data['realname']}%'";
		}
		if (isset($data['email']) && $data['email']!=""){
			$_sql .= " and u.email like '%{$data['email']}%'";
		}
		if (isset($data['vip_status']) && $data['vip_status']!=""){
			$_sql .= " and uca.vip_status = {$data['vip_status']}";
		}
		if (isset($data['kefu_userid']) && $data['kefu_userid']!=""){
			$_sql .= " and uca.kefu_userid = {$data['kefu_userid']}";
		}
		if (isset($data['kefu_username']) && $data['kefu_username']!=""){
			$_sql .= " and uk.username like  '%{$data['kefu_username']}%'";
		}
		if (isset($data['real_status'])){
			$_sql .= " and u.real_status in ( {$data['real_status']})";
		}
		if (isset($data['avatar_status'])){
			$_sql .= " and u.avatar_status = {$data['avatar_status']}";
		}
		if (isset($data['phone_status'])){
			$_sql .= " and u.phone_status = {$data['phone_status']}";
		}
		if (isset($data['video_status'])){
			$_sql .= " and u.video_status = {$data['video_status']}";
		}
		$_select = " u.*,uy.name as typename,uca.vip_status,uca.vip_money,uk.username as kefu_username";
		$_order =  'order by u.`order` desc,u.user_id desc';
		
		if (isset($data['order'])){
			if ($data['order']=="new"){
				$_order= " order by u.addtime desc";
			}elseif ($data['order']=="integral"){
				$_order = " order by u.integral desc";
			}elseif ($data['order']=="hits"){
				$_order = " order by u.hits desc";
			}elseif ($data['order']=="real_status"){
				$_order = " order by u.real_status desc";
			}
		}
		$sql = "select SELECT
					from `{user}` as u
					left join `{user_type}` as uy on u.type_id=uy.type_id
					left join `{user_cache}` as uca on uca.user_id=u.user_id
					left join `{userinfo}` as uin on uin.user_id=u.user_id
						left join `{user}` as uk on uca.kefu_userid=uk.user_id
					";
		 if(self::Isuc()) {
		 	$sql .= " left join `{ucenter}` as uc on u.user_id=uc.user_id";
		 	if (isset($data['school'])){
		 		$_select = " u.*,uy.name as typename,uc.uc_user_id,us.school,us.professional";
				$sql .= " left join `{school_resume}` as us on u.user_id=us.user_id";
			}else{
				$_select = " u.*,uy.name as typename,uc.uc_user_id";
			}
		 }
		 $sql .= " where 1=1  $_sql	 ORDER LIMIT";
		
		//是否显示全部的信息
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
		}			 
				 
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	
	function GetOnes($data){
		global $mysql;
		$_sql = " where 1=1 ";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql .= " and user_id='{$data['user_id']}'";
		}
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and username='{$data['username']}'";
		}
		if (isset($data['email']) && $data['email']!=""){
			$_sql .= " and email='{$data['email']}'";
		}
		$sql = "select * from `{user}` {$_sql} ";
		$result = $mysql -> db_fetch_array($sql);
		return $result;
	}
	
	/**
	 * 查看用户
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		$user_id = isset($data['user_id'])?$data['user_id']:"";
		$username = isset($data['username'])?$data['username']:"";
		$password = isset($data['password'])?$data['password']:"";
		$email = isset($data['email'])?$data['email']:"";
		$type_id = isset($data['type_id'])?$data['type_id']:"";
		$sql = "CREATE TABLE IF NOT EXISTS `{user_cache}` (
 			 `user_id` int(11) NOT NULL DEFAULT '0')";
		$mysql ->db_query($sql);
		if ($user_id == "" && $username == "") return self::ERROR;
		$sql = "select p2.name as typename,p2.type,p3.*,p4.*,p5.*,p1.*  from `{user}` as p1 
				left join `{user_type}` as p2 on  p1.type_id = p2.type_id 	
				left join `{user_cache}` as p3 on  p3.user_id = p1.user_id 	
				left join `{account}` as p4 on  p4.user_id = p1.user_id 	
				left join `{userinfo}` as p5 on  p5.user_id = p1.user_id 	
				where 1=1 ";
		if ($user_id!=""){
			$sql .= " and p1.user_id = $user_id";
		}
		
		if ($password!=""){
			$sql .= " and  p1.password = '".md5($password)."'";
		}
		
		if ($username!=""){
			$sql .= " and  p1.username = '$username'";
		}
		
		if ($email!=""){
			$sql .= " and  p1.email = '$email'";
		}
		
		if ($type_id!=""){
			$sql .= " and p1.type_id = '$type_id'";
		}
		return $mysql->db_fetch_array($sql);
	}
	
	/**
	 * 添加
	 *
	 * @param Array $index
     * @param $user_id 返回用户ID
	 * @return Boolen
	 */
	function AddUser($data = array()){
		global $mysql;

        $password = '';
        if (!$data['username'] || !$data['password'] || !$data['email']) {
            return self::ERROR;
        }
		if (strlen($data['username'])>15){
			return self::USER_ADD_LONG_USERNAME;
		}
		if(self::CheckEmail($data)) return self::USER_REG_EMAIL_EXIST;
		if(self::CheckUsername($data)) return self::USER_REG_USERNAME_EXIST;
		
		$password = $data['password'];
        $data['password'] = md5($data['password']);
		$sql = "insert into `{user}` set `addtime` = '".time()."',`addip` = '".ip_address()."',`uptime` = '".time()."',`upip` = '".ip_address()."',`lasttime` = '".time()."',`lastip` = '".ip_address()."'";
		
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		
       $result = $mysql->db_query($sql);
	   if($result==false){
	   		return self::USER_REG_ERROR;
	   }else{
			$user_id = $mysql->db_insert_id();
			
			//加入缓存
			self::AddUserCache(array("user_id"=>$user_id));
			
			//加为好友
			if ($data['invite_userid'] !=""){
				$sql = "insert into `{friends}` set 		user_id='{$data['invite_userid']}',friends_userid='{$user_id}',type='1',status=1,addtime='".time()."'";
				$mysql ->db_query($sql);
				$sql = "insert into `{friends}` set 		friends_userid='{$data['invite_userid']}',user_id='{$user_id}',type='1',status=1,addtime='".time()."'";
				$mysql ->db_query($sql);
			}
			
			$is_uc = moduleClass::GetOne(array("code"=>'ucenter'));
			if($is_uc ) {
				$uc_user_id = UcenterClient::regUser($data['username'], $password, $data['email']);
				
				if (is_numeric($uc_user_id) && $uc_user_id>0){
					$sql = "insert into `{ucenter}`(user_id,uc_user_id) values({$user_id}, {$uc_user_id})";
					$this->mysql->db_query($sql);
					//激活
					$sql = "insert into ".UC_DBPREFIX."common_member set uid='{$uc_user_id}',email='".$data['email']."',username='".$data['username']."',password='".md5($password)."',status='0',emailstatus='1',avatarstatus='1' " ;
					$this->mysql->db_query($sql);
					$sql = "insert into ".UC_DBPREFIX."common_member_field_forum set uid='{$uc_user_id}',customshow ='26' " ;
					$this->mysql->db_query($sql);
					$sql = "insert into ".UC_DBPREFIX."common_member_field_home set uid='{$uc_user_id}' " ;
					$this->mysql->db_query($sql);
				}else{
					$sql = "delete from {user} where user_id=$user_id";
					$this->mysql->db_query($sql);
					return $uc_user_id;
				}
			}
    	   return $user_id;
		}
	}
	
	
	/**
	 * 修改
	 *
	 * @param Array $index
	 * @return Boolen
	 */
	function UpdateUser($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		if ($user_id == "" )	return self::ERROR;
		/*
        $user_name = $this->getUserName($user_id);
        if (!$user_name) {
            return -1;
        }
        if ($this->is_uc) {
            if (!UcenterClient::updateUser($user_name, '', $index['password'], $index['email'])) {
                return -1;
            }
        }
		*/
        if (isset($data['password'])) {
            if ($data['password']!="") {
                $data['password'] = md5($data['password']);
            }
            else{
                unset($data['password']);
            }
        }
		$sql = "update `{user}` set `user_id` = {$user_id}";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where `user_id` = $user_id";
		return $mysql->db_query($sql);
	}
	
	/**
	 * 批量处理用户
	 *
	 * @param Integer $type_id 
	 * @return boolen
	 */
	function ActionUser($data = array()){
		global $mysql; 
		$user_id = $data['user_id'];
		$order = $data['order'];
		if ($user_id == "" || $order == "" ) return self::ERROR;
		foreach ($user_id as $key => $id){
			$sql = "update `{user}` set `order`='".$order[$key]."' where user_id=$id";
			$mysql->db_query($sql);
		}
		return true;
	}
	
	
	/**
	 * 修改密码保护
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function UpdateUserProtection($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		$answer = $data['answer'];
		if ($user_id == "" )	return self::ERROR;
		if ($answer == "" )	return self::USER_PROTECTION_ANSWER_NO_EMPTY;
		$sql = "update `{user}` set `user_id` = {$user_id}";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where `user_id` = $user_id";
		return $mysql->db_query($sql);
	}
	
	/**
	 * 修改用户的各种信息
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function UpdateUserAll($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		if ($user_id == "" )	return self::ERROR;
		$sql = "update `{user}` set `user_id` = {$user_id}";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where `user_id` = $user_id";
		return $mysql->db_query($sql);
	}
	
		/**
	 * 修改用户的缓存信息
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function UpdateUserCache($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		if ($user_id == "" )	return self::ERROR;
		$sql = "update `{user_cache}` set `user_id` = {$user_id}";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where `user_id` = $user_id";
		return $mysql->db_query($sql);
	}
	
	/**
	 * 修改排序
	 *
	 * @param Integer $user_id
	 * @param Array $index
	 * @return Boolen
	 */
	public static function OrderUser($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		$order = $data['order'];
		if ($user_id == "" || $order == "")	return self::ERROR;
		
		if (is_array($user_id)){
			foreach($user_id as $key => $value){
				$sql = "update `{user}` set `order` = $order[$key] where `user_id` = $value";
				$mysql->db_query($sql);
			}
		}
		return true;
	}
	
	
	
	
	
	/**
	 * 删除用户
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function DeleteUser($data = array()){
		global $mysql;
		$user_id = $data['user_id'];
		$type = $data['type'];//用户的类型，是管理员还是普通用户
		if ($user_id == "")	return self::ERROR;
		/*
        if ($this->is_uc) {
            $uc_user_id = $this->getUserIdInUCenter($user_id);
            if (!$uc_user_id) {
                return -1;
            }
            if (!UcenterClient::deleteUser($uc_user_id)) {
                return -1;
            }
            $sql = "delete from `{ucenter}` where uc_user_id={$uc_user_id}";
            $this->mysql->db_query($sql);
        }
		*/
		$_sql = "";
		if ($type!=""){
			$_sql = " and type=$type";
		}
		
		$sql = "delete u from `{user}` u left join `{user_type}` ut on u.type_id=ut.type_id where u.user_id = $user_id  and ut.type=$type and u.user_id!=1 $_sql";
		return $mysql->db_query($sql);
	}
	
	
	
	

	/**
	 *添加管理员的操作记录
	 *
	 * @return Boolean
	 */
	public function add_log($index,$result){	
		global $mysql,$_G;
		$sql = "insert into `{user_log}` set `result`='$result',`user_id`='".$_G['user_id']."',`addtime`='".time()."',addip='".ip_address()."'";
		if (is_array($index)){
			foreach($index as $key => $value){
				$sql .= ",`$key` = '$value'";
			}
		}
		return $mysql->db_query($sql);
	}
	
	/**
	 *添加管理员的操作记录
	 *
	 * @return Boolean
	 */
	public function AddLog($index,$result){	
		global $mysql;
		$sql = "insert into `{user_log}` set `result`='$result',`user_id`='".$_SESSION['user_id']."',`addtime`='".time()."',addip='".ip_address()."'";
		if (is_array($index)){
			foreach($index as $key => $value){
				$sql .= ",`$key` = '$value'";
			}
		}
		return $mysql->db_query($sql);
	}
	
    /**
     * 获取用户名
     * @param $u_id 用户ID
     */
    public function GetUserName ($u_id) {
        $record = $this->mysql->db_fetch_array("select username from `{user}` where user_id={$u_id};");
        if (!$record) {
            return false;
        }
        return $record['username'];
    }

    /**
     * 获取用户对应ucenter uid
     * @param $u_id
     */
    public function GetUserIdInUCenter ($user_id) {
        $record = $this->mysql->db_fetch_array("select uc_user_id from `{ucenter}` where user_id={$user_id};");
        if (!$record) {
            return false;
        }
        return $record['uc_user_id'];
    }

	/**
	 * 获取会员所在城市名称
	 */
	public static function GetUserCity ($data = array()) {
		global $mysql; 
		$user_id = $data['user_id'];
		if (empty($user_id)) return self::ERROR;
		$sql = "select a.name from `{user}` u left join {area} a on u.city=a.id
					where u.user_id={$user_id}";
		$area = $mysql->db_fetch_array($sql);

		return $area['name'];
	}
	
	/**
	 * 获取用户类型的列表
	 */
	public static function GetTypeList ($data = array()) {
		global $mysql; 
		$_sql = "";
		if (isset($data['where']) && $data['where']!=""){
			$_sql .= $data['where'];
		}
		if (isset($data['type']) && $data['type']!=""){
			$_sql .= " and type=".$data['type'];
		}
		$sql = "select * from `{user_type}` where 1=1 $_sql order by `order` desc";
		$result = $mysql -> db_fetch_arrays($sql);
		return $result;
	}
	
	/**
	 * 查看类型
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetTypeOne($data = array()){
		global $mysql; 
		if ($data['type_id'] == "") return self::ERROR;
		$sql = "select * from `{user_type}` where `type_id` = ".$data['type_id'];
		return $mysql->db_fetch_array($sql);
	}	
	
	/**
	 * 添加类型
	 *
	 * @param Array $index
	 * @return Boolen
	 */
	public static function Addtype($data = array()){
		global $mysql; 
		if ($data['name'] == "")	return self::TYPE_NAME_NO_EMPTY;
		$sql = "insert into `{user_type}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		if (is_array($data)){
			foreach($data as $key => $value){
				$sql .= ",`$key` = '$value'";
			}
		}
		return $mysql->db_query($sql);
	}
	
	/**
	 * 修改类型
	 *
	 * @param Array $index
	 * @return Boolen
	 */
	public static function UpdateType($data = array()){
		global $mysql; 
		if ($data['name'] == "")	return self::TYPE_NAME_NO_EMPTY;
		$type_id = $data['type_id'];
		if ($type_id == "" )	return self::ERROR;
		$_sql = array();
		$sql = "update `{user_type}` set ";
		foreach($data as $key => $value){
			$_sql[]= "`$key` = '$value'";
		}
		
		$sql .= join(",",$_sql)." where `type_id` = $type_id";
		return $mysql->db_query($sql);
	}

	
	
	/**
	 * 删除类型
	 *
	 * @param Array $data
	 * @return boolen
	 */
	public static function DeleteType($data = array()){
		global $mysql; 
		$type_id = $data['type_id'];
		if ($type_id == "") return self::ERROR;
		$sql = "delete from `{user_type}` where `type_id` = $type_id and type_id!=1";
		$mysql->db_query($sql);
		$sql  = "delete from `{user}` where `type_id` = $type_id and type_id!=1";
		$mysql->db_query($sql);
		return true;
	}
	
	/**
	 * 类型排序
	 *
	 * @param Integer $type_id 
	 * @return boolen
	 */
	function OrderType($data = array()){
		global $mysql; 
		$type_id = $data['type_id'];
		$order = $data['order'];
		if ($type_id == "" || $order == "" ) return self::ERROR;
		foreach ($type_id as $key => $id){
			$sql = "update `{user_type}` set `order`='".$order[$key]."' where type_id=$id";
			$mysql->db_query($sql);
		}
		return true;
	}
	
	/**
	 * 发送邮件
	 *
	 * @param Array $data 
	 * @return boolen
	 */
	function SendEmail($data = array()){
        global $mysql;
		require_once ROOT_PATH . 'plugins/mail/mail.php';

		$user_id = isset($data['user_id'])?$data['user_id']:'0';
		$title = isset($data['title'])?$data['title']:'系统信息';//邮件发送的标题
		$email = isset($data['email'])?$data['email']:'';//邮件发送的邮箱
		$msg   = isset($data['msg'])?$data['msg']:'系统信息';//邮件发送的内容
		$type = isset($data['type'])?$data['type']:'system';//邮件发送的类型
		
		if($email == ""){
			return self::SENDEMAIL_EMAIL_NO_EMPTY;
		}	
        
        $result = Mail::Send($title,$msg, array($email));
		
		$status = $result?1:0;
        
		$mysql->db_query("insert into `{user_sendemail_log}` set email='{$email}',user_id='{$user_id}',title='{$title}',msg='{$msg}',type='{$type}',status='{$status}',addtime='".time()."',addip='".ip_address()."'");
        return $result;
	}
	
	 /**
     * 激活会员
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
     function ActiveEmail ($data = array()) {
        global $mysql;
		$user_id = isset($data['user_id'])?$data['user_id']:'';
        if (empty($user_id)) return self::ERROR;
		$mysql->db_query("update `{user}` set email_status=1 where user_id=$user_id");
		$result = $mysql->db_fetch_array("select * from `{user}` where user_id=$user_id");
        return $result;
    }
	
	/**
     * 激活头像
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
     function ActiveAvatar ($data = array()) {
        global $mysql;
		$user_id = isset($data['user_id'])?$data['user_id']:'';
        if (empty($user_id)) return self::ERROR;
		$mysql->db_query("update `{user}` set avatar_status=1 where user_id=$user_id");
		$result = $mysql->db_fetch_array("select * from {user} where user_id=$user_id");
        return $result;
    }
	
	/**
     * 获得用户的动态
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
	public static function GetUserTrend($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql .= " and user_id in ({$data['user_id']})";
		}
		$_limit = "";
		if (isset($data['limit']) && $data['limit']!=""){
			$_limit = " limit {$data['limit']}";
		}
		$sql = "select friends_userid  from `{friends}` {$_sql} and status=1";
		$result = $mysql->db_fetch_arrays($sql);
		$_friend_userid = "";
		foreach ($result as $key => $value){
			$_friend_userid[] = $value['friends_userid'];
		}
		if ($_friend_userid!=""){
		$friend_userid = join(",",$_friend_userid);
		
		$sql = "select p1.*,p2.username from `{user_trend}` as p1 left join `{user}` as p2 on p1.user_id=p2.user_id where p1.user_id in ({$friend_userid}) order by p1.addtime desc  {$_limit}";
		$result =  $mysql->db_fetch_arrays($sql);
			return $result;
		}else{
			return "";
		}
	}
	
	/**
     * 添加好友的动态
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
	public static function AddUserTrend($data = array()){
		global $mysql;
		if (!isset($data['user_id']) || $data['user_id']==""){
			return self::ERROR;
		}
		$sql = "insert into `{user_trend}` set user_id='{$data['user_id']}',addtime='".time()."',content='{$data['content']}'";
		return $mysql->db_query($sql);
	}
	
	/**
     * 获得用户的缓存
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
	public static function GetUserCache($data = array()){
		global $mysql,$_G;
		
		if (isset($data['user_id']) && $data['user_id']!=""){
			$sql = "CREATE TABLE IF NOT EXISTS `{user_cache}` (
 			 `user_id` int(11) NOT NULL DEFAULT '0')";
			$mysql ->db_query($sql);
			$sql = "select p1.*,p3.username as kefu_username,p3.realname as  kefu_realname from `{user_cache}` as p1
				left join `{user}` as p3 on p1.kefu_userid = p3.user_id
			 where p1.user_id ='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result == false) {
				//加入缓存
				self::AddUserCache(array("user_id"=>$data['user_id']));
				$result = $mysql->db_fetch_array($sql);
			}
		}else{
			$sql = "select * from `{user_cache}` order by user_id desc";
			$result = $mysql->db_fetch_arrays($sql);
		}
		
		return $result;
	}
	
	
	/**
     * 加入缓存
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
	public static function AddUserCache($data=array()){
		global $mysql,$_G; 
		if ($data['user_id'] == "")	return self::ERROR;
		$_sql = array();
		$sql = "insert into  `{user_cache}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		if (isset($_G['system']["con_user_amount"]) && $_G['system']['con_user_amount']!=""){
			$sql .= "borrow_amount={$_G['system']['con_user_amount']},";
			$_amount = $_G['system']['con_user_amount'];
		}else{
			$sql .= "borrow_amount=2000,";
			$_amount = 2000;
		}
		 $mysql->db_query($sql.join(",",$_sql));
		 $sql = "insert into  `{user_amount}` set credit={$_amount},credit_use={$_amount},credit_nouse=0,user_id={$data['user_id']}";
		 $mysql->db_query($sql);
	}
	
	/**
     * vip申请
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */
	public static function ApplyUserVip($data=array()){
		global $mysql; 
		if ($data['user_id'] == "")	return self::ERROR;
		$sql = "update `{user_cache}` set kefu_userid = '{$data['kefu_userid']}',kefu_addtime = '".time()."',`vip_status`=2,`vip_remark` = '".$data['vip_remark']."' where user_id = {$data['user_id']}";
		return $mysql->db_query($sql);
	}
	
	function GetUserNum(){
		global $mysql; 
		$sql = "select count(*) as num from `{user}`";
		$result = $mysql -> db_fetch_array($sql);
		return $result;	
	}
	
		/**
     * 改变类型
     * @param $param array('user_id' => '会员ID')
	 * @return bool true/false
     */

	function TypeChange($data){
		global $mysql;
		$type = isset($data['type'])?$data['type']:"new";
		if ($type=="new"){
			$sql = "insert into `{user_typechange}` set old_type='{$data['old_type']}',new_type='{$data['new_type']}',user_id='{$data['user_id']}',addtime='".time()."',addip='".ip_address()."',content='{$data['content']}',status=0";
			return $mysql->db_query($sql);
		}elseif ($type=="update"){
			$sql = "update `{user_typechange}` set status='{$data['status']}' where id='{$data['id']}' ";
			$mysql->db_query($sql);
			$result = self::TypeChange(array("id"=>$data['id'],"type"=>"view"));
			if ($data['status']==1 && $result['user_id']!=1){
				$sql = "update `{user}` set type_id='{$result['new_tyoe']}' where user_id='{$result['user_id']}'";
				$mysql->db_query($sql);
			}
			return true;
		}elseif ($type=="view"){
			$sql = "select * from `{user_typechange}` where id='{$data['id']}'";
			return $mysql->db_fetch_array($sql);
		
		}elseif ($type=="list"){
			$page = empty($data['page'])?1:$data['page'];
			$epage = empty($data['epage'])?10:$data['epage'];
			$sql = "select SELECT from `{user_typechange}` as p1 
					left join `{user}` as p2 on p1.user_id = p2.user_id 
					left join `{user_type}` as p3 on p1.old_type = p3.type_id 
					left join `{user_type}` as p4 on p1.new_type = p4.type_id 
					
					ORDER LIMIT";
			$_select = "p1.*,p2.realname,p2.username,p3.name as old_typename,p4.name as new_typename";
			$_order = " order by p1.id desc";
			//是否显示全部的信息
			if (isset($data['limit']) ){
				$_limit = "";
				if ($data['limit'] != "all"){
					$_limit = "  limit ".$data['limit'];
				}
				return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
			}			 
				 
			$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
			
			$total = $row['num'];
			$total_page = ceil($total / $epage);
			$index = $epage * ($page - 1);
			$limit = " limit {$index}, {$epage}";
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
			$list = $list?$list:array();
		
			return array(
				'list' => $list,
				'total' => $total,
				'page' => $page,
				'epage' => $epage,
				'total_page' => $total_page
			);
		}
	}
	
		
		public static function GetUserBirthday(){
			global $mysql;
			$days = date('t',time());
			$first_time = date("m",time())."01";
			$end_time = date("m",time())."31";
			$sql = "select birthday,user_id,username,realname from `{user}`  ";
			$result = $mysql->db_fetch_arrays($sql);
			$_result="";
			foreach ($result as $key => $value){
				if ($value['birthday']!=""){
					$btime = date("md",$value['birthday']);
					if ($btime>$first_time && $btime <$end_time){
						$_result[$key]['monthday'] = $btime;
						$_result[$key]['user_id'] = $value['user_id'];
						$_result[$key]['birthday'] = $value['birthday'];
						$_result[$key]['realname'] = $value['realname'];
					}
				}
			}
			sort($_result);
			return $_result;			
		}	
}
?>