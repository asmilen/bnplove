<?php

defined('SYSPATH') OR die('No direct access allowed.');

require_once(PLUGINPATH . 'garena/auth.php');

class indexController extends Controller {

    private $uid     = false;
    private $project = 'khuyenmai';
    private $table = 'fo3_luckybox';

    public $items = array(
        '552'=>'Thẻ cung cấp EP<BR>(5,000,000 EP)',
        '555'=>'Thẻ cung cấp EP<BR>(1,000,000 EP)',
        '560'=>'Thẻ cung cấp EP<BR>(3,000,000 EP)',
        '567'=>'Thẻ cung cấp EP<BR>(2,000,000 EP)',
        '713'=>'Hộp may mắn huyền thoại',
		'762'=>'Hộp may mắn huyền thoại',
        '818'=>'Hộp may mắn Top 10',
        '991'=>'Hộp may mắn siêu hạng',
        '15009'=>'Top 100 <BR>(+2 ~ +5)',
        '15011'=>'Top 30 <BR>(+2 ~ +5)',
        '15028'=>'Top 200 mùa \'14 WC <BR>(+2 ~ +5)',
        '15025'=>'Top 50 mùa \'08 <BR>(+2 ~ +5)',
        '15028'=>'Top 200 mùa \'14 WC <BR>(+2 ~ +5)',
        '15029'=>'Top 100 mùa \'14 WC <BR>(+2 ~ +5)',
        '15030'=>'Top 50 mùa \'14 WC <BR>(+2 ~ +5)',
        '15031'=>'Top 30 mùa \'14 WC <BR>(+2 ~ +5)',
        '15037'=>'Top 30 mùa \'10U <BR>(+2 ~ +5)',
        '15038'=>'Top 50 mùa \'10U <BR>(+2 ~ +5)',
        '15044'=>'Top 100 mùa \'08E <BR>(+2 ~ +5)',
        '15100'=>'Top 30 các mùa<br> (+3~+6)',
        '15101'=>'Top 50 các mùa<br> (+3~+6)',
        '15102'=>'Top 100 các mùa<br> (+3~+6)',
        '16001'=>'Gói Top 30 C.Thủ các mùa<br>(+2~+5)',
        '16002'=>'Gói Top 50 C.Thủ các mùa<br>(+2~+5)',
        '200002'=>'Gói C.thủ<BR>chỉ định(99 C.thủ)',
        '200010'=>'Gói C.thủ<BR>chỉ định 50',
        '880056'=>'EPL các mùa (Top 5)',
        '880057'=>'La Liga các mùa (Top 5)',
        '880060'=>'EPL các mùa (Top 10)',
        '82214033'=>'Gói 100 C.Thủ tốt nhất<BR>(bao gồm World Best)',
        '82214037'=>'Gói Top 50 C.Thủ các mùa giải<br>(+2~+5)',
        '82214038'=>'Gói Top 100 C.Thủ các mùa giải<br>(+2~+5)',
        '82214071'=>'Gói Top 50<BR>(có World Best)',
        '82214072'=>'Gói Top 30<BR>(có World Best)',
        '82214104'=>'Gói C.thủ \'14 WC <BR> TOP 30',
        '82214121'=>'Gói C.thủ <BR>TOP 30',
        '82214217'=>'Top 50 WC (Có World Best)',
        '82214363'=>'Gói C.Thủ Xuất Sắc (Có \'10U)',
        '82231038'=>'Gói C.thủ World Cup<BR> chỉ định 30',
        '82231056'=>'Gói C.thủ Châu Âu \'10<BR>chỉ định 30',
        '82231057'=>'Gói C.thủ Châu Âu \'10<BR>chỉ định 50',
        '82231058'=>'Gói C.thủ Châu Âu \'10<BR>chỉ định 100',
        '82231107'=>'Gói C.thủ Châu Âu \'08<BR>chỉ định 30',
        '82231108'=>'Gói C.thủ Châu Âu \'08<BR>chỉ định 50',
        '82231109'=>'Gói C.thủ Châu Âu \'08<BR>chỉ định 100',
        '82231309'=>'Gói 10 C.Thủ tốt nhất<BR>(bao gồm World Best)',
        '82214020'=>'Top 30<BR>(có World Best)',
        '82214035'=>'Gói 30 C.Thủ tốt nhất<BR>(bao gồm World Best)',
        '82214036'=>'Gói Top 30 C.Thủ các mùa giải<br>(+2~+5)',
        '82214038'=>'Gói Top 100 C.Thủ các mùa giải<br>(+2~+5)',
        '82214103'=>'Gói C.thủ \'14 WC <BR> TOP 50',
        '82214175'=>'Gói siêu sao WC 2014',
        '82214217'=>'Top 50 WC (Có World Best)',
        '8040'=>'Gói C.Thủ Xuất Sắc (Có \'08E)',
        '16004'=>'Gói Top 200 C.Thủ các mùa<br>(+2~+5)',
        '15043'=>'Top 50 mùa \'08E <BR>(+2 ~ +5)',
        '82214300'=>'Gói C.Thủ Xuất Sắc',
        '552'=>'Thẻ cung cấp EP<BR>(5,000,000 EP)',
        '82231040'=>'Gói C.thủ World Cup<BR> chỉ định 100',
        '15048'=>'Top 50 mùa \'06 WC <BR>(+2 ~ +5)',
        '8010'=>'Gói Top 100 \'08E',
        '768'=>'Chìa khóa may mắn vàng \'08E',
        '15049'=>'Top 100 mùa \'06 WC <BR>(+2 ~ +5)',
        '82214110'=>'Gói C.thủ \'14 WC <BR>TOP 10',
        '15050'=>'Top 200 mùa \'06 WC <BR>(+2 ~ +5)',
        '15042'=>'Top 30 mùa \'08E <BR>(+2 ~ +5)',
        '82231205'=>'Gói C.thủ \'06 WC<BR>chỉ định 30',
        '880039'=>'Best 50 các mùa WC',
        '15039'=>'Top 100 mùa \'10U <BR>(+2 ~ +5)',
        '1900025'=>'Gói C.thủ <BR> chỉ định 7',
        '82231207'=>'Gói C.thủ \'06 WC<BR>chỉ định 100',
        '15010'=>'Top 50 <BR>(+2 ~ +5)',
        '82231059'=>'Gói C.thủ Châu Âu \'10<BR>chỉ định 200',
        '1900007'=>'Gói C.thủ <BR> chỉ định 3',
        '200009'=>'Gói C.thủ<BR>chỉ định 30',
        '15026'=>'Top 30 mùa \'08 <BR>(+2 ~ +5)',
        '82231206'=>'Gói C.thủ \'06 WC<BR>chỉ định 50',
        '82231209'=>'Gói C.thủ \'06 WC<BR>chỉ định 300',
        '762'=>'Chìa khóa may mắn vàng \'10U',
        '8001'=>'Gói Top 100 \'10U',
        '880038'=>'Best 30 các mùa WC',
        '200020'=>'Top 10 C.Thủ chỉ định',
        '8031'=>'Gói Top 100 \'06WC',
        '15045'=>'Top 200 mùa \'08E <BR>(+2 ~ +5)',
        '200000'=>'Gói C.thủ<BR>chỉ định (20 C.thủ)',
        '15008'=>'Top 200 <BR>(+2 ~ +5)',
        '82231303'=>'Gói C.Thủ TOTS<BR>chỉ định 50',
		'8051'=>'Gói C.Thủ Xuất Sắc (Có TOTS)',
		'8102'=>'Best 5 cầu thủ các mùa',
		'8103'=>'Best 7 cầu thủ các mùa',
		'15040'=>'Top 200 mùa \'10U <BR>(+2 ~ +5)',
		'890013'=>'Best 10 cầu thủ các mùa',
		'1900031'=>'Gói C.thủ TOTS<BR>chỉ định 7',
		'1900102'=>'Best 90 \'14 TOTS (+2-+5)',
		'1900118'=>'Gói C.thủ TOTS<BR>chỉ định 50 (+3)',
		'82214344'=>'World Legend và <BR>\'14 WC BEST 30',
		'82231302'=>'Gói C.thủ TOTS<BR>chỉ định 30',
		'82231707'=>'Gói C.thủ EC <BR>chỉ định 100',
    );

