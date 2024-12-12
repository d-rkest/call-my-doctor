import React from 'react';

const categories = [
  { id: 'all', label: 'All' },
  { id: 'prescription', label: 'Prescription' },
  { id: 'otc', label: 'Over the Counter' },
  { id: 'firstaid', label: 'First Aid' },
  { id: 'vitamins', label: 'Vitamins & Supplements' },
];

interface CategoryFilterProps {
  selectedCategory: string;
  onCategoryChange: (category: string) => void;
}

export function CategoryFilter({ selectedCategory, onCategoryChange }: CategoryFilterProps) {
  return (
    <div className="flex space-x-4 overflow-x-auto pb-2">
      {categories.map((category) => (
        <button
          key={category.id}
          onClick={() => onCategoryChange(category.id)}
          className={`px-4 py-2 rounded-full whitespace-nowrap ${
            selectedCategory === category.id
              ? 'bg-blue-600 text-white'
              : 'bg-gray-100 text-gray-700 hover:bg-gray-200'
          }`}
        >
          {category.label}
        </button>
      ))}
    </div>
  );
}