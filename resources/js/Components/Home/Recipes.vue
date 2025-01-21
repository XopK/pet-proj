<template>
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl lg:text-4xl font-bold text-center mb-12">Популярные рецепты</h2>

            <swiper v-if="recipes.length" :slides-per-view="1" :space-between="16" :breakpoints="breakpoints"
                    class="swiper-container">
                <swiper-slide v-for="recipe in recipes" :key="recipe.id"
                              class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img :src="recipe.image" :alt="recipe.name" class="w-full h-80 object-cover"/>
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">{{ recipe.name }}</h3>
                        <p class="text-gray-600 mb-4">{{ recipe.slug }}</p>
                        <a :href="`/recipes/${recipe.id}`"
                           class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Подробнее</a>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>

<script>
import {Swiper, SwiperSlide} from 'swiper/vue';
import 'swiper/swiper-bundle.css';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        recipes: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            breakpoints: {
                640: {slidesPerView: 1, spaceBetween: 16},
                768: {slidesPerView: 2, spaceBetween: 20},
                1024: {slidesPerView: 3, spaceBetween: 24},
            },
        };
    },
    mounted() {

    },
};
</script>

<style>
.swiper-container {
    width: 100%;
    padding: 16px 0;
}
</style>