    public function __construct() {
        $this->_template          = 'fo3/' . $this->project;
        $this->_assign['project'] = $this->project;

        $this->_css = array('font-awesome.min', 'bootstrap.min', 'magnific-popup', 'style');
        $this->_js  = array('jquery.min', 'bootstrap', 'jquery.magnific-popup.min');

        $this->_head_title = 'FIFA Online 3 Vietnam: Garena Lucky Box';
        $this->_head_desc  = 'Garena Lucky Box';
        $this->_head_key   = 'EA SPORTS™ FIFA Online 3, Fifa 3 ,Fifa Online ,Fifa Online 3,FO3, FO3 Flash Quiz, Garena Lucky Box, SEA';

        if (isset($_SESSION['glogin']['data']['uid']) && !empty($_SESSION['glogin']['data']['uid'])) {
            $this->uid = $_SESSION['glogin']['data']['uid'];
        }

        $this->_assign['guid'] = 0;
    }

    private function block() {
        if (!isset($this->uid) || empty($this->uid) || $this->uid == false) {
            header("Location: " . BASE_URL . "/index/logout");
            die();
        }
    }

    public function indexAction($params) {
        $begin_time = strtotime(BEGIN_TIME);
        $end_time = strtotime(END_TIME);
        $now = time();
        if ($now < $begin_time || $end_time < $now) {
            header("Location: " . BASE_URL . "/index/end");
            exit;
        }

        global $_url;

        if (isset($_SESSION['glogin'])) {
            header("Location: " . BASE_URL . "/index/logout");
            die();
        }

        $garenaAuth = new GarenaAuth();
        //$garenaAuth->setTokenUrl(GARENA_AUTH_API . '/oauth/login?client_id=%1$s&redirect_uri=%2$s&response_type=token&locale=vi-VN');
        $garenaAuth->setTokenUrl('http://cocc.ved.com.vn/test/test_auth/auth.php?client_id=%1$s&redirect_uri=%2$s&response_type=token');
        $garenaAuth->setClientId(10021);
        $garenaAuth->setRedirectUri(BASE_URL . '/index/authen');
        $this->_assign['authUrl'] = $garenaAuth->getTokenUrl();

        $token = isset($_COOKIE['gtoken']) ? trim($_COOKIE['gtoken']) : '';
        $token = $this->xss_clean($token);
        if (!empty($token)) {
            $garenaAuth->setAccessToken($token);
            setcookie('gtoken', $token, time() - 1);
            $garenaAuth->setLogoutUrl(GARENA_AUTH_API . '/oauth/logout?access_token=%1$s');
            $logoutUrl = $garenaAuth->getLogoutURL();
            $this->_assign['logoutUrl'] = $logoutUrl;
        }

        $this->_js[] = 'auth';
        $this->_js[] = 'jquery.transform2d';
        $this->_js[] = 'animation';
        $this->render('layout-0', dirname(__FILE__) . '/index');
    }

