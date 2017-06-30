<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

return [
    'communication' => [
        'topics' => [
            'customerCreated' => [
                'name' => 'customerCreated',
                'is_synchronous' => false,
                'request' => 'Magento\Customer\Api\Data\CustomerInterface',
                'request_type' => 'object_interface',
                'response' =>  null,
                'handlers' => [],
                'some_incorrect_key' => 'value'
            ],
        ]
    ]
];
