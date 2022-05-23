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

        },
        props:['productId', 'userId'],
        method:{
            addProductToCart(){
                if(this.userId == 0){
                    this.$toastr.e('You Need to Login,  to add this product in Cart');
                    return;
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
