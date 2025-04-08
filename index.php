<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative bg-[url('https://images.pexels.com/photos/12345678/хакасия-озеро.jpg')] bg-cover bg-center bg-no-repeat py-40 text-white before:absolute before:inset-0 before:bg-black/50 before:content-['']">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Откройте для себя Хакасию</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Уникальные экскурсии по самым красивым местам республики с профессиональными гидами</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tours.php" class="bg-[#ffcc00] hover:bg-[#ffd633] text-[#0d2b4e] font-bold py-3 px-8 rounded-lg text-lg transition duration-300 inline-block">
                    Выбрать экскурсию
                </a>
                <a href="#contact" class="bg-transparent hover:bg-white/10 text-white font-bold py-3 px-8 rounded-lg text-lg border-2 border-white transition duration-300 inline-block">
                    Оставить заявку
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Почему выбирают нас</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-[#0d2b4e] text-[#ffcc00] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marked-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Уникальные маршруты</h3>
                    <p class="text-gray-600">Только у нас вы увидите самые красивые и малоизвестные места Хакасии</p>
                </div>
                <div class="text-center p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-[#0d2b4e] text-[#ffcc00] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Профессиональные гиды</h3>
                    <p class="text-gray-600">Наши гиды - настоящие эксперты по истории и природе Хакасии</p>
                </div>
                <div class="text-center p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-[#0d2b4e] text-[#ffcc00] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-thumbs-up text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Гарантия качества</h3>
                    <p class="text-gray-600">Более 10 лет мы организуем экскурсии высочайшего уровня</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Tours -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Популярные экскурсии</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://images.pexels.com/photos/12345678/хакасия-озеро.jpg" alt="Экскурсия по озеру Шира" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Экскурсия по озеру Шира</h3>
                        <p class="text-gray-600 mb-4">Насладитесь красотой озера и окружающих пейзажей</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e]">10 000 руб.</span>
                            <a href="tours.php" class="text-[#ffcc00] hover:text-[#0d2b4e] font-medium">Подробнее →</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://images.pexels.com/photos/87654321/хакасия-горы.jpg" alt="Горный тур" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Горный тур</h3>
                        <p class="text-gray-600 mb-4">Покорите вершины и насладитесь панорамными видами</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e]">15 000 руб.</span>
                            <a href="tours.php" class="text-[#ffcc00] hover:text-[#0d2b4e] font-medium">Подробнее →</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://images.pexels.com/photos/13579246/хакасия-история.jpg" alt="Этнографический тур" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Этнографический тур</h3>
                        <p class="text-gray-600 mb-4">Погружение в культуру и традиции хакасского народа</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e]">12 000 руб.</span>
                            <a href="tours.php" class="text-[#ffcc00] hover:text-[#0d2b4e] font-medium">Подробнее →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="tours.php" class="inline-block bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-bold py-3 px-8 rounded-lg text-lg transition duration-300">
                    Все экскурсии
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-8">Оставить заявку</h2>
            <form action="scripts/contact.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-50 p-8 rounded-xl shadow-md">
                <div class="md:col-span-2">
                    <h3 class="text-xl font-semibold mb-4 text-[#0d2b4e]">Ваши контактные данные</h3>
                </div>
                <div>
                    <label for="name" class="block mb-2 font-medium">Ваше имя *</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00] focus:border-transparent" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 font-medium">Телефон *</label>
                    <input type="tel" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00] focus:border-transparent" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 font-medium">Email *</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00] focus:border-transparent" required>
                </div>
                <div>
                    <label for="tour" class="block mb-2 font-medium">Интересующая экскурсия</label>
                    <select id="tour" name="tour" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00] focus:border-transparent">
                        <option value="">Не выбрана</option>
                        <option value="Озеро Шира">Озеро Шира</option>
                        <option value="Горный тур">Горный тур</option>
                        <option value="Этнографический тур">Этнографический тур</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="message" class="block mb-2 font-medium">Сообщение</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00] focus:border-transparent"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-[#ffcc00] hover:bg-[#ffd633] text-[#0d2b4e] font-bold py-3 px-6 rounded-lg text-lg transition duration-300">
                        Отправить заявку
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>