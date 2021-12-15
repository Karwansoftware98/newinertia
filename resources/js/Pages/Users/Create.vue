<template>
        <Head title="Create User" />

        <h1 class="text-3xl"> Create New User</h1>

        <form @submit.prevent="submit"  class="max-w-md mx-auto mt-8">
            <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray700">
            Name
            </label>

            <input 
            type="text" 
            class="border border-gray-400 p-2 w-full rounded-xl"
            name="name"
            id="name"
            v-model="form.name"
            >
            <span v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></span>
            </div>

            <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray700">
            Email
            </label>

            <input type="email" 
            class="border border-gray-400 p-2 w-full rounded-xl"
            name="email"
            id="email"
            v-model="form.email">
            <select name="" id="">
                <option value="">

                </option>
            </select>

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
                <button type="submit" class="bg-blue-400 text-white rounded-xl py-2 px-4 hover:bg-blue-500" :disabled="form.processing" :class="form.processing? 'cursor-not-allowed' : '' "> Submit</button>
            </div>
        </form>

</template>

<script setup>
//using inertia form helper function to submit a request
import { useForm } from "@inertiajs/inertia-vue3";
 
 defineProps({
     errors: Object,
     teams:Array
 });

let form = useForm({
    name:'',
    email:'',
    password:'',
});


let submit = () =>{
    form.post('/users',{})
}
// using vue to submit form request
// import { Inertia } from "@inertiajs/inertia";
// import { reactive, ref } from "vue";
 
//  defineProps({
//      errors: Object,
//  });

// let form = reactive({
//     name:'',
//     email:'',
//     password:'',
// });

// let processing = ref(false);

// let submit = () =>{
//     Inertia.post('/users',form,{
//         onStart:  ()=> { processing.value = true },
//         onFinish: ()=> { processing.value = false }
//     })
// }
</script>