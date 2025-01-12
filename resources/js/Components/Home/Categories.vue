<template>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <!-- Заголовок -->
            <h2 class="text-3xl lg:text-4xl font-bold text-center mb-12">Категории рецептов</h2>

            <!-- Сетка категорий -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                <div
                    v-for="category in categories"
                    :key="category.id"
                    class="text-center bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg cursor-pointer"
                >
                    <!-- Иконка Font Awesome -->
                    <i :class="category.icon" class="text-5xl text-gray-600 mb-4"></i>
                    <h3 class="text-lg font-bold">{{ category.name }}</h3>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            categories: [
                { id: 1, name: 'Завтраки', icon: 'fas fa-coffee' },
                { id: 2, name: 'Обеды', icon: 'fas fa-utensils' },
                { id: 3, name: 'Ужины', icon: 'fas fa-wine-glass-alt' },
                { id: 4, name: 'Десерты', icon: 'fas fa-ice-cream' },
                { id: 5, name: 'Напитки', icon: 'fas fa-cocktail' },
                { id: 6, name: 'Вегетарианские', icon: 'fas fa-leaf' },
                { id: 7, name: 'Закуски', icon: 'fas fa-hamburger' },
                { id: 8, name: 'Морепродукты', icon: 'fas fa-fish' },
            ],
        };
    },
};
</script>
