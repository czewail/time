<?php
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 [Your name] <[Your email]>
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author     陈泽韦 <549226266@qq.com>
 * @copyright  2016 陈泽韦.
 * @license    http://www.opensource.org/licenses/mit-license.php  MIT License
 * @version    1.0.0
 * @link       http://
 */
namespace Ppeerit\Time;

/**
 * 时间戳操作类
 */
class Time
{
    /**
     * 今日开始和结束的时间戳
     *
     * @return array
     */
    public static function today()
    {
        return [
            mktime(0, 0, 0, date('m'), date('d'), date('Y')),
            mktime(23, 59, 59, date('m'), date('d'), date('Y')),
        ];
    }

    /**
     * 昨日开始和结束的时间戳
     *
     * @return array
     */
    public static function yesterday()
    {
        $yesterday = date('d') - 1;
        return [
            mktime(0, 0, 0, date('m'), $yesterday, date('Y')),
            mktime(23, 59, 59, date('m'), $yesterday, date('Y')),
        ];
    }

    /**
     * 明天开始和结束的时间戳
     *
     * @return array
     */
    public static function tomorrow()
    {
        $tomorrow = date('d') + 1;
        return [
            mktime(0, 0, 0, date('m'), $tomorrow, date('Y')),
            mktime(23, 59, 59, date('m'), $tomorrow, date('Y')),
        ];
    }

    /**
     * 本周开始和结束的时间戳
     *
     * @return array
     */
    public static function week()
    {
        $timestamp = time();
        return [
            strtotime(date('Y-m-d', strtotime("+0 week Monday", $timestamp))),
            strtotime(date('Y-m-d', strtotime("+0 week Sunday", $timestamp))) + 24 * 3600 - 1,
        ];
    }

    /**
     * 上周开始和结束的时间戳
     *
     * @return array
     */
    public static function lastWeek()
    {
        $timestamp = time();
        return [
            strtotime(date('Y-m-d', strtotime("last week Monday", $timestamp))),
            strtotime(date('Y-m-d', strtotime("last week Sunday", $timestamp))) + 24 * 3600 - 1,
        ];
    }
    /**
     * 下周开始和结束的时间戳
     *
     * @return array
     */
    public static function nextWeek()
    {
        $timestamp = time();
        return [
            strtotime(date('Y-m-d', strtotime("next week Monday", $timestamp))),
            strtotime(date('Y-m-d', strtotime("next week Sunday", $timestamp))) + 24 * 3600 - 1,
        ];
    }

    /**
     * 本月开始和结束的时间戳
     *
     * @return array
     */
    public static function month()
    {
        return [
            mktime(0, 0, 0, date('m'), 1, date('Y')),
            mktime(23, 59, 59, date('m'), date('t'), date('Y')),
        ];
    }

    /**
     * 上个月开始和结束的时间戳
     *
     * @return array
     */
    public static function lastMonth()
    {
        $begin = mktime(0, 0, 0, date('m') - 1, 1, date('Y'));
        $end   = mktime(23, 59, 59, date('m') - 1, date('t', $begin), date('Y'));

        return [$begin, $end];
    }
    /**
     * 下个月开始和结束的时间戳
     *
     * @return array
     */
    public static function nextMonth()
    {
        $begin = mktime(0, 0, 0, date('m') + 1, 1, date('Y'));
        $end   = mktime(23, 59, 59, date('m') + 1, date('t', $begin), date('Y'));

        return [$begin, $end];
    }

    /**
     * 今年开始和结束的时间戳
     *
     * @return array
     */
    public static function year()
    {
        return [
            mktime(0, 0, 0, 1, 1, date('Y')),
            mktime(23, 59, 59, 12, 31, date('Y')),
        ];
    }

    /**
     * 去年开始和结束的时间戳
     *
     * @return array
     */
    public static function lastYear()
    {
        $year = date('Y') - 1;
        return [
            mktime(0, 0, 0, 1, 1, $year),
            mktime(23, 59, 59, 12, 31, $year),
        ];
    }

    /**
     * 明年开始和结束的时间戳
     *
     * @return array
     */
    public static function nextYear()
    {
        $year = date('Y') + 1;
        return [
            mktime(0, 0, 0, 1, 1, $year),
            mktime(23, 59, 59, 12, 31, $year),
        ];
    }

    /**
     * 几天前的时间戳
     *
     * @param int $day
     * @return int
     */
    public static function daysAgo($day = 0)
    {
        $nowTime = time();
        return $nowTime - self::daysToSecond($day);
    }

    /**
     * 几天后的时间戳
     *
     * @param int $day
     * @return int
     */
    public static function daysAfter($day = 1)
    {
        $nowTime = time();
        return $nowTime + self::daysToSecond($day);
    }

    /**
     * 天数转换成秒数
     *
     * @param int $day
     * @return int
     */
    public static function daysToSecond($day = 1)
    {
        return $day * 86400;
    }

    /**
     * 周数转换成秒数
     *
     * @param int $week
     * @return int
     */
    public static function weeksToSecond($week = 1)
    {
        return self::daysToSecond() * 7 * $week;
    }

    /**
     * 当月月份
     *
     * @return [type] [description]
     */
    public static function dateThisMonth()
    {
        return date('m', strtotime('now'));
    }
    /**
     * 上月月份
     *
     * @return [type] [description]
     */
    public static function dateLastMonth()
    {
        return date('m', strtotime('-1 month'));
    }

    /**
     * 下月月份
     *
     * @return [type] [description]
     */
    public static function dateNextMonth()
    {
        return date('m', strtotime('+1 month'));
    }
}
