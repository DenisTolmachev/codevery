<?php
header('Content-Type: text/html; charset=utf-8');
$client_id = '886326638231129'; // Client ID
$client_secret = 'b7c273f2d18056fc7f3654a1544f73e6'; // Client secret
$redirect_uri = 'http://localhost/facebook-auth'; // Redirect URIs

$url = 'https://www.facebook.com/dialog/oauth';

$params = array(
    'client_id'     => $client_id,
    'redirect_uri'  => $redirect_uri,
    'response_type' => 'code',
    'scope'         => 'email,user_birthday'
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через Facebook</a></p>';

if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'client_id'     => $client_id,
        'redirect_uri'  => $redirect_uri,
        'client_secret' => $client_secret,
        'code'          => $_GET['code']
    );

    $url = 'https://graph.facebook.com/oauth/access_token';

    $tokenInfo = null;
    parse_str(file_get_contents($url . '?' . http_build_query($params)), $tokenInfo);

    if (count($tokenInfo) > 0 && isset($tokenInfo['access_token'])) {
        $params = array('access_token' => $tokenInfo['access_token']);

        $userInfo = json_decode(file_get_contents('https://graph.facebook.com/me' . '?' . urldecode(http_build_query($params))), true);

        if (isset($userInfo['id'])) {
            $userInfo = $userInfo;
            $result = true;
        }
    }
}
?>