<template>
    <div>
         <hr>
        <button class="btn btn-warning text-center" 
            v-on:click.prevent="addProductToCart()">
            Add To Cart
        </button>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                
            }
        },
        props:['productId', 'userId'],
        method:{
            addProductToCart(){
                alert(this.productId)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
