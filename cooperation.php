<?php include 'includes/header.php'; ?>

<main>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Сотрудничество</h2>
            <p class="text-lg mb-8 text-center">
                Мы открыты для сотрудничества с туристическими агентствами и другими организациями.
            </p>
            <form action="scripts/cooperation.php" method="POST" class="max-w-2xl mx-auto space-y-4">
                <input type="text" name="company_name" placeholder="Название компании" class="w-full p-2 border rounded" required>
                <input type="text" name="contact_person" placeholder="Контактное лицо" class="w-full p-2 border rounded" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required>
                <textarea name="message" rows="4" placeholder="Сообщение" class="w-full p-2 border rounded" required></textarea>
                <button type="submit" class="bg-[#1a202c] text-white px-4 py-2 rounded hover:bg-[#252b3d] w-full">
                    Отправить заявку
                </button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>