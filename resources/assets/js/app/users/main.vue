
<script>
    import VdUsersTable from './table.vue'
    import VdUserForm from './form.vue'
    import bus from '../utils/events/bus'
    export default {
        props: ['list', 'token', 'success'],
        components: {
            VdUsersTable,
            VdUserForm
        },
        methods: {
            form () {
                bus.$emit('open-form')
            },
        },
    }
</script>

<template>
    <div>
        <h1>
            Gerenciamento de Usuários
            <small>[ <a href="#" @click.prevent="form">criar novo</a> ]</small>
        </h1>
        <div class="alert alert-success" v-show="success != ''">
            {{ success }}
        </div>
        <vd-user-form :token="token"></vd-user-form>
        <vd-users-table :list="list"></vd-users-table>
    </div>
</template>
