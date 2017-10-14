<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!ab
                        {{ msg }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:function(){
          return {
              'msg':'this is msg',
              'list':[]
          }
        },
        models:{
            list:function(){
                this.list=[
                        ''
                ];
            },
            update:function(){

            },
            del:function(){

            },
        },
        created:{

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
