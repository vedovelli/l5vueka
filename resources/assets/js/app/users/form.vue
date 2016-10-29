
<script>
    import bus from '../utils/events/bus'
    export default {
        props: ['token'],
        data () {
            return {
                isEditing: false,
                user: {
                    id: 0,
                    name: '',
                    email: '',
                    password: '',
                },
            }
        },
        computed: {
            action () {
                if (this.isEditing) {
                    return `/usuarios/atualizar/${this.user.id}`
                } else {
                    return `/usuarios/criar`
                }
            },
        },
        mounted () {
            const modal = jQuery(this.$refs.modal)
            bus.$on('open-form', (obj) => {
                if (obj !== undefined) {
                    this.user = obj.user
                    this.isEditing = true
                }
                modal.modal('show')
            })
            modal.on('hidden.bs.modal', () => {
                this.user.id = 0
                this.user.name = ''
                this.user.email = ''
                this.user.password = ''
            })
        },
    }
</script>

<template>
    <div>
        <div ref="modal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Criar novo usuário</h4>
              </div>
              <div class="modal-body">
                <form method="post" :action="action">
                    <input type="hidden" name="_token" :value="token">
                    <div class="form-group">
                        <label for="name" class="control-label">Nome</label>
                        <input id="name" name="name" type="text" class="form-control" v-model="user.name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">E-mail</label>
                        <input id="email" name="email" type="email" class="form-control" v-model="user.email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Senha</label>
                        <input id="password" name="password" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</template>