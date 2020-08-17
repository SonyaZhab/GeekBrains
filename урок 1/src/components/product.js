const products = [
    {id: 1, title: 'Notebook', price: 20000},
    {id: 2, title: 'Mouse', price: 1500},
    {id: 3, title: 'Keyboard', price: 5000},
    {id: 4, title: 'Gamepad', price: 4500}
];

const renderProduct = (title, price, img = 'https://via.placeholder.com/250') => {
    return `<div class="product-item">
                <h3>${title}</h3>
                <p>${price}</p>
                <img src="${img}">
                <button class="by-btn">Добавить в корзину </button>
            </div>`;
};

const renderProducts = (list) => {
    const productList = list.map(product => {
        return renderProduct(product.title, product.price, product.img);
    });
    // console.log(productList);
    document.querySelector('.products').innerHTML = productList;
}
renderProducts(products);