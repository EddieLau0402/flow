<?php

return [

    //手机号段验证,可以自行修改
    //移动号段
    'YD'    => [
        '134',
        '135',
        '136',
        '137',
        '138',
        '139',
        '150',
        '151',
        '152',
        '157',
        '158',
        '159',
        '1705',
        '178',
        '182',
        '183',
        '184',
        '187',
        '188',
        '147'
    ],

    //联通号段
    'LT'    => [
        '130',
        '131',
        '132',
        '155',
        '156',
        '1709',
        '176',
        '185',
        '186',
        '145'
    ],

    //电信号段
    'DX'    => [
        '133',
        '153',
        '1700',
        '177',
        '180',
        '181',
        '189'
    ],

    //流米
    'liumi' => [
        'domain'    => env('LIUMI_API_DOMAIN', 'http://api.tenchang.com'),
        'appKey'    => env('LIUMI_APP_KEY', ''),
        'appSecret' => env('LIUMI_APP_SECRET', '')
    ],

    /**
     * 流量网关平台
     *
     * @author Eddie
     * @addon 2016-12-19
     */
    'liuliangwangguan' => [
        'domain' => env('LIULIANG_DOMAIN'),
        'custInteId' => env('LIULIANG_CUST_INTE_ID'),
        'secretKey' => env('LIULIANG_SECRET_KEY'),

        /*
         * 资源 :
         */
        'resources' => [
            /*
             * 移动全网 - 全国流量
             */
            'YD' => [ // 流量产品Id => 流量(M)
                '100010' => 10,
                '100030' => 30,
                '100070' => 70,
                '100100' => 100,
                '100150' => 150,
                '100300' => 300,
                '100500' => 500,
                '101024' => 1024,
                '102048' => 2048,
                '103072' => 3072,
                '104096' => 4096,
                '106144' => 6144,
                '111264' => 11264
            ],

            /*
             * 联通全网 - 全国流量
             */
            'LT' => [ // 流量产品Id => 流量(M)
                '100020' =>20,
                '100050' =>50,
                '100100' =>100,
                '100200' =>200,
                '100500' =>500,
                '101024' =>1024
            ],

            /*
             * 电信全网 - 全国流量
             */
            'DX' => [ // 流量产品Id => 流量(M)
                '100005' =>5,
                '100010' =>10,
                '100030' =>30,
                '100050' =>50,
                '100100' =>100,
                '100200' =>200,
                '100500' =>500,
                '101024' =>1024
            ]
        ]
    ],

    /**
     * 供应商: 欧飞 (Ofpay)
     */
    'ofpay' => [
        'userid'  => env('OFPAY_USERID'),
        'userpws' => env('OFPAY_USERPWD'),
        'version' => env('OFPAY_VERSION', '6.0'),
        'key' => env('OFPAY_KEY'),

        /*
         * 测试模式下 用户信息
         */
        'test_mode' => env('OFPAY_TEST_MODE', false),
        'test_api_url' => 'http://apitest.ofpay.com',
        'test_userid' => 'A08566',
        'test_userpws' => 'of111111',
        'test_key' => 'OFCARD',

        /*
         * 三网流量 [ 运营商 => [ 面值 => 流量值 ] ]
         */
        'resources' => [
            'YD' => [ // 运营商: 移动
                '3'   => '10M',
                '5'   => '30M',
                '10'  => '70M',
                '20'  => '150M',
                '30'  => '500M',
                '40'  => '700M',
                '50'  => '1G',
                '70'  => '2G',
                '100' => '3G',
                '130' => '4G',
                '180' => '6G',
                '280' => '11G'
            ],

            'LT' => [ // 运营商: 联通
                '3'  => '20M',
                '6'  => '50M',
                '10' => '100M',
                '15' => '200M',
                '30' => '500M'
            ],

            'DX' => [ // 运营商: 电信
                '1'  => '5M',
                '2'  => '10M',
                '5'  => '30M',
                '7'  => '50M',
                '10' => '100M',
                '15' => '200M',
                '30' => '500M',
                '50' => '1G'
            ]
        ]
    ],
];