<template>
    <div>
        <div v-if="valid_errors" class="alert alert-danger">
            <ul>
                <li v-for="(value, Register) in valid_errors" :key="Register">
                    {{ value }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['errors'],
        computed: {
            valid_errors() {
                let errors = Object.values(this.errors);
                errors = errors.flat();

                return errors;
            }
        }
    }
</script>
