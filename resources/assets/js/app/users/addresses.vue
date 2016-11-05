
<script>
    import VdUserAddress from './address.vue'
    import bus from '../utils/events/bus'
    export default {
        props: ['userid'],
        components: {
            VdUserAddress
        },
        mounted () {
            bus.$on('get-addresses', obj => {
                if (this.userid === obj.userid && this.addresses.length === 0) {
                    this.isSearching = true
                    this.$http
                        .get(`endereco/${obj.userid}`)
                        .then(res => {
                            this.addresses = res.data.addresses
                            this.isSearching = false
                        })
                }
            })
        },
        data () {
            return {
                addresses: [],
                isSearching: false,
            }
        },
    }
</script>

<template>
    <div>
        <div class="text-center" v-show="isSearching">
            <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
        </div>
        <div class="row" v-show="!isSearching">
            <div class="col-md-6" v-for="address in addresses">
                <vd-user-address :address="address"></vd-user-address>
            </div>
        </div>
    </div>
</template>