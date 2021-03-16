<template>
    <section>
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
        <div class="container">
            <form action="">
                <input type="text" name="name" class="form-control" placeholder="Ваше имя, например: Иван">
                <input type="text" name="login" class="form-control" placeholder="Ваш логин, например: user">
                <input type="password" name="password" class="form-control" placeholder="Введите пароль">
                <input type="password" name="password_confirm" class="form-control" placeholder="Повторите пароль">
            </form>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>
