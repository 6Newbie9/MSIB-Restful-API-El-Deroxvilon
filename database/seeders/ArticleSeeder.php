<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Author;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Electronic',
            'Fashion',
            'Food',
            'Health',
            'Games',
        ];

        $articletitle = [
            'Electronic' => [
                '5G Smartphones: What You Need to Know',
                'The Rise of Smart Home Devices',
                'Latest Innovations in Wearable Technology',
                'Electric Vehicles: The Future of Transportation',
                'Top Laptops for Students in 2024',
                'High-Resolution TVs: A Buyer’s Guide',
                'Trends in Gaming Consoles for 2024',
                'Best Wireless Earbuds of 2024',
                'AI Assistants: How They Are Changing Our Lives',
                'The Evolution of Augmented Reality',
                'Drones: The Future of Aerial Photography',
                'Blockchain Technology: Beyond Cryptocurrency',
                'The Impact of 3D Printing on Manufacturing',
                'Cybersecurity: Protecting Your Digital Life',
                'Smart Wearables: The Health Benefits Explained',
                'The Future of Robotics in Everyday Life',
                'Home Automation: Making Life Easier',
                'Electric Bicycles: A Sustainable Transport Solution',
                'Top Gadgets for Remote Workers in 2024',
                'Augmented Reality in Education: Enhancing Learning',
                'The Rise of Subscription-Based Tech Services',
            ],
            'Fashion' => [
                'Sustainable Fashion: Trends in 2024',
                'Must-Have Accessories for This Season',
                'The Comeback of Vintage Styles',
                'Streetwear Trends to Follow',
                'How to Style Oversized Clothing',
                'Color Palettes for Spring 2024',
                'The Impact of Social Media on Fashion',
                'Best Fashion Apps for Your Wardrobe',
                'Fashion Collaborations to Look Out For',
                'Innovative Fabrics: The Future of Clothing',
                'The Influence of Celebrities on Fashion Trends',
                'How to Transition Your Wardrobe for Fall',
                'Fashion Hacks: Tips for Every Closet',
                'The Importance of Body Positivity in Fashion',
                'Seasonal Wardrobe Essentials: What You Need',
                'Diversity in Fashion: Representation Matters',
                'Fashion Photography: Tips for Capturing Style',
                'Accessorizing: The Key to Any Outfit',
                'Fashion Marketing in the Digital Age',
                'Eco-Friendly Fabrics: What to Look For',
            ],
            'Food' => [
                'Plant-Based Diets: Health Benefits and Recipes',
                'Global Food Trends to Try in 2024',
                'The Rise of Meal Kit Delivery Services',
                'Healthy Snacks for On-the-Go',
                'The Importance of Local Sourcing',
                'Best Kitchen Gadgets for Home Chefs',
                'Gourmet Coffee Trends to Watch',
                'Fermented Foods: Benefits and Recipes',
                'The Art of Food Presentation',
                'Understanding Superfoods: What You Need to Know',
                'Food Pairing: Enhancing Flavors in Your Cooking',
                'The Impact of Globalization on Food Culture',
                'How to Create Balanced Meals',
                'Exploring Regional Cuisines Around the World',
                'The Science of Cooking: Chemistry in the Kitchen',
                'The Popularity of Plant-Based Meat Alternatives',
                'Healthy Meal Prep: Tips and Tricks',
                'The Future of Sustainable Eating',
                'Street Food: A Culinary Adventure',
                'How to Reduce Food Waste at Home',
            ],
            'Health' => [
                'Mental Health Awareness: Strategies for Wellness',
                'Latest Trends in Fitness Tech',
                'Nutrition Myths Debunked',
                'The Importance of Sleep for Health',
                'Staying Active: Workouts You Can Do at Home',
                'Telemedicine: The Future of Healthcare',
                'Mindfulness Practices for Stress Relief',
                'Best Supplements for Overall Health',
                'The Role of Technology in Health Monitoring',
                'Understanding the Impact of Nutrition on Mental Health',
                'Holistic Approaches to Health and Wellness',
                'The Benefits of Yoga for Mind and Body',
                'How to Create a Healthy Work-Life Balance',
                'The Impact of Social Media on Mental Health',
                'Aging Gracefully: Tips for Seniors',
                'Preventative Healthcare: Importance and Strategies',
                'Chronic Illness: Coping Mechanisms and Support',
                'Fitness Trends: What to Expect in 2024',
                'Nutritional Psychology: Food and Mood Connection',
                'The Importance of Hydration for Health',
            ],
            'Games' => [
                'Top Video Games to Look Forward to in 2024',
                'The Evolution of Esports: A Growing Industry',
                'Virtual Reality Gaming: What’s Next?',
                'Best Indie Games of 2024',
                'The Impact of Streaming on Gaming Culture',
                'Game Development Trends: What’s Changing?',
                'Cross-Platform Play: The Future of Gaming',
                'The Rise of Mobile Gaming in 2024',
                'Gaming Communities: Building Connections Online',
                'The Role of Storytelling in Modern Games',
                'Game Design: The Process Behind the Scenes',
                'The Psychology of Gaming: Why We Play',
                'Diversity in Gaming: Representation Matters',
                'The Best Multiplayer Games of 2024',
                'How Gaming Impacts Social Skills',
                'The Future of Gaming Hardware: What to Expect',
                'How to Start a Gaming Channel on YouTube',
                'The Influence of Gaming on Pop Culture',
                'Game Mechanics: What Makes a Game Fun?',
                'The Rise of Retro Games in Modern Culture',
            ],
        ];

        foreach ($categories as $categoryName) {
            Category::firstOrCreate(['name' => $categoryName]);
        }

        $categories = Category::all();
        $authors = Author::all();

        foreach ($categories as $category) {
            foreach ($articletitle[$category->name] as $title) {
                $randomCategory = $categories->random();
                $randomAuthor = $authors->random();

                Article::create([
                    'title' => $title,
                    'content' => 'Content for ' . $title,
                    'category_id' => $randomCategory->id,
                    'author_id' => $randomAuthor->id,
                ]);
            }
        }

    }
}


