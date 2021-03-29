<template>
    <section>
        <div class="header" style="position: sticky">
            <div class="container">
                <nav style="margin-left: -30px">
                    <router-link class="logo nav__link" to="/"><big><b>Laravel_blog</b></big></router-link>
                    <ul>
                        <li>
                            <router-link class="nav__link" to="/">Главная</router-link>
                        </li>
                        <li>
                            <router-link class="nav__link" to="/login">Войти</router-link>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</template>

<script>
    export default {

    }
</script>
