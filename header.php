<?php
// Default title if none is provided
$pageTitle = $pageTitle ?? "Dog Age Calculator | Convert Dog Years to Human Years";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? 'Accurately calculate your dog\'s age in human years based on breed and size. Free online dog age calculator.'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords ?? 'dog age calculator, dog years to human years, pet age conversion, canine age'); ?>">
    <link rel="icon" type="image/png" href="/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d1117 !important; /* GitHub dark mode canvas background */
            color: #c9d1d9; /* GitHub dark mode primary text color */
        }
        .bg-gray-800 {
            background-color: #161b22; /* GitHub dark mode primary background */
        }
        .bg-gray-700 {
            background-color: #161b22; /* GitHub dark mode primary background */
        }
        .border-gray-600 {
            border-color: #30363d; /* GitHub dark mode primary border color */
        }
        .text-gray-300 {
            color: #c9d1d9; /* GitHub dark mode primary text color */
        }
        .text-gray-400 {
            color: #8b949e; /* GitHub dark mode secondary text color */
        }
        .bg-blue-600 {
            background-color: #238636; /* GitHub dark mode primary button background */
        }
        .hover\:bg-blue-700:hover {
            background-color: #2ea043; /* GitHub dark mode button hover background */
        }
    </style>
    
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2YH0LJ63YJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2YH0LJ63YJ');
</script>
    
    <?php include 'schema.php'; ?>
</head>
<body class="bg-gray-900 text-gray-100">
<header class="bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-center items-center">
        <a href="/" class="flex items-center">
            <svg class="h-8 w-8 text-white mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="currentColor" transform="rotate(-25)">
                <path d="M39.041,36.843c2.054,3.234,3.022,4.951,3.022,6.742c0,3.537-2.627,5.252-6.166,5.252
                    c-1.56,0-2.567-0.002-5.112-1.326c0,0-1.649-1.509-5.508-1.354c-3.895-0.154-5.545,1.373-5.545,1.373
                    c-2.545,1.323-3.516,1.309-5.074,1.309c-3.539,0-6.168-1.713-6.168-5.252c0-1.791,0.971-3.506,3.024-6.742
                    c0,0,3.881-6.445,7.244-9.477c2.43-2.188,5.973-2.18,5.973-2.18h1.093v-0.001c0,0,3.698-0.009,5.976,2.181
                    C35.059,30.51,39.041,36.844,39.041,36.843z M16.631,20.878c3.7,0,6.699-4.674,6.699-10.439S20.331,0,16.631,0
                    S9.932,4.674,9.932,10.439S12.931,20.878,16.631,20.878z M10.211,30.988c2.727-1.259,3.349-5.723,1.388-9.971
                    s-5.761-6.672-8.488-5.414s-3.348,5.723-1.388,9.971C3.684,29.822,7.484,32.245,10.211,30.988z M32.206,20.878
                    c3.7,0,6.7-4.674,6.7-10.439S35.906,0,32.206,0s-6.699,4.674-6.699,10.439C25.507,16.204,28.506,20.878,32.206,20.878z
                    M45.727,15.602c-2.728-1.259-6.527,1.165-8.488,5.414s-1.339,8.713,1.389,9.972c2.728,1.258,6.527-1.166,8.488-5.414
                    S48.455,16.861,45.727,15.602z"/>
            </svg>
            <span class="text-2xl font-bold text-blue-400">Dog Age Calculator</span>
        </a>
    </div>
</header>
    <main>