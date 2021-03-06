<?php
/**
 * Set any extra include paths needed to use the library
 */
set_include_path(get_include_path() . PATH_SEPARATOR . "/.amd_mnt/10.1.1.100/vol/home/admin/manic/git/pixmurmur/webdata/extlibs/php-openid-2.1.3");

/**
 * The URL for the server.
 *
 * This is the location of server.php. For example:
 *
 * $server_url = 'http://example.com/~user/server.php';
 *
 * This must be a full URL.
 */
$server_url = "http://user.pixnet.tw/~manic/server/server.php";

/**
 * Initialize an OpenID store
 *
 * @return object $store an instance of OpenID store (see the
 * documentation for how to create one)
 */
function getOpenIDStore()
{
    require_once "Auth/OpenID/FileStore.php";
    return new Auth_OpenID_FileStore("/tmp/openid_server");
}

?>
