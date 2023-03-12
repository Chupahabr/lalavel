<template>
    <div class="contact">
        <h1>Contact page</h1>

        <!--<component :is="ExampleComponent">Something</component>-->
        <example-component></example-component>
    </div>
</template>

<script>
// Sub components
import ExampleComponent from "../components/ExampleComponent.vue";

export default {
    name: "Contact",

    components: {
        ExampleComponent
    },
}
</script>