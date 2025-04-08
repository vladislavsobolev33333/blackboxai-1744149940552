<?php include 'includes/header.php'; ?>

<main>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Повышение квалификации гидов</h1>
            <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto mb-12">
                Получите официальный сертификат гида-экскурсовода по Хакасии и расширьте свои профессиональные возможности
            </p>
            
            <!-- Courses -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Basic Course -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
                    <div class="bg-[#0d2b4e] text-white p-6">
                        <h3 class="text-2xl font-bold mb-2">Базовый курс</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-[#ffcc00]">15 000 руб.</span>
                            <span class="bg-[#ffcc00] text-[#0d2b4e] px-3 py-1 rounded-full text-sm font-bold">72 часа</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-3 text-[#0d2b4e]">Программа курса:</h4>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Основы экскурсоведения (16 часов)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>История и культура Хакасии (24 часа)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Техника ведения экскурсий (20 часов)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Основы безопасности (12 часов)</span>
                            </li>
                        </ul>
                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm text-gray-500 mb-3">Ближайшие даты:</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">15.09.2024</span>
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">10.10.2024</span>
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">05.11.2024</span>
                            </div>
                            <button class="w-full bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-bold py-3 px-4 rounded-lg transition">
                                Записаться на курс
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Advanced Course -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
                    <div class="bg-[#0d2b4e] text-white p-6">
                        <h3 class="text-2xl font-bold mb-2">Продвинутый курс</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-[#ffcc00]">25 000 руб.</span>
                            <span class="bg-[#ffcc00] text-[#0d2b4e] px-3 py-1 rounded-full text-sm font-bold">120 часов</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-3 text-[#0d2b4e]">Программа курса:</h4>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Углублённое изучение культуры (32 часа)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Языковая подготовка (24 часа)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Первая помощь в туризме (16 часов)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Маркетинг экскурсионных услуг (24 часа)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#ffcc00] mt-1 mr-2"></i>
                                <span>Практика с опытными гидами (24 часа)</span>
                            </li>
                        </ul>
                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm text-gray-500 mb-3">Ближайшие даты:</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">20.09.2024</span>
                                <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">15.11.2024</span>
                            </div>
                            <button class="w-full bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-bold py-3 px-4 rounded-lg transition">
                                Записаться на курс
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Application Form -->
            <div class="bg-gray-50 rounded-xl p-8 max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Оставить заявку</h2>
                <form action="scripts/qualification.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Ваше имя *</label>
                        <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00]" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Телефон *</label>
                        <input type="tel" name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00]" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email *</label>
                        <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00]" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Выберите курс *</label>
                        <select name="course" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00]" required>
                            <option value="">-- Выберите курс --</option>
                            <option value="basic">Базовый курс (15 000 руб.)</option>
                            <option value="advanced">Продвинутый курс (25 000 руб.)</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium mb-2">Комментарий</label>
                        <textarea name="message" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#ffcc00]"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-[#ffcc00] hover:bg-[#ffd633] text-[#0d2b4e] font-bold py-3 px-6 rounded-lg text-lg transition">
                            Отправить заявку
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>