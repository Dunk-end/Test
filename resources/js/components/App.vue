<template>
    <div id="app">
<!--        <header/>-->
            <router-view />
<!--        <footer/>-->
    </div>
</template>

<script>
    import Header from "./Header"
    import Footer from "./Footer"

    export default {
        comments: {
            Header,
            Footer
        }
    }
</script>
