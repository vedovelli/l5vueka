
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