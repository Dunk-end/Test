<template>
    <div id="app">
<!--        <header/>-->
            <router-view />
<!--        <footer/>-->
    </div>
</template>

<script>
    import Header from "./path/Header"
    import Footer from "./path/Footer"

    export default {
        comments: {
            Header,
            Footer
        }
    }
</script>
