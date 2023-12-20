<?php

use Illuminate\Support\Facades\Auth;

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// // For checking activated route
// function is_active_route($path) {
//     return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
// }

// For add 'show' class for activated route collapse
function show_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

// Define the helper function is_active_route
if (!function_exists('is_active_route')) {
    function is_active_route($path)
    {
        return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
    }
}


if (!function_exists('check_permission')) {
    function check_permission($permission_name)
    {
        $auth_user =  Auth::user();

        if (!$auth_user) {
            return false;
        }

        if ($auth_user->hasPermissionTo($permission_name)) {
            return true;
        }
        return false;
    }
}


if (!function_exists('payment_services')) {
    function payment_services()
    {
        return [
            'niwa-act-tariff-dues' => 'NIWA Act and Tariff Dues',
            'right-of-way-main-service' => 'USE OF RIGHT OF WAY MAIN SERVICES',
            'right-of-way-power-plants' => 'USE OF RIGHT OF WAY HYDRO ELECTRIC POWER DAMS AND POWER GENERATING STATIONS/PLANTS ON WATERWAYS SERVICES',
            'right-of-way-advertising' => 'USE OF RIGHT OF WAY ADVERTISING WITHIN / ON WATERWAYS SERVICES',
            'right-of-way-pipeline' => 'USE OF RIGHT OF WAY PIPELINES LAYING/ CROSSING SERVICES',
            'dredging-access-charge' => 'DREDGING ACCESS CHARGE',
            'dredging-reclamation' => 'DREDGING RECLAMATION CHARGE CANALISATION/DREDGING OF SLOTS',
            'waterway-operators-training' => 'TRAINING AND CERTIFICATION OF WATERWAY OPERATORS AND STAKEHOLDERS, AND ISSUANCE OF OPERATORS LICENSE',
            'registration-of-crafts' => 'REGISTRATION OF CRAFTS AND VESSELS AND SURVEY FEES FOR RIVER CRAFTS',
            'permit-fees-for-river-crafts' => 'ANNUAL PERMIT FEES AND OPERATIONAL CERTIFICATES FOR RIVER CRAFTS',

            'issue-control-licenses' => 'ISSUE AND CONTROL LICENSES FOR INLAND NAVIGATION, PIERS, JETTIES, DOCKYARDS',
            'grant-licenses' => 'GRANT LICENSES TO PRIVATE INLAND WATERWAY OPERATORS',
            'ferry-services' => 'OPERATE FERRY SERVICES WITHIN THE INLAND WATERWAYS SYSTEM'
        ];
    }
}

if (!function_exists('payment_processes_list')) {
    function payment_processes_list()
    {
        return [
            'application-form' => 'Client payment for Application Form',
            'processing-fee' => 'Client payment of Processing Fees',
            'inspection-fee' => 'Client payment for Inspection',
            'post-survey-fee' => 'Payment for Post Survey fees',
            'monitoring-fee' => 'Client’s Payment of Monitoring Fee (per annum) ',
            'occupational-fee' => 'Annual occupational fee per location',
            'equipment-access-fee' => 'ACCESS FEE FOR DREDGING EQUIPMENT (PER DAY)',
            'quantity-dredged-fee' => 'FEES FOR QUANTITY DREDGED',
            'land-area-for-spoil-disposal' => 'Land Area for spoil disposal (m3/month)',
            'examination-fees' => 'Client payment for Application Form and Examination Fees ',
            'payment-for-registration-vessel' => 'Clients payment for registration of vessel ',

            'payment-for-permit' => 'Client payment for Permit (fresh or renewal)',
            'payment-for-operational-certificate' => 'Client payment for Operational Certificate',
        ];
    }
}

if (!function_exists('dredging_type')) {
    function dredging_type()
    {
        return [
            'mechanical' => 'Mechanical',
            'manual' => 'Manual',
        ];
    }
}

if (!function_exists('dredging_period')) {
    function dredging_period()
    {
        return [
            '3 months' => '3 Months',
            '6 months' => '6 Months',
            'other' => 'Above 6 Months',
        ];
    }
}

if (!function_exists('square_area')) {
    function square_area()
    {
        return [
            '50000' => 'Less than 50,000 square metre',
            '100000' => 'Less than 100,000 square metre',
            'other' => 'Above 100,000 square metre',
        ];
    }
}

