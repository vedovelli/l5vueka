
<script>
    export default {
        props: ['address'],
        computed: {
            hasAddress () {
                return this.address !== undefined
            }
        },
    }
</script>

<template>
    <div>
        <div class="address" v-if="hasAddress">
            {{ address.street }}, {{ address.number }}<br>
            {{ address.city }}/{{ address.state }}
        </div>
    </div>
</template>

<style scoped>
    .address {
        padding: 10px;
        background-color: lightsteelblue;
        border-radius: 6px;
        border: #999 1px solid;
        margin-bottom: 10px;
    }
</style>