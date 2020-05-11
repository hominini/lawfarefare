<template>
<!-- CONTENT -->
<div id="content" data-uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <h1>El contador es igual a: {{counter}}</h1>
        <button @click="increaseCounter">Incrementar</button>
        <button @click="decreaseCounter">Disminuir</button>
    </div>
</div>
<!-- /CONTENT -->
</template>

<script>
export default {
    data() {
        return {
            counter: 0,
        }
    },
    methods: {
        increaseCounter() {
            this.counter++;
        },
        decreaseCounter() {
            this.counter--;
        },
    },
    created() {
        this.counter = 100;
    }
   
}
</script>