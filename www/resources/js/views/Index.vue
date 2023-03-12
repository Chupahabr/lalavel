<template>
    <h1>Home page</h1>

    <product-slider />
</template>

<script>
// Sub components
import ProductSlider from "../components/ProductSlider.vue";

export default {
    name: "Index",

    components: {
        ProductSlider
    },
}
</script>