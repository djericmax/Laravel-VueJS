<template>
    <div v-bind:class="definecor">
                    <div class="panel-heading">{{titulo}}</div>

                    <div class="panel-body">
                        <slot></slot>
                    </div>
                </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            definecor: function(){
                return "panel "+ (this.cor || "panel-default");
            }
        }
    }
</script>

<style media="screen">
    .blue {
        border-color: #142365;
    }

    .blue > .panel-heading {
    color: #eaecea;
    background-color: #142365;
    border-color: #142365;
    }

    .orange {
        border-color: #ef7400;
    }

    .orange > .panel-heading {
    color: #eaecea;
    background-color: #ef7400;
    border-color: #ef7400;
    }

    .green {
        border-color: #113a02;
    }

    .green > .panel-heading {
    color: #eaecea;
    background-color: #113a02;
    border-color: #113a02;
    }
</style>