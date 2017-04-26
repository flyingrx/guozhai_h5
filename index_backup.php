<?php
define(AppId,"wxf16155a2147f59a3"); 
define(AppSecret,"300771d35be840ef6deac076d03eecb5"); 
 
if($_REQUEST['act']=='del')
{
	foreach($_COOKIE as $key=>$value){
		   setCookie($key,"",time()-60);
	}
}
  
$wechatObj = new Wechat();    
class wechat {
	   
		public function get_access_token(){ 
			$param ['appid']  = AppId;  
			$param ['secret'] = AppSecret;  
			$param ['code'] = $_GET['code'];
			$param ['grant_type'] = 'authorization_code'; //client_credential

			$url = 'https://api.weixin.qq.com/sns/oauth2/access_token?'.http_build_query($param);
		 	 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$res = curl_exec($ch);
			curl_close($ch); 
			 
			$content = json_decode ( $res, true );
			if (! empty ( $content ['errmsg'] )) {
			   return false;
			}
			
			return $content;
		}

	 
	 
	 //通过授权获取用户信息, $content 是数组类型
	public function get_userinfo_by_auth($content){
		$url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$content ['access_token'].'&openid='.$content ['openid'].'&lang=zh_CN';
	  
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$content = curl_exec($ch);
		curl_close($ch);
		
		$user = json_decode($content, true);
		return $user;
	}
	
	/*获取code跳转*/
	public function get_code($url,$state){
		$param['appid'] = "wxf16155a2147f59a3"; //AppID 
		$param ['redirect_uri'] = $url; //获取code后的跳转地址
		$param ['response_type'] = 'code'; //不用修改
		$param ['scope'] = 'snsapi_userinfo'; //不用修改
		$param ['state'] = $state; //可在行定义该参数
		
		$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?'.http_build_query($param).'#wechat_redirect';
		header('Location: '.$url);
	}
	  
}

if($_GET['code'] && empty($_COOKIE['wxd_openid']))
{  
	$access_token=$wechatObj->get_access_token(); 
	$info=$wechatObj->get_userinfo_by_auth($access_token); 
	setcookie('wxd_openid',$info['openid'],time()+31536000);
	setcookie('dzp_openid',$info['openid'],time()+31536000);
	setcookie('nick',$info['nickname'],time()+31536000);
	setcookie('img',$info['headimgurl'],time()+31536000); 
	
	//进行插入
	mysql_connect("localhost",'root','root')or die('Error');
    mysql_select_db('wx');
    mysql_query("set names 'utf8'");
			   
	$sql="insert into wxopen(nick,openid,img) values('{$info[nickname]}','{$info[openid]}','{$info[headimgurl]}')";
	mysql_query($sql);

	header('Location: /xfzl/html/action.php');
 
}else
{

	
	if(empty($_COOKIE['wxd_openid']))
	{ 
		$code=$wechatObj->get_code("http://zl.obeibei.com/xfzl/",time());
	}else
	{
	    header('Location: /xfzl/html/action.php');
	}
	
}  
?>