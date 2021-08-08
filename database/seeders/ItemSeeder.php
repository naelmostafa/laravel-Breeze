<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::table('items')->insert([
      'id' => '1',
      'name' => 'Snack Box',
      'description' => '2 pcs. of spicy or original chicken, fries and a fresh bun',
      'price' => '42.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '2',
      'name' => 'Chicken Fillet',
      'description' => 'Chicken fillet sandwich, fries & drink',
      'price' => '60.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '3',
      'name' => 'Supreme Box',
      'description' => '1 Supreme Sandwich + 1 pc chicken + small coleslaw + 1 Large Rice + Drink',
      'price' => '86.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '4',
      'name' => 'Strips Box',
      'description' => '3 pcs. of spicy or original crispy strips, fries and a fresh bun',
      'price' => '42.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '5',
      'name' => 'Supreme',
      'description' => 'Supreme Sandwich + Fries + drink',
      'price' => '68.00',
      'restaurant_id' => '2'
    ]);

    DB::table('items')->insert([
      'id' => '6',
      'name' => 'Twister',
      'description' => 'Twister Combo Sandwich + Fries + Drink',
      'price' => '50.00',
      'restaurant_id' => '2'
    ]);

    DB::table('items')->insert([
      'id' => '7',
      'name' => 'Mighty Zinger',
      'description' => 'Mighty Zinger sandwich, fries & drink.',
      'price' => '84.00',
      'restaurant_id' => '2'
    ]);

    DB::table('items')->insert([
      'id' => '8',
      'name' => 'Mighty Zinger Box',
      'description' => '1 Mighty Zinger Sandwich + 1 pc Chicken + 1 L Rice (without chicken) + Coleslaw + Pepsi Can',
      'price' => '102.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '9',
      'name' => 'Super Dinner',
      'description' => '4 pieces of Chicken + 1 Small Fries + 1 Small Coleslaw + Pepsi + 1 Bun',
      'price' => '92.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '10',
      'name' => 'Shrimp Box',
      'description' => '7 pcs shrimps + small Coleslaw + Small fries + Rice + Bun + 2 Cocktail sauces + Drink',
      'price' => '106.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '11',
      'name' => 'Buddy Bucket',
      'description' => '6 Pcs of Chicken + 2 Large Rice + 1 Litre Pepsi + 2 Tomia Sauces',
      'price' => '125.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '12',
      'name' => 'Big Filler Box',
      'description' => 'Big Filler Sandwich + Fries + Drink',
      'price' => '93.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '13',
      'name' => '9 PC Bucket',
      'description' => '9 pcs Chicken + 1 Family Fries + 1 L Coleslaw + 4 buns + 1 L Pepsi',
      'price' => '189.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '14',
      'name' => '15 PC Bucket',
      'description' => '15 pcs Chicken + 1 Family Fries + 1 L Coleslaw + 6 buns + 1 L Pepsi',
      'price' => '285.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '15',
      'name' => '21 PC Bucket',
      'description' => '21 pcs Chicken + 1 Family Fries + 1 L Coleslaw + 8 buns + 1 L Pepsi',
      'price' => '364.99',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '16',
      'name' => 'Shrimp Rizo',
      'price' => '40.99',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '17',
      'name' => 'French Fries',
      'price' => '18.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '18',
      'name' => 'Zinger Fries',
      'price' => '15.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '19',
      'name' => 'Rice without Chicken',
      'price' => '18.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '20',
      'name' => 'Coleslaw',
      'price' => '15.99',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '21',
      'name' => 'Rizo',
      'price' => '30.00',
      'restaurant_id' => '2'
    ]);
    DB::table('items')->insert([
      'id' => '22',
      'name' => 'Happy Meal,Chicken Macdo',
      'description' => 'A delicious burger with a breaded chicken patty, crunchy lettuce and mayo, all wrapped in a fresh bun. Add to that a side of small fries and your child’s favorite drink with a choice of milk, chocolate milk, or the following juices - orange, apple or tropical, and you sure will make their day.',
      'price' => '36.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '23',
      'name' => 'Happy Meal,Beef Burger',
      'description' => 'You want the best for your kids and so do we. Your child will love our Hamburger made with a 100% beef patty, onions, pickles, mustard and a dollop of tomato ketchup, all in a soft bun. Add to that a side of small fries and their favorite drink with a choice of milk, chocolate milk, or the following juices - orange, apple or tropical, and you\'ll make their day.',
      'price' => '32.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '24',
      'name' => 'Happy Meal,Cheeseburger',
      'description' => 'You want the best for your kids and so do we. Your child will love our Cheeseburger made with a 100% beef patty, melty cheese, chopped onions, pickles, ketchup and mustard, all in a soft burger bun. Add to that a side of small fries and their favorite drink with a choice of milk, chocolate milk, or the following juices - orange, apple or tropical, and you\'ll make their day.',
      'price' => '35.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '25',
      'name' => 'Cheese Burger',
      'description' => 'Sometimes all you need is a classic. A legendary combination of our 100% juicy beef, melty cheese, chopped onions, pickles, ketchup and mustard, all in a soft burger bun.',
      'price' => '16.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '26',
      'name' => 'Double Cheese Burger',
      'description' => 'You will be seeing double. Our legendary combination of not one but two 100% juicy beef patties, two slices melty cheese, chopped onions, pickles, ketchup and mustard, all in a soft burger bun.',
      'price' => '35.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '27',
      'name' => 'Big Mac',
      'description' => 'Mouthwatering perfection is all about two 100% beef patties, that unbeatably tasty Big Mac sauce, melting signature cheese, crisp shredded lettuce, onions, pickles and a bun in the middle all between a toasted sesame seed bun. You know you want to.',
      'price' => '42.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '28',
      'name' => 'Big Tasty',
      'description' => 'What makes our Big Tasty so tasty? It’s the juicy beef patty smothered in three extraordinary slices of Emmental cheese, and topped with sliced tomato, shredded lettuce, onions and that special Big Tasty sauce.',
      'price' => '67.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '29',
      'name' => 'McRoyale',
      'description' => 'The McRoyale has it all! A juicy beef patty accompanied by cheese,covered with our special McRoyale sauce, crispy lettuce, fresh tomatoes, zesty onions and pickles all wrapped in a sesame seed bun.',
      'price' => '59.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '30',
      'name' => 'McChicken',
      'description' => 'It’s hard to beat a classic. Deliciously crispy chicken topped with mayonnaise, shredded lettuce, and served on a perfectly toasty bun.',
      'price' => '42.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '31',
      'name' => 'Grand Chickrn Premier',
      'description' => 'A deliciously grand chicken patty topped with our special deluxe sauce, two fresh tomato slices, crispy lettuce, two slices of Emmental cheese and a piece of chicken roll served in a 5 inch bun.',
      'price' => '67.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '32',
      'name' => 'Chicken Fillet',
      'description' => 'It’s simple. A juicy white chicken breast encased in our special crispy coating with cool mustard mayo sauce, fresh tomatoes and onions, crispy lettuce, all wrapped in a fresh sesame seed bun.',
      'price' => '50.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '33',
      'name' => 'McNuggets 4 pieces',
      'description' => 'Everything is better when it is bite-sized. Like our nuggets made with tender juicy chicken breast in a crisp tempura coating. Start the fun with our delicious dipping sauces, in BBQ or Sweet & Sour.',
      'price' => '23.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '34',
      'name' => 'McNuggets 6 pieces',
      'description' => 'Everything is better when it is bite-sized. Like our nuggets made with tender juicy chicken breast in a crisp tempura coating. Start the fun with our delicious dipping sauces, in BBQ or Sweet & Sour.',
      'price' => '30.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '35',
      'name' => 'McNuggets 9 pieces',
      'description' => 'Everything is better when it is bite-sized. Like our nuggets made with tender juicy chicken breast in a crisp tempura coating. Start the fun with our delicious dipping sauces, in BBQ or Sweet & Sour.',
      'price' => '45.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '36',
      'name' => 'Chicken Caesar Salad',
      'description' => 'Crisp lettuce topped with crispy tender chicken strips, shredded Parmesan cheese, and a tangy Caesar dressing. Guaranteed enjoyment in every bite.',
      'price' => '37.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '37',
      'name' => 'McFries',
      'description' => 'Get them while they are hot. Our legendary super-tasty French fries are the perfect side to any meal. We only use the highest quality potatoes to create those delicious strands of crispy fluffy fries you love.',
      'price' => '25.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '38',
      'name' => 'Chocolate Fudge Sundae',
      'description' => 'Vanilla soft serve, smothered in chocolaty fudge sauce.',
      'price' => '15.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '39',
      'name' => 'Oreo McFlurry',
      'description' => 'Vanilla soft serve with OREO® Cookies mixed in.',
      'price' => '22.50',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '40',
      'name' => 'Chocolate Milkshake',
      'description' => 'Our Chocolate Milkshake is an indulgence in a cup. Stir it, slurp it, love it.',
      'price' => '25.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '41',
      'name' => 'Apple Pie',
      'description' => 'Delicious apples, lightly spiced with cinnamon, baked in a flaky pastry.',
      'price' => '25.00',
      'restaurant_id' => '1'
    ]);
    DB::table('items')->insert([
      'id' => '42',
      'name' => 'Chedder Pizza',
      'description' => 'Our pizza sauce combined with authentic Cheddar cheese and Mozzarella.',
      'price' => '85.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '43',
      'name' => 'Super Papa\'s',
      'description' => 'Pepperoni, Italian Sausage, Smoked Veal, Onions, Green Pepper, Fresh Mushroom, Black Olives',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '44',
      'name' => 'Hot and Spicy',
      'description' => 'Italian Sausage, Tomato, Onions, Green Pepper, Jalapeno',
      'price' => '80.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '45',
      'name' => 'Little Italy',
      'description' => 'Pepperoni, Italian Sausage, Fresh Mushroom, Black Olives, Oregano',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '46',
      'name' => 'Pepperoni',
      'description' => 'Loaded with Pepperoni and Extra Mozzarella Cheese',
      'price' => '80.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '47',
      'name' => 'Chicken BBQ',
      'description' => 'Grilled Chicken, Onions, Fresh Mushroom, BBQ Sauce',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '48',
      'name' => 'Chicken Super Papa\'s',
      'description' => 'Grilled Chicken, Chicken Sausage, Chicken Pepproni, Onions, Green Pepper, Fresh Mushroom, Black Olives',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '49',
      'name' => 'Cha Cha',
      'description' => 'Grilled Chicken, Chicken Sausage, Onions, Green Pepper',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '50',
      'name' => 'Mexican Ole',
      'description' => 'Grilled Chicken, Tomato, Onions, Green Pepper, Fresh Mushroom, Jalapeno',
      'price' => '95.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '51',
      'name' => 'Chicken Ranch',
      'description' => 'Grilled Chicken, Tomato, Fresh Mushroom, Ranch Sauce',
      'price' => '96.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '52',
      'name' => 'Smoky',
      'description' => 'Smoked Veal, Smoked Cheese, Onions, Gouda Cheese, Chedder Cheese, Creamy Sauce',
      'price' => '96.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '53',
      'name' => 'Cheese Burger',
      'description' => 'Italian Sausage, Tomato, Onion, Mozzarella Cheese with Burger Sauce',
      'price' => '96.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '54',
      'name' => '4x4',
      'description' => '4 types of pizza (Super Papa`s, Chicken BBQ, Garden Special and Margherita) OR (Chicken Super Papa\'s-Pepperoni- Garden Special and Margherita) 
Available in Family Size Only',
      'price' => '164.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '55',
      'name' => '6 Cheese',
      'description' => 'A blend of 6 delicious cheeses (Gouda,Cheddar , Emmental, Romano, Mozzarella, Edam )',
      'price' => '107.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '56',
      'name' => 'BBQ Poppers',
      'description' => 'Chicken Poppers, Beef Bacon, Onions, Ranch Sauce with BBQ Sauce Drizzled on top.',
      'price' => '107.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '57',
      'name' => 'Buffalo Poppers',
      'description' => 'Chicken Poppers,Beef Bacon, Onions, Jalapeno Pepper, Ranch Sauce with Buffalo Sauce Drizzled on top',
      'price' => '107.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '58',
      'name' => '3Cheese x2 Toppings',
      'description' => 'A blend of 3 delicious cheeses with 2 toppings of your choice (veggie, meat or chicken)',
      'price' => '107.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '59',
      'name' => 'Chicken Creamy',
      'description' => 'Grilled Chicken, Fresh Mushroom, Onion, Mozzarella Cheese with Creamy Cheese Sauce.',
      'price' => '107.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '60',
      'name' => 'Margherita',
      'description' => 'Mozzarella Cheese and Pizza Sauce',
      'price' => '67.00',
      'restaurant_id' => '3'
    ]);
    DB::table('items')->insert([
      'id' => '61',
      'name' => 'Garden Special',
      'description' => 'Tomato, Onions, Green Pepper, Fresh Mushroom, Black Olives',
      'price' => '80.00',
      'restaurant_id' => '3'
    ]);
  }
}
