<?php
$schema = [
    "@context" => "https://schema.org",
    "@type" => "WebApplication",
    "name" => "Dog Age Calculator",
    "url" => "https://dogagecalculator.online",
    "description" => "Accurately calculate your dog's age in human years based on breed and size.",
    "applicationCategory" => "UtilityApplication",
    "operatingSystem" => "All",
    "offers" => [
        "@type" => "Offer",
        "price" => "0"
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.8",
        "ratingCount" => "1024"
    ]
];

$howToSchema = [
    "@context" => "https://schema.org",
    "@type" => "HowTo",
    "name" => "How to Use Dog Age Calculator",
    "description" => "Learn how to use the Dog Age Calculator to convert your dog's age to human years.",
    "step" => [
        [
            "@type" => "HowToStep",
            "text" => "Enter your dog's age in years or months."
        ],
        [
            "@type" => "HowToStep",
            "text" => "Select your dog's breed from the dropdown menu."
        ],
        [
            "@type" => "HowToStep",
            "text" => "Choose your dog's size category (Small, Medium, Large, or Giant)."
        ],
        [
            "@type" => "HowToStep",
            "text" => "Click the \"Calculate\" button to see your dog's age in human years."
        ]
    ]
];

$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Why doesn't the \"7 years\" rule work?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Dogs age at different rates depending on their size and breed. The \"7 years\" rule is an oversimplification that doesn't account for these factors."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "How accurate is this calculator?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "While more accurate than the \"7 years\" rule, this calculator provides an estimate. Individual dogs may age differently based on genetics, diet, and lifestyle."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Why does the calculator need my dog's breed and size?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Different breeds and sizes of dogs age at different rates. Smaller dogs tend to live longer than larger dogs, so the calculation takes this into account."
            ]
        ]
    ]
];
?>

<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<script type="application/ld+json">
<?php echo json_encode($howToSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>