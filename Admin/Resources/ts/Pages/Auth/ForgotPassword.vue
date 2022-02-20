<script lang="ts" setup>
import BreezeButton from '@admin/Components/AppButton.vue'
import BreezeGuestLayout from '@admin/Layouts/Guest.vue'
import BreezeInput from '@admin/Components/AppInput.vue'
import BreezeLabel from '@admin/Components/AppLabel.vue'
import BreezeValidationErrors from '@admin/Components/ValidationErrors.vue'
import { Head, useForm } from '@inertiajs/inertia-vue3'

defineProps({
    status: String,
})

const form = useForm({
    email: '',
})

const submit = () => {
    form.post(route('password.email'))
}
</script>

<script lang="ts">
export default {
    layout: BreezeGuestLayout,
}
</script>

<template>
    <Head title="Forgot Password" />

    <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset
        link that will allow you to choose a new one.
    </div>

    <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
        {{ status }}
    </div>

    <BreezeValidationErrors class="mb-4" />

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="email" value="Email" />
            <BreezeInput
                id="email"
                v-model="form.email"
                type="email"
                class="mt-1 block w-full"
                required
                autofocus
                autocomplete="username"
            />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Email Password Reset Link
            </BreezeButton>
        </div>
    </form>
</template>
