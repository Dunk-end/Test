<template>
    <section>
        <header style="background: linear-gradient(180deg, rgba(25, 25, 25, .6),rgba(25, 25, 25, .4)), url('public/storage/images/header_bg.jpg');">
            <div class="header">
                <div class="container">
                    <nav>
                        <router-link class="logo nav__link" to="/"><big><b>Laravel_blog</b></big></router-link>
                        <ul>
                            <li>
                                <router-link class="nav__link" to="/">Главная</router-link>
                            </li>
                            <li>
                                <router-link class="nav__link" to="/register">Войти</router-link>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </section>
</template>

<script>
    export default {
        mounted() {
            // console.log('home')
        }
    }
</script>
