<?php
$pageTitle = "Dog Age Calculator | Convert Dog Years to Human Years";
$pageDescription = "Accurately calculate your dog's age in human years based on breed and size. Free online dog age calculator.";
$pageKeywords = "dog age calculator, dog years to human years, pet age conversion, canine age";

include 'functions.php';
include 'dog_breeds.php';

$dogAge = '';
$ageUnit = 'years';
$breed = '';
$size = '';
$humanAge = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dogAge = $_POST['dogAge'] ?? '';
    $ageUnit = $_POST['ageUnit'] ?? 'years';
    $breed = $_POST['breed'] ?? '';
    $size = $_POST['size'] ?? '';

    if ($dogAge !== '' && $breed !== '' && $size !== '') {
        $ageInYears = $ageUnit === 'months' ? $dogAge / 12 : $dogAge;
        $humanAge = calculateDogAge($ageInYears, $breed, $size);
    }
}

include 'header.php';
?>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-center text-blue-400 mb-6">Calculate Your Dog's Age</h1>
            <p class="text-gray-300 text-center mb-6">Convert dog years to human years accurately</p>
            <form method="POST" class="space-y-4">
                <div>
                    <label for="dogAge" class="block text-sm font-medium text-gray-300">Dog's Age</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="number" name="dogAge" id="dogAge" step="0.1" required
                               class="flex-1 min-w-0 block w-full px-3 py-2 rounded-l-md bg-gray-700 border border-gray-600 text-white focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="Enter age" value="<?php echo htmlspecialchars($dogAge); ?>">
                        <select name="ageUnit" class="inline-flex items-center px-3 py-2 rounded-r-md border border-l-0 border-gray-600 bg-gray-700 text-gray-300 text-sm">
                            <option value="years" <?php echo $ageUnit === 'years' ? 'selected' : ''; ?>>Years</option>
                            <option value="months" <?php echo $ageUnit === 'months' ? 'selected' : ''; ?>>Months</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="breed" class="block text-sm font-medium text-gray-300">Dog Breed</label>
                    <select name="breed" id="breed" required
                            class="mt-1 block w-full py-2 px-3 border border-gray-600 bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-white sm:text-sm">
                        <option value="">Select breed</option>
                        <?php foreach ($dogBreeds as $breedOption): ?>
                            <option value="<?php echo htmlspecialchars($breedOption); ?>" <?php echo $breed === $breedOption ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($breedOption); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="size" class="block text-sm font-medium text-gray-300">Dog Size</label>
                    <select name="size" id="size" required
                            class="mt-1 block w-full py-2 px-3 border border-gray-600 bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-white sm:text-sm">
                        <option value="">Select size</option>
                        <option value="small" <?php echo $size === 'small' ? 'selected' : ''; ?>>Small (0-20 lbs)</option>
                        <option value="medium" <?php echo $size === 'medium' ? 'selected' : ''; ?>>Medium (21-50 lbs)</option>
                        <option value="large" <?php echo $size === 'large' ? 'selected' : ''; ?>>Large (51-90 lbs)</option>
                        <option value="giant" <?php echo $size === 'giant' ? 'selected' : ''; ?>>Giant (91+ lbs)</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Calculate
                    </button>
                </div>
            </form>
            <?php if ($humanAge !== null): ?>
                <div class="mt-6 p-4 bg-gray-700 rounded-md">
                    <p class="text-lg font-semibold text-center text-blue-400">
                        Your dog is approximately <?php echo number_format($humanAge, 1); ?> years old in human years.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="mt-12 max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-blue-400 mb-8">Dog Age Calculator</h2>

        <section class="mb-8">
            <h3 class="text-2xl font-semibold mb-4 text-center text-blue-400">Dog age to human age calculator</h3>
            <p class="text-gray-300 leading-relaxed">
                Our Dog Age Calculator is a sophisticated tool designed to convert your dog's age into human years. Unlike the outdated "1 dog year = 7 human years" rule, our calculator takes into account your dog's breed and size for a more accurate estimation.
            </p>
        </section>

        <section class="mb-8">
            <h3 class="text-2xl font-semibold mb-4 text-center text-blue-400">How to use DogAgeCalculator.Online</h3>
            <h4 class="text-xl font-semibold mb-2 text-gray-300">Steps of How to guide</h4>
            <ol class="list-decimal list-inside space-y-2 text-gray-300 leading-relaxed">
                <li>Enter your dog's age in years or months.</li>
                <li>Select your dog's breed from the dropdown menu.</li>
                <li>Choose your dog's size category (Small, Medium, Large, or Giant).</li>
                <li>Click the "Calculate" button to see your dog's age in human years.</li>
            </ol>
        </section>

        <section class="mb-8">
            <h3 class="text-2xl font-semibold mb-4 text-center text-blue-400">Frequently Asked Questions (FAQs)</h3>
            <div class="space-y-4" x-data="{ activeAccordion: null }">
                <div class="border border-gray-600 rounded-md">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="flex justify-between items-center w-full px-4 py-2 text-left">
                        <span class="font-semibold text-gray-300">Why doesn't the "7 years" rule work?</span>
                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeAccordion === 1" class="px-4 py-2 text-gray-400">
                        Dogs age at different rates depending on their size and breed. The "7 years" rule is an oversimplification that doesn't account for these factors.
                    </div>
                </div>
                <div class="border border-gray-600 rounded-md">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="flex justify-between items-center w-full px-4 py-2 text-left">
                        <span class="font-semibold text-gray-300">How accurate is this calculator?</span>
                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeAccordion === 2" class="px-4 py-2 text-gray-400">
                        While more accurate than the "7 years" rule, this calculator provides an estimate. Individual dogs may age differently based on genetics, diet, and lifestyle.
                    </div>
                </div>
                <div class="border border-gray-600 rounded-md">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="flex justify-between items-center w-full px-4 py-2 text-left">
                        <span class="font-semibold text-gray-300">Why does the calculator need my dog's breed and size?</span>
                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeAccordion === 3" class="px-4 py-2 text-gray-400">
                        Different breeds and sizes of dogs age at different rates. Smaller dogs tend to live longer than larger dogs, so the calculation takes this into account.
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-8 border-gray-600">

        <section>
            <p class="text-gray-300 leading-relaxed">
                Understanding your dog's age in human years can help you provide better care throughout their life stages. Remember, regular vet check-ups, proper nutrition, and plenty of exercise are key to ensuring a long, healthy life for your furry friend.
            </p>
        </section>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<?php include 'footer.php'; ?>