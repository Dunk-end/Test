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
                            <router-link class="nav__link" to="/register">Войти</router-link>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <el-form style="margin-top: 150px; background: #fff; padding: 24px; border-radius: 4px; box-shadow: 0 3px 10px 0 #22222255;">
                <h3 style="margin-bottom: 12px;">Вход</h3>
                <valid_errors v-if="valid_errors" :errors="valid_errors"></valid_errors>
                <el-form-item>
                    <el-input type="text" v-model="form_data.login" name="login" class="form-control" placeholder="Ваш логин, например: user" />
                </el-form-item>
                <el-form-item>
                    <el-input type="password" v-model="form_data.password" name="password" class="form-control" placeholder="Введите пароль" />
                </el-form-item>
                <el-button @click.prevent='send' style="outline: none">Войти</el-button>
                <router-link class="sign" to="/register">Нет аккаунта? - Зарегистрируйтесь!</router-link>
            </el-form>
        </div>
    </section>
</template>

<script>
    export default {
        data()
        {
            return {
                valid_errors: '',
                form_data: {
                    login: '',
                    password: '',
                }
            }
        },
        methods:
            {
                send()
                {
                    axios
                        .post('/login', this.form_data)
                        .then(response => {
                            this.$notify({
                                title: 'Успех!',
                                message: response.data.status,
                                type: 'success',
                                offset: 100
                            });
                            this.redirect()
                        })
                        .catch(error => {
                            if (error.response.status === 422) {
                                this.valid_errors = error.response.data.errors;
                                this.$notify.error({
                                    title: 'Ошибка!',
                                    message: 'Проверьте правильность заполнения полей!',
                                    offset: 100
                                });
                            }
                        })
                },
                redirect()
                {
                    this.$router.push({ path: '/' })
                }
            }
    }
</script>
