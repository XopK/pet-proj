<template>
    <section class="relative bg-cover bg-center h-screen flex items-center text-center"
             style="background-image: url('/images/hero.jpg');">
        <!-- Затемнение фона -->
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div>

        <!-- Контент -->
        <div class="container mx-auto text-white relative z-20 animate__animated animate__fadeInDown px-4 md:px-8">
            <!-- Заголовок -->
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                Найди идеальный рецепт для любого случая!
            </h1>
            <!-- Подзаголовок -->
            <p class="text-lg lg:text-xl mb-8">
                Сотни рецептов на любой вкус: от быстрых ужинов до изысканных блюд.
            </p>
            <!-- Поле поиска -->
            <div class="mb-6 flex justify-center items-center">
                <input
                    type="text"
                    placeholder="Ищите рецепт..."
                    class="w-full md:w-3/4 lg:w-1/2 px-4 py-2 text-black rounded-md focus:outline-none"
                />
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md ml-2">
                    Найти
                </button>
            </div>

            <!-- Кнопки действий -->
            <div class="flex justify-center space-x-4">
                <a href="/Recipes" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-md">
                    Все рецепты
                </a>
                <a href="/add-recipe" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-md">
                    Добавить рецепт
                </a>
            </div>
        </div>
    </section>
</template>

<script>
export default {};
</script>
