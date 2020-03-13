<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users Data Seed
        $user_items = [            
            ['name' => 'Administrator', 'email' => 'administrator@mail.com', 'password' => Hash::make('12345678'), 'level' => 'Administrator'],
            ['name' => 'Content Admin', 'email' => 'contentadmin@mail.com', 'password' => Hash::make('12345678'), 'level' => 'Content Admin'],
            ['name' => 'Copywriter', 'email' => 'copywriter@mail.com', 'password' => Hash::make('12345678'), 'level' => 'Copywriter']
        ];
    
        foreach ($user_items as $user_item) {
            App\User::create($user_item);
        }

        // Shops Data Seed
        $shop_items = [            
            ['name' => 'UK Shop', 'country_name' => 'United Kingdom'],
            ['name' => 'German Shop', 'country_name' => 'Germany'],
            ['name' => 'French Shop', 'country_name' => 'France']
        ];
    
        foreach ($shop_items as $shop_item) {
            App\Shop::create($shop_item);
        }

        // Products Data Seed
        $items = [      
            // DEFAULT PRODUCTS  
            ['product_name' => 'T-Series Ultimate Precision Trimmer', 'model_number' => 'MB7000', 'sku' => '43266560100', 'ean' => '5038061107289', 'price' => '89.99', 'sale_price' => null, 'description' => 'If you want to achieve precise edging, fine detailing and close trimming on your beard, neck and hairline, then you’ll love the T-Series Ultimate Precision Trimmer. The modified cut-away neck gives you enhanced visibility and the reversible T-blade ensures close, precise trimming for confident and controlled styling, every time.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
            ['product_name' => 'Ultimate Series RX5 Head Shaver', 'model_number' => 'XR1500', 'sku' => '41213560100', 'ean' => '5038061106022', 'price' => '110.00', 'sale_price' => null, 'description' => 'Bald is back, thanks to the Ultimate Series RX5 Head Shaver. Shave your whole head in less than 2-minutes* with the 5 cutting heads, and enjoy up to 50-Minutes’ Runtime that gives you up to a month’s worth of haircuts†, with a skin-close cutting performance of 0.2mm.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
            ['product_name' => 'Curl & Straight Confidence Straightener', 'model_number' => 'S6606', 'sku' => '45657560100', 'ean' => '4008496985296', 'price' => '129.99', 'sale_price' => '59.99', 'description' => 'The Curl & Straight Confidence Rotating Hot Air Styler includes a range of attachments, that have been expertly designed for easy curling and smoothing whilst you dry. It comes with a drying concentrator, a 30mm Hot Air Tong, a 40mm Hot Air Soft Bristle Brush and a Paddle Brush Attachment so you can confidently create loos

            Our unique twisted plates help those that normally struggle to curl their hair with straighteners to instead curl with confidence. Its intuitive design means it requires minimal technique to create your look, while the smooth, round outside housing instantly cools hair and sets long-lasting curls. With the Curl & Straight Confidence, looking like your best you has never been easier. 
            
            With a digital display that has 5 temperatures ranging from 150° and 230°, you can select the optimum temperature for your hair. Its ultra-smooth, ceramic coated plates are infused with anti-static tourmaline to create an effortless glide and frizz-free shine, leaving you turning heads. 
            
            With a fast heat-up time meaning it’s ready to use in 30 seconds, you can start creating sought after styles in seconds. It also has a temperature boost function for if you need a little extra heat to help you ‘Get Your You On’.
            
            The Curl & Straight Confidence also has easy-grip cool tips that take care of protecting your fingertips. Other benefits include its heat resistant storage sleeve, and the automatic safety shut off after 60 minutes - which means you can leave the house with peace of mind that you look incredible, and that your new favourite tool is safely switched off.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
            ['product_name' => 'Mineral Glow Straightener', 'model_number' => 'S5408', 'sku' => '45687540100', 'ean' => '5038061106459', 'price' => '49.99', 'sale_price' => null, 'description' => 'The Mineral Glow Straightener in a lilac and pastel blue ombré, makes creating a sleek, straight style or beachy loose waves, effortless. Thanks to its Advanced Ceramic coating infused with 4x naturally sourced minerals including quartz, tourmaline, opal and moonstone, you can always enjoy beautifully smooth results. 

            With 9 temperature settings up to 230°C, you can tailor the temperature to your hair type and if you need a little extra heat, the straightener has a temperature boost button.
            
            The last thing you want to do is worry you’ve left your straightener on, well now you don’t have to, thanks to the automatic safety switch off after 60 minutes.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
            ['product_name' => 'Mineral Glow Hairdryer', 'model_number' => 'D5408', 'sku' => '45686560100', 'ean' => '5038061106374', 'price' => '60.00', 'sale_price' => '45.00', 'description' => 'Featuring an Advanced Ceramic Coated Grille Infused with 4x Naturally Sourced Minerals – Quartz, Tourmaline, Opal and Moonstone - the Mineral Glow Hairdryer will help you achieve beautiful, sleek results. It makes a style statement of its own with its lilac and pastel blue ombré finish.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        
        // UK SHOP
        ['shops_id' => 1, 'product_name' => 'T-Series Ultimate Precision Trimmer', 'model_number' => 'MB7000', 'sku' => '43266560100', 'ean' => '5038061107289', 'price' => '89.99', 'sale_price' => null, 'description' => 'If you want to achieve precise edging, fine detailing and close trimming on your beard, neck and hairline, then you’ll love the T-Series Ultimate Precision Trimmer. The modified cut-away neck gives you enhanced visibility and the reversible T-blade ensures close, precise trimming for confident and controlled styling, every time.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 1, 'product_name' => 'Ultimate Series RX5 Head Shaver', 'model_number' => 'XR1500', 'sku' => '41213560100', 'ean' => '5038061106022', 'price' => '110.00', 'sale_price' => null, 'description' => 'Bald is back, thanks to the Ultimate Series RX5 Head Shaver. Shave your whole head in less than 2-minutes* with the 5 cutting heads, and enjoy up to 50-Minutes’ Runtime that gives you up to a month’s worth of haircuts†, with a skin-close cutting performance of 0.2mm.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 1, 'product_name' => 'Curl & Straight Confidence Straightener', 'model_number' => 'S6606', 'sku' => '45657560100', 'ean' => '4008496985296', 'price' => '129.99', 'sale_price' => '59.99', 'description' => 'The Curl & Straight Confidence Rotating Hot Air Styler includes a range of attachments, that have been expertly designed for easy curling and smoothing whilst you dry. It comes with a drying concentrator, a 30mm Hot Air Tong, a 40mm Hot Air Soft Bristle Brush and a Paddle Brush Attachment so you can confidently create loos

        Our unique twisted plates help those that normally struggle to curl their hair with straighteners to instead curl with confidence. Its intuitive design means it requires minimal technique to create your look, while the smooth, round outside housing instantly cools hair and sets long-lasting curls. With the Curl & Straight Confidence, looking like your best you has never been easier. 
        
        With a digital display that has 5 temperatures ranging from 150° and 230°, you can select the optimum temperature for your hair. Its ultra-smooth, ceramic coated plates are infused with anti-static tourmaline to create an effortless glide and frizz-free shine, leaving you turning heads. 
        
        With a fast heat-up time meaning it’s ready to use in 30 seconds, you can start creating sought after styles in seconds. It also has a temperature boost function for if you need a little extra heat to help you ‘Get Your You On’.
        
        The Curl & Straight Confidence also has easy-grip cool tips that take care of protecting your fingertips. Other benefits include its heat resistant storage sleeve, and the automatic safety shut off after 60 minutes - which means you can leave the house with peace of mind that you look incredible, and that your new favourite tool is safely switched off.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 1, 'product_name' => 'Mineral Glow Straightener', 'model_number' => 'S5408', 'sku' => '45687540100', 'ean' => '5038061106459', 'price' => '49.99', 'sale_price' => null, 'description' => 'The Mineral Glow Straightener in a lilac and pastel blue ombré, makes creating a sleek, straight style or beachy loose waves, effortless. Thanks to its Advanced Ceramic coating infused with 4x naturally sourced minerals including quartz, tourmaline, opal and moonstone, you can always enjoy beautifully smooth results. 

        With 9 temperature settings up to 230°C, you can tailor the temperature to your hair type and if you need a little extra heat, the straightener has a temperature boost button.
        
        The last thing you want to do is worry you’ve left your straightener on, well now you don’t have to, thanks to the automatic safety switch off after 60 minutes.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 1, 'product_name' => 'Mineral Glow Hairdryer', 'model_number' => 'D5408', 'sku' => '45686560100', 'ean' => '5038061106374', 'price' => '60.00', 'sale_price' => '45.00', 'description' => 'Featuring an Advanced Ceramic Coated Grille Infused with 4x Naturally Sourced Minerals – Quartz, Tourmaline, Opal and Moonstone - the Mineral Glow Hairdryer will help you achieve beautiful, sleek results. It makes a style statement of its own with its lilac and pastel blue ombré finish.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        
        // German SHOP
        ['shops_id' => 2, 'product_name' => 'T-Series Ultimate Precision Trimmer', 'model_number' => 'MB7000', 'sku' => '43266560100', 'ean' => '5038061107289', 'price' => '89.99', 'sale_price' => null, 'description' => 'If you want to achieve precise edging, fine detailing and close trimming on your beard, neck and hairline, then you’ll love the T-Series Ultimate Precision Trimmer. The modified cut-away neck gives you enhanced visibility and the reversible T-blade ensures close, precise trimming for confident and controlled styling, every time.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 2, 'product_name' => 'Curl & Straight Confidence Straightener', 'model_number' => 'S6606', 'sku' => '45657560100', 'ean' => '4008496985296', 'price' => '129.99', 'sale_price' => '59.99', 'description' => 'The Curl & Straight Confidence Rotating Hot Air Styler includes a range of attachments, that have been expertly designed for easy curling and smoothing whilst you dry. It comes with a drying concentrator, a 30mm Hot Air Tong, a 40mm Hot Air Soft Bristle Brush and a Paddle Brush Attachment so you can confidently create loos

        Our unique twisted plates help those that normally struggle to curl their hair with straighteners to instead curl with confidence. Its intuitive design means it requires minimal technique to create your look, while the smooth, round outside housing instantly cools hair and sets long-lasting curls. With the Curl & Straight Confidence, looking like your best you has never been easier. 
        
        With a digital display that has 5 temperatures ranging from 150° and 230°, you can select the optimum temperature for your hair. Its ultra-smooth, ceramic coated plates are infused with anti-static tourmaline to create an effortless glide and frizz-free shine, leaving you turning heads. 
        
        With a fast heat-up time meaning it’s ready to use in 30 seconds, you can start creating sought after styles in seconds. It also has a temperature boost function for if you need a little extra heat to help you ‘Get Your You On’.
        
        The Curl & Straight Confidence also has easy-grip cool tips that take care of protecting your fingertips. Other benefits include its heat resistant storage sleeve, and the automatic safety shut off after 60 minutes - which means you can leave the house with peace of mind that you look incredible, and that your new favourite tool is safely switched off.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        ['shops_id' => 2, 'product_name' => 'Mineral Glow Straightener', 'model_number' => 'S5408', 'sku' => '45687540100', 'ean' => '5038061106459', 'price' => '49.99', 'sale_price' => null, 'description' => 'The Mineral Glow Straightener in a lilac and pastel blue ombré, makes creating a sleek, straight style or beachy loose waves, effortless. Thanks to its Advanced Ceramic coating infused with 4x naturally sourced minerals including quartz, tourmaline, opal and moonstone, you can always enjoy beautifully smooth results. 

        With 9 temperature settings up to 230°C, you can tailor the temperature to your hair type and if you need a little extra heat, the straightener has a temperature boost button.
        
        The last thing you want to do is worry you’ve left your straightener on, well now you don’t have to, thanks to the automatic safety switch off after 60 minutes.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
        
        // French SHOP
        ['shops_id' => 3, 'product_name' => 'T-Series Ultimate Precision Trimmer', 'model_number' => 'MB7000', 'sku' => '43266560100', 'ean' => '5038061107289', 'price' => '89.99', 'sale_price' => null, 'description' => 'If you want to achieve precise edging, fine detailing and close trimming on your beard, neck and hairline, then you’ll love the T-Series Ultimate Precision Trimmer. The modified cut-away neck gives you enhanced visibility and the reversible T-blade ensures close, precise trimming for confident and controlled styling, every time.', 'product_images' => null, 'user_manual' => null, 'status' => 'A'],
    
    ];
    
        foreach ($items as $item) {
            App\Product::create($item);
        }
    }
}
