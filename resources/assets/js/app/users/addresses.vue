
<script>
    import VdUserAddress from './address.vue'
    import bus from '../utils/events/bus'
    export default {
        props: ['userId'],
        components: {
            VdUserAddress
        },
        mounted () {
            // bus.$on('get-addresses', obj => window.console.log(obj))
        },
        data () {
            return {
                list: []
            }
        },
    }
</script>

<template>
    <div>
        <vd-user-address v-for="address in list" :address="address"></vd-user-address>
    </div>
</template>