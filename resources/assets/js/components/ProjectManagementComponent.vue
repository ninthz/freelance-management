<script>
import vSelect from 'vue-select'
export default {
    components: {
      'v-select': vSelect
    },
    data: function data() {
        return {
            message: 'Hello'
        }
    },
    methods: {
      openCreateModal() {
          this.$modal.show('create-project');
      },
      closeCreateModal() {
          this.$modal.hide('create-project');
      }
    }
}
</script>

<style lang="scss">
.btn-floating {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    position: fixed;
    bottom: 30px;
    right: 30px;
    cursor: pointer;
    box-shadow: 0px 2px 5px #666;
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}
</style>
