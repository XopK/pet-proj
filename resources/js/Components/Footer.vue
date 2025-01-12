<template>
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <!-- Верхняя часть подвала -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <!-- Логотип и описание -->
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold">DelishRecipes</h3>
                    <p class="text-gray-400 mt-2">
                        Лучшая платформа для поиска и создания вкусных рецептов.
                    </p>
                </div>

                <!-- Ссылки -->
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <a href="/about" class="hover:underline text-gray-300 mb-4 md:mb-0">О нас</a>
                    <a href="/contact" class="hover:underline text-gray-300 mb-4 md:mb-0">Контакты</a>
                    <a href="/privacy" class="hover:underline text-gray-300">Политика конфиденциальности</a>
                </div>
            </div>

            <!-- Разделение -->
            <hr class="border-gray-700 mb-6" />

            <!-- Нижняя часть подвала -->
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Социальные сети -->
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white text-xl">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                <!-- Копирайт -->
                <p class="text-gray-500 mt-6 md:mt-0">
                    &copy; 2025 DelishRecipes. Все права защищены.
                </p>
            </div>
        </div>
    </footer>
</template>

<script>
export default {};
</script>
