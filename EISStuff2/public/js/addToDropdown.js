$(document).ready(function() {
    $('#addForm').click(function(event) {
        event.preventDefault();
        // Get the selected values from the dropdowns
        var selectedClass = $('#classSelect').val();
        var selectedSection = $('#sectionSelect').val();

        // Create a new row for the table
        var newRow = $('<tr>');

        // Add input fields for each column with the selected values
        newRow.append('<td>' + selectedClass + '</td>');
        newRow.append('<td><a href="#" class="sectionLink">' + selectedSection + '</a></td>');
        newRow.append('<td><button type="button" class="deleteRow">Delete</button></td>');

        // Append the new row to the table
        $('#formTable tbody').append(newRow);
    });

    // Delete row functionality
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('tr').remove();
    });

    // Handle click on section link
    $(document).on('click', '.sectionLink', function(event) {
        event.preventDefault();
        // Get the selected section text
        var selectedSection = $(this).text();
        // Perform redirection or any other action based on the selected section
        // For example:
        if (selectedSection === 'Collection - 5 Plates of 5, any named variety, name on plate (early or late)') {
            window.location.href = 'form_section1.html';
        } else if (selectedSection === 'Section 2') {
            window.location.href = 'form_section2.html';
        } else if (selectedSection === 'Section 3') {
            window.location.href = 'form_section3.html';
        }
        // Add more conditions as needed for other sections
    });
});

// Fruit & Vegetables
document.addEventListener('DOMContentLoaded', function() {
    var classSelect = document.getElementById('classSelect');
    var sectionSelect = document.getElementById('sectionSelect');
    var originalOptions = sectionSelect.innerHTML;

    document.getElementById('fruitveg').addEventListener('change', function() {
        if (this.checked) {
            // Remove existing options
            while (classSelect.firstChild) {
                classSelect.removeChild(classSelect.firstChild);
            }
            // Add new options
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
                                '40B - Vegetables',
                                '40C - Vegetable Display - Senior',
                                '40D - Heaviest Pumpkin or Squash',
                                '40E - Herbs',
                                '41A - Grains - Sheaf & Seed',
                                '41B - Grassland',
                                '42 - Artistic Display'];
            classOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                classSelect.appendChild(opt);
            });
        }
    });

    // Event listener for classSelect dropdown change
    classSelect.addEventListener('change', function() {
        var selectedClass = classSelect.value;
        // Remove existing options
        while (sectionSelect.firstChild) {
            sectionSelect.removeChild(sectionSelect.firstChild);
        }

        // Add new options based on the selected class
        if (selectedClass === '37A - Apples - Plate of 5') {
            var sectionOptions = [  'Collection - 5 Plates of 5, any named variety, name on plate (early or late)',
                                    'Astrachan',
                                    'Crimson Beauty',
                                    'Crimson Gravestein',
                                    'Early Mcintosh',
                                    'Melba',
                                    'Bough Sweet',
                                    'Yellow Transparent',
                                    'Scotia',
                                    'Close',
                                    'Lodi',
                                    'Vista Bella',
                                    'Old Fashion Gravenstein',
                                    'Any Named Variety (state name)'];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '37B - Apples - 3LB Bag') {
            var sectionOptions = [  'Collection - 5 Plates of 5, any named variety, name on plate (early or late)',
                                    'Astrachan',
                                    'Crimson Beauty',
                                    'Crimson Gravestein',
                                    'Early Mcintosh',
                                    'Melba',
                                    'Bough Sweet',
                                    'Yellow Transparent',
                                    'Scotia',
                                    'Close',
                                    'Lodi',
                                    'Vista Bella',
                                    'Old Fashion Gravenstein',
                                    'Any Named Variety (state name)'];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } 
        if (selectedClass === '37C - Grapes, Peaches, Raspberries, Blueberries') {
            var sectionOptions = [  'Grapes - 3 bunches, any named variety',
                                    'Peaches - Red Haven, 5',
                                    'Peaches - any named variety',
                                    'Raspberries - stems removed, one pint container',
                                    'Blueberries - wild, one pint container',
                                    'Blueberries - cultivated, one pint container'];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '37D - Plums') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '37E - Blackberries') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '38A - Pears') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '38B - Arrangement of Fruit - Senior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39A - Apples - Plate of 5 - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39B - Apples - 3LB Bag - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39C - Arrangement of Fruit - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39D - Blueberries - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39E - Vegetables - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39F - Vegetable Display - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '39G - Scarecrow - Junior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '40A - Roots & Potatoes') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '40B - Vegetables') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '40C - Vegetable Display - Senior') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '40D - Heaviest Pumpkin or Squash') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '40E - Herbs') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '41A - Grains - Sheaf & Seed') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '41B - Grassland') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
            });
        } if (selectedClass === '42 - Artistic Display') {
            var sectionOptions = ['Section 1', 'Section 2', 'Section 3', /* Add more options as needed */];
            sectionOptions.forEach(function(option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.text = option;
                sectionSelect.appendChild(opt);
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