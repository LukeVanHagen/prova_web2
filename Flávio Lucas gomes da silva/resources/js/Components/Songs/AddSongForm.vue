<script setup>
import MyTextInput from '../MyTextInput.vue';
import PrimaryButton from '../PrimaryButton.vue';

const emit = defineEmits(['song-added']);

const form = useForm({
    title: '',
    artist: '',
    album: '',
    genre: '',
});

function submit() {
    form.post(route('songs.store'), {
        onSuccess: () => {
            form.reset();
            emit('song-added');
        },
    });
}
</script>

<template>
    <form @submit.prevent="submit">
        <fieldset class="border shadow-md p-2 rounded-md w-full m-auto">
            <legend class="font-bold">
                Add new Song
            </legend>
            <div>
                <MyTextInput v-model="form.title" label="Title" autofocus />
                <MyTextInput label="Artist" />
                <MyTextInput v-model="form.album" label="Album" />
                <MyTextInput v-model="form.genre" label="Genre" />
                <PrimaryButton class="">Save</PrimaryButton>
            </div>
        </fieldset>
    </form>
</template>