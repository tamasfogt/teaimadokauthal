import Overview from './overview/module';
import Product from './product/module';

export default angular.module('myapp.webshop.products', [
    Product.name,
    Overview.name
])
