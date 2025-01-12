<template>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Заголовок -->
            <h2 class="text-3xl lg:text-4xl font-bold text-center mb-12">Отзывы наших пользователей</h2>

            <!-- Список отзывов -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div v-for="review in reviews" :key="review.id" class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img
                            :src="review.avatar || `https://ui-avatars.com/api/?name=${review.name.split(' ').join('+')}`"
                            :alt="review.name"
                            class="w-12 h-12 rounded-full mr-3"
                        />
                        <div>
                            <h4 class="font-bold">{{ review.name }}</h4>
                            <p class="text-sm text-gray-500">{{ review.date }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600">{{ review.text }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            reviews: [
                {
                    id: 1,
                    name: 'John Doe',
                    text: 'Отличный сайт с рецептами!',
                    avatar: '', // У пользователя нет аватара
                    date: '12 января 2025',
                },
                {
                    id: 2,
                    name: 'Jane Smith',
                    text: 'Мне понравился рецепт шоколадного торта.',
                    avatar: 'https://xsgames.co/randomusers/avatar.php?g=male', // У пользователя есть аватар
                    date: '10 января 2025',
                },
                {
                    id: 3,
                    name: 'Mike Johnson',
                    text: 'Простые и вкусные рецепты для всей семьи.',
                    avatar: '', // У пользователя нет аватара
                    date: '5 января 2025',
                },
            ],
        };
    },
};
</script>
