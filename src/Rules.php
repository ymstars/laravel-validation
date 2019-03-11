<?php
/**
 * Created by YMSTARS.LTD -Junjie Zeng.
 * Author: Junjie Zeng
 * Email: ymstars@qq.com
 * Url: www.ymstars.com
 * Date: 2019/3/11
 * Time: 15:44
 */

namespace Ymstars\Validation;


use Ymstars\Validation\Rules\CnMobilePhoneRule;
use Ymstars\Validation\Rules\CnTelRule;

class Rules
{
    /**
     * @return CnMobilePhoneRule
     */
    public static function cnMobilePhone()
    {
        return new CnMobilePhoneRule();
    }

    /**
     * @return CnTelRule
     */
    public static function cnTel()
    {
        return new CnTelRule();
    }
}