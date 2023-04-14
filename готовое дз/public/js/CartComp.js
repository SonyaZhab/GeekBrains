Vue.component('cart', {
    data(){
      return {
          imgCart: 'https://placehold.it/70x70',
          cartUrl: '/getBasket.json',
          cartItems: [],
          showCart: false,
        }
    },
    methods: {
        addProduct(product){
            let find = this.cartItems.find(el => el.id_product === product.id_product);
            if(find){
                this.$parent.putJson(`/api/cart/${find.id_product}`, {quantity: 1});
                find.quantity++;
            } else {
                let prod = Object.assign({quantity: 1}, product);
                this.$parent.postJson(`/api/cart`, prod)
                .then(data => {
                    if(data.result === 1){
                        this.cartItems.push(prod);
                    }
                });
        }
    },
        remove(item) {
            this.$parent.getJson(`${API_URL}/deleteFromBasket.json`)
                .then(data => {
                    if(data.result === 1) {
                        if(item.quantity>1){
                            item.quantity--;
                        } else {
                            this.cartItems.splice(this.cartItems.indexOf(item), 1)
                        }
                    }
                })
        },
    },
    mounted(){
        this.$parent.getJson(`/api/cart`)
            .then(data => {
                for(let el of data.contents){
                    this.cartItems.push(el);
                }
            });
    },
    template: `
        <div>
            <button class="cart_button btn_cart" type="button" @click="showCart = !showCart">Корзина</button>
            <div class="cart_list" v-show="showCart">
                <p v-if="!cartItems.length">Корзина пуста</p>
                <cart_item class="cart_item" 
                    v-for="item of cartItems" 
                    :key="item.id_product"
                    :cart-item="item" 
                    :img="imgCart"
                    @remove="remove">
                </cart_item>
            </div>
        </div>`
});

Vue.component('cart_item', {
    props: ['cartItem', 'img'],
    template: `
                <div class="cart_item">
                    <div class="product_discr">
                        <img :src="img" alt="Some image">
                        <div class="desc">
                            <p class="product_title">{{cartItem.product_name}}</p>
                            <p class="product_quantity">Количество: {{cartItem.quantity}}</p>
                            <p class="product_single_price">{{cartItem.price}}₽ за единицу</p>
                        </div>
                    </div>
                    <div class="right_block">
                        <p class="product_price">{{cartItem.quantity*cartItem.price}}₽</p>
                        <button class="buy_btn" @click="$emit('remove', cartItem)">Удалить</button>
                    </div>
                </div>
    `
});