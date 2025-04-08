<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хакасия - Земля пяти стихий</title>
    <!-- Обновленные CDN ссылки -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com/3.3.5"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap');
        
        :root {
            --khakassia-sand: #D2B68C; /* KHAKASSIA IVORY SAND */
            --khakassia-black: #340C04; /* KHAKASSIA WARM BLACK */
            --khakassia-red: #F04C24; /* KHAKASSIA FIRE RED */
            --khakassia-blue: #3C86C8; /* KHAKASSIA AIR BLUE */
            --khakassia-aqua: #24BEB4; /* KHAKASSIA AQUA WAVE */
            --khakassia-green: #8CC83C; /* KHAKASSIA NATURE GREEN */
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #F5F5F5;
        }
        
        .brand-font {
            font-family: 'Roboto Slab', serif;
        }
    </style>
</head>
<body>
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-2">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[var(--khakassia-black)]">
                    <div class="text-white text-xl font-bold brand-font">Х</div>
                </div>
                <span class="text-xl font-bold brand-font text-[var(--khakassia-black)]">ХАКАСИЯ</span>
                <span class="text-sm text-[var(--khakassia-sand)] brand-font">Земля пяти стихий</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="tours.php" class="text-gray-700 hover:text-[var(--khakassia-red)] font-medium">Экскурсии</a>
                <a href="qualification.php" class="text-gray-700 hover:text-[var(--khakassia-blue)] font-medium">Обучение</a>
                <a href="cooperation.php" class="text-gray-700 hover:text-[var(--khakassia-green)] font-medium">Сотрудничество</a>
            </nav>
            <div class="md:hidden relative">
                <button class="mobile-menu-button text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="mobile-menu hidden absolute top-full left-0 right-0 bg-white shadow-lg z-50">
                    <a href="tours.php" class="block px-4 py-3 hover:bg-gray-100 border-b">Экскурсии</a>
                    <a href="qualification.php" class="block px-4 py-3 hover:bg-gray-100 border-b">Обучение</a>
                    <a href="cooperation.php" class="block px-4 py-3 hover:bg-gray-100">Сотрудничество</a>
                </div>
            </div>
            <script>
                document.querySelector('.mobile-menu-button').addEventListener('click', function() {
                    document.querySelector('.mobile-menu').classList.toggle('hidden');
                });
            </script>
        </div>
    </header>
</body>
</html>