if (!function_exists('equipment')) {
    function equipment()
    {
        return [
            'hopper-dredge' => 'HOPPER DREDGE (Manual – 10 ton carriers / trip)',
            'above-26' => 'DREDGER above 26” (Manual – 8 ton carriers / trip)',
            '24-26' => 'Dredger 24” – 26” (Manual – 6 ton carriers / trip)',
            '16-22' => 'Dredger 16” – 22” (Manual – 4 ton carriers / trip)',
            '10-14' => 'Dredger 10” – 14”',
            'transporter' => 'Transporter',
            'dinghy-canoe' => 'Dinghy/Canoe'
        ];
    }
}

if (!function_exists('annual_permit_river_craft')) {
    function annual_permit_river_craft()
    {
        return [
            'motorized-canoe' => 'Motorized Dinghy/canoe',
            'work-boat' => 'Work boat/outboard engine',
            'pleasure-boat' => 'Pleasure Boat',
            '5t-10t' => '5t-10t',
            '11t-25t' => '11t-25t',
            '26t-40t' => '26t-40t',
            '41t-60t' => '41t-60t',
            '61t-120t' => '61t-120t',
            '121t-200t' => '121t-200t',
            '201t-400t' => '201t-400t',
            '401t-1000t' => '401t-1000t',
            'above 1000t' => 'Above 1000t',
            'aerofloat-heli' => 'Aeroflot and Helicopters'
        ];
    }
}

if (!function_exists('annual_payment_operational_certificate_river_craft')) {
    function annual_payment_operational_certificate_river_craft()
    {
        return [
            'motorized-canoe' => 'Motorized Dinghy/canoe',
            'work-boat' => 'Work boat/outboard engine',
            'pleasure-boat' => 'Pleasure Boat',
            '5t-40t' => '5t-40t',
            '41t-80t' => '41t-80t',
            '81t-120t' => '81t-120t',
            '121t-200t' => '121t-200t',
            '201t-400t' => '201t-400t',
            '120t-200t' => '120t-200t',
            '401t-1000t' => '401t-1000t',
            'above 1000t' => 'Above 1000t',
        ];
    }
}

if (!function_exists('registration_payment_river_craft')) {
    function registration_payment_river_craft()
    {
        return [
            'dredge' => 'DREDGE/HOUSEBOATS/TUG BOATS – LESS - 500T - MORE',
            'barge' => 'BARGES AND ANY OTHER CRAFTS-- LESS - 500T - MORE ',
        ];
    }
}


