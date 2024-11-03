<!-- resources/js/Pages/Kanban/Index.vue -->
<template>
    <div class="p-6 bg-gray-100 min-h-screen">
        <h1 class="text-2xl font-bold mb-4">Tablero de Kanban</h1>
        <div class="grid grid-cols-3 gap-4">
            <div v-for="(column, index) in columns" :key="index" class="bg-white p-4 rounded shadow">
                <h2 class="font-bold">{{ column.title }}</h2>
                <ul>
                    <li v-for="(task, i) in column.tasks" :key="i" class="p-2 my-2 bg-gray-200 rounded">
                        {{ task }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            columns: [
                { title: 'Por hacer', tasks: ['Tarea 1', 'Tarea 2'] },
                { title: 'En progreso', tasks: ['Tarea 3'] },
                { title: 'Completado', tasks: ['Tarea 4'] },
            ],
        };
    },
};
</script>

<style scoped>
/* Estilos adicionales si los necesitas */
</style>
