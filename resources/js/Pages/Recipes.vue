<template>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center my-6">Рецепты</h1>

        <!-- Фильтр -->
        <div class="mb-6 flex justify-center">
            <input
                v-model="searchQuery"
                type="text"
                placeholder="Поиск по рецепту..."
                class="w-1/2 p-2 border border-gray-300 rounded-lg"
            />
        </div>

        <!-- Если рецептов нет, показываем сообщение -->

        <!-- Карточки с рецептами -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div
                v-for="recipe in filteredRecipes"
                :key="recipe.id"
                class="bg-white border rounded-lg shadow-lg p-4"
            >
                <img :src="recipe.image || 'https://via.placeholder.com/300'" alt="Recipe Image"
                     class="w-full h-48 object-cover rounded-lg mb-4">
                <h2 class="text-2xl font-semibold mb-2">{{ recipe.name }}</h2>
                <p class="text-gray-700 mb-4">{{ recipe.description }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-sm">{{ recipe.category }}</span>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                        Подробнее
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref, onMounted, computed} from 'vue';
import axios from 'axios';

// Получаем рецепты через API
const recipes = ref([]);

// Переменная для фильтрации
const searchQuery = ref('');

// Получаем рецепты через API
const fetchRecipes = async () => {
    try {
        const response = await axios.get('/api/recipes');
        recipes.value = response.data;
    } catch (error) {
        console.error('Ошибка при получении рецептов:', error);
    }
};

// Фильтрация рецептов
const filteredRecipes = computed(() => {
    return recipes.value.filter(recipe => {
        return recipe.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            recipe.description.toLowerCase().includes(searchQuery.value.toLowerCase());
    });
});

// Загружаем рецепты при монтировании компонента
onMounted(() => {
    fetchRecipes();
});
</script>

<style scoped>
/* Можно добавить дополнительное кастомное оформление */
</style>
