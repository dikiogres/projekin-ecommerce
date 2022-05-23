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
            async addProductToCart(){

                //checking if user logged in.

                if(this.userId == 0){
                    this.$toastr.e('You Need to Login,  to add this product in Cart');
                    return;
                }

                //if user logged in then add item to cart.

                let  response =  await axios.post('/cart', {
                    'product_id': this.productId
                })

                console.log(response.data);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
