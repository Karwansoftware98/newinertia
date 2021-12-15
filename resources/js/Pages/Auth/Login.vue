<template>

        <Head title="Login Page" />
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-lg max-w-xl mx-auto ">
        <h1 class="text-3xl">Login</h1>

         <form @submit.prevent="submit"  class=" mt-8 border border-gray-300 p-8 rounded-lg">
           

            <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray700">
            Email
            </label>

            <input type="email" 
            class="border border-gray-400 p-2 w-full rounded-xl"
            name="email"
            id="email"
            v-model="form.email"
            >
            <span v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></span>

            </div>
             <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray700">
            Password
            </label>

            <input type="password" 
            class="border border-gray-400 p-2 w-full rounded-xl"
            name="password"
            id="password"
            v-model="form.password"
            >
            <span v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></span>

            </div>
            <div class="mb-6 flex justify-end">
                <button type="submit" class="bg-blue-400 text-white rounded-xl py-2 px-4 hover:bg-blue-500" :disabled="form.processing" :class="form.processing? 'cursor-not-allowed' : '' ">Login</button>
            </div>
        </form>
        </section>
    </main>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
export default {
    layout: null
}
</script>

<script setup>
let form = useForm({
    email:'',
    password:'',
});

let submit = () =>{
    form.post('/login');
}
</script>