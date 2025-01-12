<template>
    <div class="loading-screen fixed inset-0 bg-gray-800 flex items-center justify-center z-50">
        <div class="spinner border-t-4 border-white rounded-full w-16 h-16 animate-spin"></div>
    </div>
</template>

<style scoped>
.loading-screen {
    background-color: rgba(0, 0, 0, 0.8); /* Полупрозрачный фон */
}

.spinner {
    border-width: 4px;
    border-top-color: white;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
    animation: spin 1s linear infinite;
}
</style>
