export interface Product {
  id: string;
  name: string;
  description: string;
  price: number;
  category: 'prescription' | 'otc' | 'firstaid' | 'vitamins';
  image: string;
  inStock: boolean;
}

export interface CartItem extends Product {
  quantity: number;
}