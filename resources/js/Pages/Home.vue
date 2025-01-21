<script setup>
import {ref, onMounted, computed} from "vue";
import {usePage} from '@inertiajs/vue3';

import Header from "@/Components/Header.vue";
import Loading from "@/Components/Loading.vue";
import Hero from "@/Components/Home/Hero.vue";
import Recipes from "@/Components/Home/Recipes.vue";
import Categories from "@/Components/Home/Categories.vue";
import Comments from "@/Components/Home/Comments.vue";
import Footer from "@/Components/Footer.vue";

// Состояние загрузки
const isLoading = ref(true);

// Получение данных через Inertia
const props = usePage().props;
const recipes = computed(() => props.recipes || []);
const categories = computed(() => props.categories || []);

onMounted(() => {
    isLoading.value = false;
});
</script>

<template>
    <div>
        <!-- Анимация загрузки -->
        <Loading v-if="isLoading"/>

        <!-- Основное содержимое -->
        <div v-else>
            <Header/>
            <Hero/>
            <Recipes :recipes="recipes"/>
            <Categories :categories="categories"/>
            <Comments/>
            <Footer/>
        </div>
    </div>
</template>

<style scoped>
</style>
