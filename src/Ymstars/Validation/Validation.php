<?php
/**
 * Created by YMSTARS.LTD -Junjie Zeng.
 * Author: Junjie Zeng
 * Email: ymstars@qq.com
 * Url: www.ymstars.com
 * Date: 2019/3/11
 * Time: 15:21
 */

namespace Ymstars\Validation;

class Validation
{
    const EMAIL = '/^[a-zA-Z0-9]+([-_.][a-zA-Z0-9]+)*@([a-zA-Z0-9]+[-.])+([a-z]{2,5})$/';

    const CN_TEL = '/^(0\d{2,3})?(\d{7,8})$/';

    const CN_ID_CARD = '/(^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$)|(^[1-9]\d{5}\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}$)/';

    const CN_MOBILE_PHONE = '/^1[345789]\d{9}$/';

    /**
     * @param $regx
     * @param $value
     * @return bool
     */
    public static function match($regx, $value)
    {
        return preg_match($regx, $value);
    }

    public static function isEmail($value)
    {
        return self::match(self::EMAIL, $value);
    }

    public static function isCnTel($value)
    {
        return self::match(self::CN_TEL, $value);
    }

    public static function isCnMobilePhone($value)
    {
        return self::match(self::CN_MOBILE_PHONE, $value);
    }

    public static function isCnIdCard($value)
    {
        return self::match(self::CN_ID_CARD, $value);
    }

}