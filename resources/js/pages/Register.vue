<script setup lang="ts">
    import { Form } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3'
    import { ref } from 'vue';

    const inputValue = ref({
        email: '',
        name: '',
        password: ''
    });

</script>

<template>
        <div class="flex flex-1 flex-col items-center mt-10 sm:mx-auto sm:w-full sm:max-w-sm min-h-full px-6 py-12 lg:px-8">
            <h1 class="text-5xl">Sign up</h1>
            <Form method="post" action="/api/register" id="login-form" class="flex flex-1 flex-col space-y-6 p-4">
                    <input v-model="inputValue.email" placeholder="E-Mail" type="text" name="email" required autocomplete="on" class="rounded-[3px] text px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <input v-model="inputValue.name" placeholder="Username" type="text" name="name" required autocomplete="on" class="rounded-[3px] text px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <input v-model="inputValue.password" placeholder="Password" type="password" name="password" required autocomplete="off" class="rounded-[3px] px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <button type="submit" class="cursor-pointer rounded-[3px] px-6 py-5 text-2xl text-black bg-[#a8d06f]"><span>Continue </span><i class="pi pi-sign-in"></i></button>
            </Form>
            <p>Already have an account? <Link href="/login" view-transition class="hover:text-[#d7e5d2]">Login</Link></p>
        </div>
</template>
