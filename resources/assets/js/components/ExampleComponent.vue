<template>
    <div class="faqContainer">
        <router-link to="/foo">Go to Foo</router-link>
        <router-link to="/bar">Go to Bar</router-link>



        <div class="headline1">Nutzungshinweise, Fragen & Antworten</div>

        <div class="categories">
            <faq-category-item></faq-category-item>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