if (!function_exists('compute_service_fee')) {
    function compute_service_fee(array $params)
    {
        $fees = [
            'right-of-way-main-service' => [
                'application-form' => [
                    'pleasure' => 10000,
                    'domestic' => 20000,
                    'community' => 15000,
                    'commercial' => 25000,
                ],
                'processing-fee' => [
                    'pleasure' => 10000,
                    'domestic' => 30000,
                    'community' => 20000,
                    'commercial' => 150000,
                ],
                'inspection-fee' => [
                    'pleasure' => 30000,
                    'domestic' => 15000,
                    'community' => 30000,
                    'commercial' => 150000,
                ],
                'monitoring-fee' => [
                    'pleasure' => 75000,
                    'domestic' => 75000,
                    'community' => 75000,
                    'commercial' => 375000,
                ],
            ],
            'right-of-way-power-plants' => [
                'application-form' => 300000,
                'processing-fee' => 5000000,
                'inspection-fee' => 5000000,
                'monitoring-fee' => 25000000,
            ],
            'right-of-way-advertising' => [
                'application-form' => 25000,
                'processing-fee' => 150000,
                'inspection-fee' => 150000,
                'monitoring-fee' => 75000,
            ],
            'right-of-way-pipeline' => [
                'application-form' => 50000,
                'processing-fee' => 150000,
                'inspection-fee' => 150000,
                'monitoring-fee' => 750000,
                'occupational-fee' => 5000000,
            ],
            'dredging-access-charge' => [
                'application-form' => [
                    'mechanical' => 25000,
                    'manual' => 5000,
                ],
                'processing-fee' => [
                    'mechanical' => 150000,
                    'manual' => 7500,
                ],
                'inspection-fee' => [
                    'mechanical' => 150000,
                    'manual' => 7500,
                ],
                'monitoring-fee' => [
                    'mechanical' => [
                        '3 months' => 150000,
                        '6 months' => 400000,
                        'other' => 450000,
                    ],
                    'manual' => 7500,
                ],
                'equipment-access-fee' => [
                    'mechanical' => [
                        'hopper-dredge' => 6600,
                        'above-26' => 5000,
                        '24-26' => 4000,
                        '16-22' => 3333,
                        '10-14' => 1666,
                        'transporter' => 3333,
                        'dinghy-canoe' => 333
                    ],
                    'manual' => [
                        'hopper-dredge' => 500,
                        'above-26' => 300,
                        '24-26' => 200,
                        '16-22' => 150,
                        '10-14' => 0,
                        'transporter' => 0,
                        'dinghy-canoe' => 0
                    ],
                ],
            ],
            'dredging-reclamation' => [
                'application-form' => [
                    'mechanical' => 25000,
                    'manual' => 5000,
                ],
                'processing-fee' => [
                    'mechanical' => 150000,
                    'manual' => 7500,
                ],
                'inspection-fee' => [
                    'mechanical' => 150000,
                    'manual' => 7500,
                ],
                'post-survey-fee' => 500000,
                'monitoring-fee' => [
                    'mechanical' => [
                        '50000' => 150000,
                        '100000' => 400000,
                        'other' => 450000,
                    ],
                    'manual' => 7500,
                ],
                'quantity-dredged-fee' => [
                    'mechanical' => 300,
                    'manual' => 100,
                ],
                'land-area-for-spoil-disposal' => [
                    'mechanical' => 5000,
                    'manual' => 10,
                ],
            ],
            'waterway-operators-training' => [
                'examination-fees' => 15000,
            ],
            'registration-of-crafts' => [
                'examination-fees' => 15000,
                'payment-for-registration-vessel' => [
                    'mechanical' => [
                        'dredge' => 375000,
                        'barge' => 150000,
                    ],
                    'manual' => [
                        'dredge' => 750000,
                        'barge' => 30000,
                    ],
                ]
            ],
            'payment-for-operational-certificate' => [
                'payment-for-permit' => [
                    'motorized-canoe' => 1500,
                    'work-boat' => 7500,
                    'pleasure-boat' => 15000,
                    '5t-10t' => 22500,
                    '11t-25t' => 37500,
                    '26t-40t' => 60000,
                    '41t-60t' => 90000,
                    '61t-120t' => 120000,
                    '121t-200t' => 225000,
                    '201t-400t' => 300000,
                    '401t-1000t' => 450000,
                    'above 1000t' => 750000,
                    'aerofloat-heli' => 2500000
                ],
                'payment-for-operational-certificate' => [
                    'motorized-canoe' => 1500,
                    '5t-40t' => 30000,
                    '41t-80t' => 60000,
                    '81t-120t' => 120000,
                    '121t-200t' => 150000,
                    '201t-400t' => 225000,
                    '120t-200t' => 225000,
                    '401t-1000t' => 375000,
                    'above 1000t' => 750000,
                ],
            ],
        ];


        $client_class = $params['client_class'] ?? 'pleasure';
        $service = $params['service'] ?? 'right-of-way-main-service';
        $process = $params['process'] ?? 'application-form';
        $dredging_type = $params['dredging_type'] ?? 'mechanical';
        $dredging_period = $params['dredging_period'] ?? '3 months';
        $square_area = $params['square_area'] ?? '50000';
        $equipment = $params['equipment'] ?? 'hopper-dredge';
        $annual_permit_river_craft = $params['annual_permit_river_craft'] ?? 'motorized-canoe';
        $annual_operational_certificate_river_craft = $params['annual_operational_certificate_river_craft'] ?? 'motorized-canoe';
        $registration_permit_river_craft = $params['registration_permit_river_craft'] ?? 'dredge';

        return
            $fees[$service][$process][$dredging_type][$registration_permit_river_craft] ??
            $fees[$service][$process][$dredging_type][$annual_permit_river_craft] ??
            $fees[$service][$process][$dredging_type][$annual_operational_certificate_river_craft] ??
            $fees[$service][$process][$dredging_type][$square_area] ??
            $fees[$service][$process][$dredging_type][$equipment] ??
            $fees[$service][$process][$dredging_type][$dredging_period] ??
            $fees[$service][$process][$dredging_type] ??
            $fees[$service][$process][$client_class] ??
            $fees[$service][$process] ??
            0;
    }
}
