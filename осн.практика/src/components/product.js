const API_URL = 'https://raw.githubusercontent.com/GeekBrainsTutorial/online-store-api/master/responses';

const app = new Vue({
    el: '#app',
    data: {
      catalogUrl: '/catalogData.json',
      products: [],
      imgCatalog: 'https://placehold.it/200x150',
      imgCart: 'https://placehold.it/100x75',
      searchLine: '',
      show: false,
      completeCart: ``
    },
    methods: {
      getJson(url){
        return fetch(url)
          .then(result => result.json())
          .catch(error => {
            console.log(error);
          })
      },
      addProduct(product){
        console.log(product.id_product);
      },
      filterFoods(){
        
      }
    },
    created(){
      this.getJson(`${API_URL + this.catalogUrl}`)
        .then(data => {
          for(let el of data){
            this.products.push(el);
          }
        });
    }
  });
  