<?php include 'includes/header.php'; ?>

<main>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Экскурсии по Хакасии</h1>
            
            <!-- Filters -->
            <div class="bg-gray-50 p-6 rounded-xl mb-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Тип экскурсии</label>
                        <select class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-[#ffcc00]">
                            <option>Все типы</option>
                            <option>Пешие</option>
                            <option>Автомобильные</option>
                            <option>Водные</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Цена</label>
                        <select class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-[#ffcc00]">
                            <option>Любая</option>
                            <option>До 5 000 руб.</option>
                            <option>5 000 - 10 000 руб.</option>
                            <option>От 10 000 руб.</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Длительность</label>
                        <select class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-[#ffcc00]">
                            <option>Любая</option>
                            <option>1 день</option>
                            <option>2 дня</option>
                            <option>3+ дня</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Сезон</label>
                        <select class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-[#ffcc00]">
                            <option>Любой</option>
                            <option>Лето</option>
                            <option>Зима</option>
                            <option>Весна/Осень</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-4 relative">
                    <input type="text" placeholder="Поиск экскурсий..." 
                           class="w-full p-3 pl-10 border rounded-lg focus:ring-2 focus:ring-[#ffcc00]">
                    <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="tour-list">
                <!-- Tour Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/12345678/хакасия-озеро.jpg" alt="Озеро Шира" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-[#ffcc00] text-[#0d2b4e] px-2 py-1 rounded text-sm font-bold">Хит</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Экскурсия по озеру Шира</h3>
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-clock mr-1"></i>
                            <span>1 день</span>
                            <i class="fas fa-users ml-3 mr-1"></i>
                            <span>До 10 человек</span>
                        </div>
                        <p class="text-gray-600 mb-4">Насладитесь красотой одного из самых живописных озер Хакасии с опытным гидом.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e] text-lg">10 000 руб.</span>
                            <button class="bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-medium py-2 px-4 rounded-lg transition">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <img src="https://images.pexels.com/photos/87654321/хакасия-горы.jpg" alt="Горный тур" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Горный тур "Саянские вершины"</h3>
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-clock mr-1"></i>
                            <span>2 дня</span>
                            <i class="fas fa-users ml-3 mr-1"></i>
                            <span>До 6 человек</span>
                        </div>
                        <p class="text-gray-600 mb-4">Покорите вершины Саян и насладитесь панорамными видами на бескрайние просторы Хакасии.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e] text-lg">15 000 руб.</span>
                            <button class="bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-medium py-2 px-4 rounded-lg transition">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tour Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/13579246/хакасия-история.jpg" alt="Этнографический тур" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-sm font-bold">Акция</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Этнографический тур</h3>
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-clock mr-1"></i>
                            <span>1 день</span>
                            <i class="fas fa-users ml-3 mr-1"></i>
                            <span>До 15 человек</span>
                        </div>
                        <p class="text-gray-600 mb-4">Погрузитесь в культуру и традиции хакасского народа, посетите настоящие юрты и попробуйте национальную кухню.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-[#0d2b4e] text-lg">12 000 руб.</span>
                            <button class="bg-[#0d2b4e] hover:bg-[#1a3a6b] text-white font-medium py-2 px-4 rounded-lg transition">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <a href="#" class="px-3 py-1 rounded-lg bg-[#0d2b4e] text-white">1</a>
                    <a href="#" class="px-3 py-1 rounded-lg hover:bg-gray-200">2</a>
                    <a href="#" class="px-3 py-1 rounded-lg hover:bg-gray-200">3</a>
                    <a href="#" class="px-3 py-1 rounded-lg hover:bg-gray-200">Следующая →</a>
                </nav>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
