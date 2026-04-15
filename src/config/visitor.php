<?php

return [
    /*
     * The driver that will be used to store visits.
     * Supported: "database"
     */
    'driver' => 'database',

    /*
     * Table name for visits.
     */
    'table_name' => 'visits',

    /*
     * Model for visits.
     */
    'model' => \Shetabit\Visitor\Models\Visit::class,

    /*
     * If true, bot/crawler visits will be logged.
     */
    'ignore_bots' => true,

    /*
     * A list of IPs to ignore (e.g. your own server).
     */
    'ignore_ips' => [],

    /*
     * Columns to store in visits table.
     */
    'columns' => [
        'method',
        'request',
        'url',
        'referer',
        'languages',
        'useragent',
        'headers',
        'device',
        'platform',
        'browser',
        'ip',
        'visitable_id',
        'visitable_type',
        'visitor_id',
        'visitor_type',
    ],
];
