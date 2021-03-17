<template>
    <section>
        <div class="header" style="position: sticky">
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
            <el-form style="margin-top: 150px; background: #fff; padding: 24px; border-radius: 4px; box-shadow: 0 10px 10px 1px #22222255;">
                <h3 style="margin-bottom: 12px;">Регистрация</h3>
                <el-form-item>
                    <el-input type="text" v-model="form_data.name" name="name" class="form-control" placeholder="Ваше имя, например: Иван" />
                </el-form-item>
                <el-form-item>
                    <el-input type="text" v-model="form_data.login" name="login" class="form-control" placeholder="Ваш логин, например: user" />
                </el-form-item>
                <el-form-item>
                    <el-input type="password" v-model="form_data.password" name="password" class="form-control" placeholder="Введите пароль" />
                </el-form-item>
                <el-form-item>
                    <el-input type="password" v-model="form_data.password_confirm" name="password_confirm" class="form-control" placeholder="Повторите пароль" />
                </el-form-item>
                <el-button @click.prevent='send' style="outline: none">Зарегистрироваться</el-button>
            </el-form>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                form_data: {
                    name: '',
                    login: '',
                    password: '',
                    password_confirm: ''
                }
            }
        },
        methods: {
            send () {
                axios.post('/register', this.form_data)
            }
        }
    }
</script>
