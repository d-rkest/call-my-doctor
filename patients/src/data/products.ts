import { Product } from '../types';

export const products: Product[] = [
  {
    id: '1',
    name: 'Aspirin',
    description: 'Pain reliever and fever reducer',
    price: 9.99,
    category: 'otc',
    image: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=800&q=80',
    inStock: true,
  },
  {
    id: '2',
    name: 'First Aid Kit',
    description: 'Complete emergency medical kit',
    price: 24.99,
    category: 'firstaid',
    image: 'https://images.unsplash.com/photo-1603398938378-e54eab446dde?auto=format&fit=crop&w=800&q=80',
    inStock: true,
  },
  {
    id: '3',
    name: 'Vitamin C',
    description: 'Immune system support',
    price: 15.99,
    category: 'vitamins',
    image: 'https://images.unsplash.com/photo-1616671276441-2f2c277b8bf6?auto=format&fit=crop&w=800&q=80',
    inStock: true,
  },
];