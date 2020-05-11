<template>
   <!-- CONTENT -->
<div id="content" data-uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <h1>Hola hooks</h1>
        <p>Mi nombre es: {{name}}</p>
    </div>
</div>
<!-- /CONTENT -->
</template>

<script>
export default {
    data() {
        return {
            name: 'Byron',
        }
    },
    beforeCreate() {
        console.log(this.name);
    },
    created() {
        // call initial data...
        console.log('data and function are available but not other html', this.name);
    },
    mounted() {
        
    },
}
</script>