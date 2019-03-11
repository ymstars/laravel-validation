<?php
/**
 * Created by YMSTARS.LTD -Junjie Zeng.
 * Author: Junjie Zeng
 * Email: ymstars@qq.com
 * Url: www.ymstars.com
 * Date: 2019/3/11
 * Time: 15:43
 */

namespace Ymstars\Validation\Facade;

use Illuminate\Support\Facades\Facade;

class ValidationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yms-validation';
    }
}