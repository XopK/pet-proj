<template>
  <header class="bg-blue-600 text-white shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <!-- Логотип -->
      <div class="text-2xl font-bold animate__animated animate__fadeInDown">
        <a href="{{ route ('index') }}">DelishRecipes</a>
      </div>

      <!-- Меню -->
      <nav>
        <ul class="hidden lg:flex space-x-8 text-base">
          <li class="hover:text-gray-300 animate__animated animate__fadeInDown">
            <a href="#">Главная</a>
          </li>
          <li class="hover:text-gray-300 animate__animated animate__fadeInDown">
            <a href="#">Рецепты</a>
          </li>
          <li class="hover:text-gray-300 animate__animated animate__fadeInDown">
            <a href="#">Избранное</a>
          </li>
          <li class="hover:text-gray-300 animate__animated animate__fadeInDown">
            <a href="#">Добавить рецепт</a>
          </li>
        </ul>
      </nav>

      <!-- Кнопка -->
      <button
          class="bg-blue-800 hover:bg-blue-300 text-white hover:text-blue-950 py-2 px-4 rounded-lg shadow-md hidden lg:block animate__animated animate__fadeInDown"
      >
        Авторизация
      </button>

      <!-- Бургер меню -->
      <button
          class="text-white text-2xl lg:hidden focus:outline-none animate__animated animate__slideInRight"
          @click="toggleMenu"
      >
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Мобильное меню -->
    <div
        v-if="menuOpen"
        class="lg:hidden bg-blue-700 text-white shadow-md py-4 px-6"
    >
      <ul class="space-y-4 text-lg">
        <li><a href="#about" class="hover:text-gray-300">Главная</a></li>
        <li><a href="#services" class="hover:text-gray-300">Рецепты</a></li>
        <li><a href="#contact" class="hover:text-gray-300">Избранное</a></li>
        <li><a href="#contact" class="hover:text-gray-300">Добавить рецепт</a></li>
        <li><a href="#contact" class="hover:text-gray-300">Авторизация</a></li>
      </ul>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      menuOpen: false,
    };
  },
  methods: {
    toggleMenu() {
      this.menuOpen = !this.menuOpen;
    },
  },
};
</script>

<style scoped>

</style>