    public function authenAction($params) {
        $garenaAuth = new GarenaAuth();
        $token = trim($this->get['access_token']);
        $token = $this->xss_clean($token);
        $garenaAuth->setAccessToken($token);
        setcookie('gtoken', $token, time() + 86400);
        $garenaAuth->setUserUrl('http://cocc.ved.com.vn/test/test_auth/getUser.php');
        //$garenaAuth->setUserUrl(GARENA_AUTH_API . '/oauth/user/info/get?access_token=%1$s');
        $getUserInfoUrl = $garenaAuth->getUserUrl();
        $content = $this->file_get_contents_curl($getUserInfoUrl);


        $user = json_decode($content, true);
        if (!empty($user)) {
            $user['nickname'] = $user['username'];
            $this->uid = $user['uid'];
            $this->username = $user['username'];
            $this->nickname = $user['nickname'];
            $this->icon = $user['icon'];
            $_SESSION['glogin']['data'] = $user;
            exit('<script>parent.closeColorbox();</script>');
        } else {
            exit('<script>alert("' . core_lang::translate('Error when logging in, please try again!') .'");</script>');
        }
    }

    public function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function saveAction() {
        $this->block();

        if (isset($this->uid) && !empty($this->uid)) {
            core_util::ck_ref();
            $redis = core_redis::getInstance();
            $rs = $redis->getUser($this->uid);
            if (!isset($rs['uid'])) {
                //$res = core_curl::get(CHECKDEAL_API . '/api/deals/?uid=' . $this->uid . '&hint=1');
                $res = core_curl::get('http://cocc.ved.com.vn/test/fo3luckybox/v3/checkdeal1.json');
                $res = json_decode($res, true);
                if(isset($res['success']) && $res['success']==true) {
                    $str = date('Y-m-d H:i:s', $res['result']['expire_time']);
                    $date = new DateTime($str, new DateTimeZone("Asia/Singapore"));
                    $date->setTimezone(new DateTimeZone("UTC"));

                    $result = $redis->setUser(array(
                        'uid'             => $this->uid,
                        'account'         => $_SESSION['glogin']['data']['username'],
                        'nickname'        => $_SESSION['glogin']['data']['nickname'],
                        'items'           => $res['result']['itemcode']['items'],
                        'cash_percentage' => $res['result']['itemcode']['cash_percentage'],
                        'itemname'        => $res['result']['itemname'],
                        'expire_time'     => $date->format('Y-m-d H:i:s'),
                        'status'          => 1,
                        'join_date'       => date('Y-m-d H:i:s'),
                    ));
                } else {
                    $msg = core_lang::translate('Sorry, you don\'t have enough condition to have this deal');
                    core_util::alert('url', $msg, BASE_URL . '/index/logout');
                    header("Location: " . BASE_URL . "/index/logout");
                    die();
                }
            } else {
                if ($rs['status'] == 1) {
                    //$res = core_curl::get(CHECKDEAL_API . '/api/deals/?uid=' . $this->uid . '&hint=2');
                    $res = core_curl::get('http://cocc.ved.com.vn/test/fo3luckybox/v3/checkdeal1.json');
                    $res = json_decode($res, true);
                    // Nếu user có quà, sau khi đổi sẽ mất
                    if (!isset($res['success']) || $res['success'] == false) {
                        $result = $redis->setUser(array(
                            'uid' => $this->uid,
                            'status' => 3,
                        ));
                    } elseif(time() > $res['result']['deal']['expire_time']) {
                        $result = $redis->setUser(array(
                            'uid' => $this->uid,
                            'status' => 2,
                        ));
                    }
                }
            }
        }
        header("Location: " . BASE_URL . "/index/offer");
    }

