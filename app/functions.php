<?php
include __DIR__ . '/env.php';

$site = "One Hour Plumbing";
$sitetitle = "";
$title = !empty($sitetitle) ? $titlename : $site;
$reviewn = 4523;

$phone_number = "0485 815 230";
$admin_email = 'info@plumbfirst.com.au';
$bcc_email = "";
$no_reply_email = 'info@1hourplumbermelbourne.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $filename_without_ext = str_replace('-', ' ', $filename_without_ext);

    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt='" . $filename_without_ext . "' class='" . $classname . "'>";
}


$services = [
    [
        "id" => "tab_drains",
        "title" => "Issues with your drains?",
        "embed_url" => "https://www.youtube.com/embed/I-wmPXd5dyA",
        "sub_services" => [
            [
                "title" => "All major blockages",
                "description" => "Are you struggling with major blockages in your plumbing system? Do you need immediate assistance to fix the issue? Look no further! Our team of expert plumbers in Melbourne is here to help.",
            ],
            [
                "title" => "Same day fix",
                "description" => "When you need a fast and reliable plumbing service in Melbourne, you can count on us for a same-day fix. Our expert plumbers are available 24/7 to provide immediate assistance and ensure that your plumbing emergencies are resolved quickly and efficiently.",
            ],
            [
                "title" => "Effective drain cleaning",
                "description" => "Are you tired of dealing with clogged and slow-draining sinks and showers? Our expert plumbers in Melbourne offer effective drain cleaning services to help you get rid of stubborn clogs and keep your plumbing system running smoothly.",
            ],
        ]
    ],
    [
        "id" => "tab_hotwater",
        "title" => "Issues with your hot water?",
        "embed_url" => "https://www.youtube.com/embed/lPbSxlBIz2Q",
        "sub_services" => [
            [
                "title" => "Fast and Reliable Hot Water Solutions for Your Melbourne Home",
                "description" => "We understand that having hot water is essential for daily life, and when it fails, it can be a significant inconvenience. That's why we offer fast, reliable, and professional hot water solutions to our Melbourne customers.",
            ],
            [
                "title" => "Same day fix",
                "description" => "When you need a fast and reliable plumbing service in Melbourne, you can count on us for a same-day fix. Our expert plumbers are available 24/7 to provide immediate assistance and ensure that your plumbing emergencies are resolved quickly and efficiently.",
            ],
            [
                "title" => "Professional Hot Water System Repairs",
                "description" => "If your hot water system is not working correctly, our team of professionals can help. We offer hot water system repairs for all types of systems, including gas, electric, and solar. Our experts have the skills and experience to diagnose any problem with your hot water system.",
            ],
        ]
    ],
    [
        "id" => "tab_gas",
        "title" => "Issues with your gas?",
        "embed_url" => "https://www.youtube.com/embed/ZZENR5rjLdI",
        "sub_services" => [
            [
                "title" => "Fast and Reliable Gas Fitting Services in Melbourne with PlumbFirst",
                "description" => "If you need fast and reliable gas fitting services for your Melbourne home, trust in the expertise of PlumbFirst. Our team of experienced gas fitters provides same-day service and a high level of professionalism to ensure that your gas needs are taken care of promptly.",
            ],
            [
                "title" => "Same day fix",
                "description" => "When you need a fast and reliable plumbing service in Melbourne, you can count on us for a same-day fix. Our expert plumbers are available 24/7 to provide immediate assistance and ensure that your plumbing emergencies are resolved quickly and efficiently.",
            ],
            [
                "title" => "Experienced Gas Fitting Professionals",
                "description" => "Our team of gas fitting professionals has years of experience in the industry and is equipped to handle any gas fitting job, big or small. We offer a range of gas fitting services, including gas appliance installations, gas leak detection and repairs, gas line installations and repairs, and gas hot water system installations and repairs.",
            ],
        ]
    ],
    [
        "id" => "tab_generalplumbing",
        "title" => "Issues with your plumbing?",
        "embed_url" => "https://www.youtube.com/embed/2Cb_bcdc350",
        "sub_services" => [
            [
                "title" => "Complete Plumbing Services",
                "description" => "For All Your Plumbing Needs Across Melbourne. You can depend on the expertise, professionalism and great value you receive from our plumber for all your needs across Melbourne. Experience First Class Plumbing Services. ",
            ],
            [
                "title" => "Same day fix",
                "description" => "When you need a fast and reliable plumbing service in Melbourne, you can count on us for a same-day fix. Our expert plumbers are available 24/7 to provide immediate assistance and ensure that your plumbing emergencies are resolved quickly and efficiently.",
            ],
            [
                "title" => "Our Workmanship & Dedication",
                "description" => "Has propelled us in becoming a huge successful business with over 150 vehicles on the road daily & over 200 staff. When you choose PlumbFirst for your plumbing, hot water and drain needs across Melbourne, you can be sure of a level of expert, friendly service which is second-to-none.",
            ],
        ]
    ],
    [
        "id" => "tab_otherservices",
        "title" => "We’ll asses your problem within an hour",
        "embed_url" => "https://www.youtube.com/embed/2Cb_bcdc350",
        "sub_services" => [
            [
                "title" => "On-time Guaranteed",
                "description" => "With PlumbFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient plumbers that work around your schedule",
            ],
            [
                "title" => "Same day fix",
                "description" => "When you need a fast and reliable plumbing service in Melbourne, you can count on us for a same-day fix. Our expert plumbers are available 24/7 to provide immediate assistance and ensure that your plumbing emergencies are resolved quickly and efficiently.",
            ],
            [
                "title" => "Faster Services",
                "description" => "Because PlumbFirst operates from MULTIPLE locations right across the Melbourne metropolitan area, you can benefit from a rapid response for your plumbing needs",
            ],
        ]
    ]
];
