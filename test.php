<?php
/**
 * Created by PhpStorm.
 * User: singi
 * Date: 2018/4/6
 * Time: 20:22
 */

require_once 'src/CountdownFormat.php';

use src\CountdownFormat;

var_dump(countdownFormat::getFormat(13333));//最简单的调用
var_dump(countdownFormat::getFormat(13333,'dhm'));//自定义返回格式,默认xx天xx时xx分xx秒
var_dump(countdownFormat::getFormat(13333,'dhm',['d'=>'day','h'=>'hour','m'=>'min','s'=>'seconds']));//自定义返回格式,时间单位,默认天时分秒