
<script>
    export default {
        methods: {
            ola () {
                alert('ola')
            }
        },
        data () {
            return {
                buttonLabel: 'O label do meu botão!'
            }
        },
    }

</script>


<template>
    <div>
        <h2>Teste teste</h2>
        <div>Olá a partir do componente custom!</div>
        <button @click="ola" class="btn btn-default btn-xs">
            {{ buttonLabel }}
        </button>
        <hr>
        <input type="text" class="form-control" v-model="buttonLabel">
    </div>
</template>

