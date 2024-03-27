// Fruit & Vegetables
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('fruitveg').addEventListener('change', function() {
        if (this.checked) {
            // Update options for the "Class" dropdown
            var classSelect = document.getElementById('classSelect');
            var classOptions = ['37A - Apples - Plate of 5', 
                                '37B - Apples - 3LB Bag', 
                                '37C - Grapes, Peaches, Raspberries, Blueberries',
                                '37D - Plums', 
                                '37E - Blackberries', 
                                '38A - Pears',
                                '38B - Arrangement of Fruit - Senior',
                                '39A - Apples - Plate of 5 - Junior',
                                '39B - Apples - 3LB Bag - Junior',
                                '39C - Arrangement of Fruit - Junior',
                                '39D - Blueberries - Junior',
                                '39E - Vegetables - Junior',
                                '39F - Vegetable Display - Junior',
                                '39G - Scarecrow - Junior',
                                '40A - Roots & Potatoes',
                                '40B - Vegetables']; // Add your new options here
            classOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                classSelect.appendChild(opt);
            });
        }
    });
});

// Creative Crafts

// Rug Hooking

// Art

// Photography

// Flowers

// Cooking

// Woodworking