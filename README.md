# 简单的时间戳操作库
用于获取各种类型时间戳

# 使用
## 安装
```bash
composer require ppeerit/time
```
## 引入命名空间
```php
use Ppeerit/Time/Time
```
# 方法
## 今天开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::today();
```
## 昨日开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::yesterday();
```
## 本周开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::week();
```
## 上周开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::lastWeek();
```
## 本月开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::month();
```
## 上个月开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::lastMonth();
```
## 今年开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::year();
```
## 去年开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::lastYear();
```
## N天前的时间戳
```php
// 返回一个时间戳
$days = 10; // 本例定义为10天
$time = Time::daysAgo($days); // 返回10天前的时间戳
```
## N天后的时间戳
```php
// 返回一个时间戳
$days = 10; // 本例定义为10天
$time = Time::daysAfter($days); // 返回10天后的时间戳
```
## 天数转换成秒数
```php
// 返回一个数字
$days = 10; // 本例定义为10天
$seconds = Time::daysToSecond($days); // 返回10天共多少秒
```
## 周数转换成秒数
```php
// 返回一个数字
$weeks = 2; // 本例定义为2周
$seconds = Time::weekToSecond($weeks); // 返回2周共多少秒
```

### 更多方法完善中