    public function offerAction() {
        $begin_time = strtotime(BEGIN_TIME);
        $end_time = strtotime(END_TIME);
        $now = time();
        if ($now < $begin_time || $end_time < $now) {
            header("Location: " . BASE_URL . "/index/end");
            exit;
        }
        $this->block();

        $redis = core_redis::getInstance();
        $rs = $redis->getUser($this->uid);
        if (empty($rs) || !isset($rs['uid'])) {
            header("Location: " . BASE_URL);
            die();
        }

        if (empty($rs['choice']) && isset($_POST['choice']) && ($_POST['choice']==1 || $_POST['choice']==2)) {
            $postParams = array(
                'uid' => $rs['uid'],
                'hint' => 2,
                'choice' => $_POST['choice'],
            );
            $res = core_curl::postform(CHECKDEAL_API . '/api/deals/', $postParams);
            $res = json_decode($res, true);
            if ($res['success'] == true) {
                $result = $redis->setUser(array(
                            'uid' => $rs['uid'],
                            'choice' => $_POST['choice'],
                ));
            }
            $rs = $redis->getUser($this->uid);
        }

        if(isset($rs['items'])){
            $rs['items'] = json_decode($rs['items'], true);
            if (count($rs['items'])){
                foreach ($rs['items'] as $key => &$value){
                    if(isset($this->items[$value['ItemId']])) {
                        $value['ItemName'] = $this->items[$value['ItemId']];
                    }
                }
            }
        }


        $this->_assign['card'] = 1;
        if ($rs['cash_percentage'] >= 60)
            $this->_assign['card'] = 2;
        if ($rs['cash_percentage'] >= 100)
            $this->_assign['card'] = 3;

        if ($rs['expire_time'] !== NULL) {
            $rs['countdown'] = max(0, strtotime($rs['expire_time']) - time());
        } else {
            $rs['countdown'] = NULL;
        }
        $this->_assign['data'] = $rs;

        $this->_assign['account'] = $_SESSION['glogin']['data']['username'];
        $this->_assign['nickname'] = $_SESSION['glogin']['data']['nickname'];

        $this->_js[] = 'jquery.transform2d';
        $this->_js[] = 'jquery.waitforimages.min';
        $this->_js[] = 'jquery.plugin.min';
        // $this->_js[] = 'jquery.countdown-vi'; // comment khi len live
        $this->_js[] = 'jquery.countdown.min';
        $this->_js[] = 'animation';

        $this->_assign['guid'] = 3;
        $this->render('layout-1', dirname(__FILE__) . '/offer');
    }

    public function sorryAction() {
        $this->render('layout-2', dirname(__FILE__) . '/sorry');
    }

    public function queueAction() {
        $this->render('layout-2', dirname(__FILE__) . '/queue');
    }

    public function endAction() {
        $this->render('layout-2', dirname(__FILE__) . '/end');
    }

    public function logoutAction($params) {
        $this->clearSession();

        // redirect
        $redir = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $redir = substr($redir, 0, strpos($redir, '/logout') + 1);

        header("HTTP/1.1 301 Moved Permanently");

        if ($_SERVER["SERVER_PORT"] != 443) {
            $redir = "Location: http://" . $redir;
        } else {
            $redir = "Location: https://" . $redir;
        }
        header($redir);
        die();
    }

    /**
     * Clear the login session
     */
    public function clearSession() {
        session_unset();
        session_destroy();
        unset($_SESSION['glogin']);
    }

    public function removeXss($string) {
        $string = str_replace(" ", "", $string);
        $string = preg_replace('/\s\s+/', '', strtolower($string));
        static $preg_find = array('#javascript#i', '#vbscript#i');
        static $preg_replace = array('java script', 'vb script');
        return preg_replace($preg_find, $preg_replace, $string);
    }

    public function xss_clean($data) {
        $data = $this->removeXss($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        $data = htmlspecialchars($data, ENT_QUOTES, '');
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
    }

}

?>