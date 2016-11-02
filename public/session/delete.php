<?php
use core\Request;
use core\Response;
use core\session\Session;
use core\Util;

if (Request::isGet()) {
} else if (Request::isPost()) {
    Session::delete(Request::post('key'));
    Util::setMessage('success', '削除しました');
    Response::redirect('list');
}
